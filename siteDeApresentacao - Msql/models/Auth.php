<?php
// CLASSE AUTH - classe para autentificação (validar token, validar login, validar email)

require 'dao/UserDaoSQLServer.php';

class Auth {
    private $pdo;
    private $base;

    public function __construct(PDO $pdo, $base) {
        $this->pdo = $pdo;
        $this->base = $base;
    }

    // Verificar token
    public function checkToken() {
        if (!empty($_SESSION['token'])) {
            $token = $_SESSION['token'];
            $userDao = new UserDaoSQLServer($this->pdo);
            $user = $userDao->findByToken($token);
            if ($user) {
                return $user;
            }
        }

        header("Location: http://localhost/viaVarejo/login.php");
        exit;
    }

    // VALIDAR O LOGIN 
    public function validateLogin($email, $password){
        // Vai pegar o pdo do usuario que logou
        $userDao = new UserDaoSQLServer($this->pdo); 
        // Verifica se tem email
        $user = $userDao->findByEmail($email);
        // Se tiver email, verifica a senha, formula o token, guarda na SESSION['token'] e guarda no pdo do token do usuario logado.
        if($user){ 
            if(password_verify($password, $user->password)){
               $token = md5(time().rand(0,376));
               $_SESSION['token'] = $token;
               $user->token = $token;
               $userDao->update($user);
               return true;
            }
        }
        return false;
    }

    // Validar o email
    public function emailExists($email){
        $userDao = new UserDaoSQLServer($this->pdo); 
        return $userDao->findByEmail($email)? true:false;
    }


    // Registrar usuario -> criar um usuario. 
    public function registerUser($name, $email, $password){
        $userDao = new UserDaoSQLServer($this->pdo); 

        // tratativa das variaveis 
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $token = md5(time().rand(0,376));
        // atualizando a classe usuario com as variaveis corretas e tratadas 
        $newUser = new User();
        $newUser->name = $name;
        $newUser->email = $email;
        $newUser->password = $hash;
        $newUser->token = $token;
        // inserindo os dados no banco 
        $userDao->insert($newUser);
        // abrindo a sessão 
        $_SESSION['token'] = $token;
    }



}

    