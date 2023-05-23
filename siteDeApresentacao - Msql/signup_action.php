<?php
//  echo "chegou";
//  exit;
require 'config.php';
require 'models/Auth.php';

$name = filter_input(INPUT_POST, 'name');
$email =  filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$password = filter_input(INPUT_POST, 'password');
//Verificar se o login e a senha estão corretos
if($email && $password && $name){
    
    $auth = new Auth($conexao, $base);
   // Verifica se tem o email se não tiver ele faz a função abaixo.
    if($auth->emailExists($email) === false){
     
      $auth->registerUser($name, $email, $password);
      header("Location: ".$base);
      exit;

    }else{
      $_SESSION['flash'] = 'E-mail já cadastrado';
      header("Location: ".$base."/signup.php");
      exit;
    }
    
}
 
$_SESSION['flash'] = 'E-mail e/ou senha errados.';
// header("Location:".$base."/login.php");
header("Location: http://localhost/viaVarejo/login.php");
exit;

?>