<?php
/** Exemplo de classe POPO - Plain Old PHP Object */
class Usuario {
    private $id;
    private $email;
    private $senha;
    private $nome;
    private $imagemURL;

    function __construct($email, $senha, $nome) {
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;
    }
    
    function getId() {
        return $this->id;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getImagemURL() {
        return $this->imagemURL;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setImagemURL($imagemURL) {
        $this->imagemURL = $imagemURL;
    }
    
}
