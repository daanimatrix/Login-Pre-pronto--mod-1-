<?php
require_once 'models/User.php';

class UserDaoSQLServer implements UserDAO{
    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    private function generateUser($array){
        $u = new User();
        $u->id = $array['id'] ?? 0;
        $u->email = $array['email'] ?? '';
        $u->password = $array['password'] ?? '';
        $u->name =  $array['name'] ?? '';
        $u->token =  $array['token'] ?? '';


        return $u;
    }

    // //Encontrar se tem o token no banco
    public function findByToken($token){
        if(!empty($token)){

            $query = $this->pdo->prepare("SELECT * FROM usuario WHERE token = :token ");
            $query->bindValue(':token', $token);
            $query->execute();
            if($query->rowCount() > 0){
                $data = $query->fetch(PDO::FETCH_ASSOC);
                $user = $this->generateUser($data);
                return $user;
            }
        }
        return false;
    }

   

        // //Encontrar se tem o token no banco
        public function findByEmail($email){
                if (!empty($email)) {
                    $query = $this->pdo->prepare("SELECT * FROM db_viavarejo.usuario WHERE email = :email");
                    $query->bindValue(':email', $email);
                    $query->execute();
                    
                    if ($query->rowCount() > 0) {
                        $data = $query->fetch(PDO::FETCH_ASSOC);
                        $user = $this->generateUser($data);
                        return $user;
                    }
                }
                
                return false;
            }



        // Atualização do usuario logado
        public function update(User $u){
            // Query com atualização 
            $sql = $this->pdo->prepare("UPDATE usuario SET
                email = :email,
                senha = :password,
                name = :nome,
                token = :token");
            
            // Enviando os dados para a query.
            $sql->bindValue(':email',$u->email);
            $sql->bindValue(':senha',$u->password);
            $sql->bindValue(':nome',$u->name);
            $sql->bindValue(':token',$u->token);
            $sql->bindValue(':id',$u->id);
            $sql->execute();

            return true;
        }

        public function insert(User $u){
            $sql = $this->pdo->prepare("INSERT INTO usuario (
                email, senha, nome, token
            ) VALUES (
                :email, :password, :nome, :token
            )");
    
            $sql->bindValue(':email', $u->email);
            $sql->bindValue(':password', $u->password);
            $sql->bindValue(':nome', $u->name);
            $sql->bindValue(':token', $u->token);
            $sql->execute();
    
            return true;
        }
    
        }
