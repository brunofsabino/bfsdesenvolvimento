<?php
class Usuarios {
    private $id;
    private $name;
    private $email;
    private $password;
    private $telefone;

    public function setId($id) {
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setEmail($email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }

    public function setPassword($p){
        $p = md5($p);
        $this->password = $p;
    }
    public function getPassword(){
        return $this->password;
    }

    public function setTelefone($t){
        $this->telefone = $t;
    }
    public function getTelefone(){
        return $this->telefone;
    }
}

interface UsuarioD {
    public function cadastrar(Usuarios $u);
}