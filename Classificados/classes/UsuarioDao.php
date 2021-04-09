<?php
require_once 'Usuarios.php';

class UsuarioDao implements UsuarioD { //extends UsuarioDao
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }
    public function cadastrar(Usuarios $u){
        $sql = $this->pdo->prepare("INSERT INTO usuarios (name, email, senha, telefone) VALUES (:name, :email, :senha, :telefone)");
        $sql->bindValue(':name',$u->getName());
        $sql->bindValue(':email',$u->getEmail());
        $sql->bindValue(':senha',$u->getPassword());
        $sql->bindValue(':telefone',$u->getTelefone());
        $sql->execute();

        $u->setId($this->pdo->lastInsertId());
        return $u;
    }
    public function findEmail($email){
        
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $sql->bindValue(':email',$email);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $usuario = $sql->fetch();
            $u = new Usuarios();
            $u->setName($usuario['name']);
            $u->setEmail($usuario['email']);
            $u->setPassword($usuario['senha']);
            $u->setTelefone($usuario['telefone']);

            return $u;
        } else {
            return false;
        }
    }
    public function findId($id){
        
        $sql = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(':id',$id);
        $sql->execute();

        if($sql->rowCount() > 0) {
            $usuario = $sql->fetch();
            $u = new Usuarios();
            $u->setName($usuario['name']);
            $u->setEmail($usuario['email']);
            $u->setPassword($usuario['senha']);
            $u->setTelefone($usuario['telefone']);

            return $u->getName();
        } else {
            return false;
        }
    }

    public function login( $email,  $senha) {
        echo $email.' '.$senha;
        $sql = $this->pdo->prepare("SELECT id  FROM usuarios WHERE email = :email AND senha = :senha");
        $sql->bindValue(':email', $email);
        $sql->bindValue(':senha', $senha);
        $sql->execute();   

        if($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['login'] = $dado['id'];
            return true;
        } else {
            return false;
        }
    }
}