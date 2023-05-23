<?php
require ("config.php");

class User {
    public $id;
    public $email;
    public $password;
    public $name;
    public $token;


    public function getId(){
        return $this->id;
    }
    
    public function setId($value){
         $this->id = $value;
    }

    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($value){
         $this->email = $value;
    }


    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword($value){
         $this->password = $value;
    }


    public function getName(){
        return $this->name;
    }
    
    public function setName($value){
         $this->name = $value;
    }


    public function getToken(){
        return $this->token;
    }
    
    public function setToken($value){
         $this->token = $value;
    }


}



interface UserDAO {
    public function findByToken($token);
    public function findByEmail($email);
    // public function findById($id);
    public function update(User $u);
    public function insert(User $u);
}

