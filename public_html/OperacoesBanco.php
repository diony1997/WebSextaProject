<?php
require_once './Util/DataSource.php';
require_once './Util/Usuario.php';

class OperacoesBanco {
    private $linkDB;
    
    function __construct() {
        $this->linkDB = new DataSource();
    }

    function __destruct() {
        $this->linkDB = NULL;
    }
    
    function inserirUser($obj) {
        $sql = "INSERT INTO usuario(nome, email, senha, imagemURL) VALUES(?, ?, ?, ?)";
        
        //tratamento do sql injection
        $stm = mysqli_prepare($this->linkDB->con, $sql);
        
        if(!$stm) {
            return false;
        }
        
        $nome = $obj->getNome();
        $email = $obj->getEmail();
        $senha = md5($obj->getSenha());
        $imagem = $obj->getImagemURL();
                
        if(!$stm->bind_param("ssss", $nome, $email, $senha, $imagem)) {
            return false;
        }
        
        return $stm->execute();       
    }
    
    function getUser($id){
        $resultado = mysqli_query($this->linkDB->con, "SELECT * FROM usuario WHERE id = ".$id);
        
        if ($resultado && mysqli_num_rows($resultado) == 1){
            $dados = mysqli_fetch_assoc($resultado);
            $user = new Usuario($dados['email'], $dados['senha'], $dados['nome']);
            $user->setImagemURL($dados['imagemURL']);
            $user->setId($dados['id']);
            return $user;
        }else{
            return null;
        }
    }
    
    function itemExiste($campo, $item, $tabela) {
        $resultado = mysqli_query($this->linkDB->con, "SELECT * FROM ".$tabela." WHERE ".$campo." = '".$item."'");

        return $resultado && mysqli_num_rows($resultado) > 0;
    }
    
    function update($id, $campo, $valor){
        $sql = "UPDATE usuario SET ".$campo." = ? WHERE ID = ".$id;
        
        //tratamento do sql injection
        $stm = mysqli_prepare($this->linkDB->con, $sql);
        
        if(!$stm) {
            return false;
        }
                
        if(!$stm->bind_param("s", $valor)) {
            return false;
        }
        
        return $stm->execute();       
    }
    
    function login($email, $senha){
        
        $newSenha = md5($senha);
        $resultado = mysqli_query($this->linkDB->con, "SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$newSenha."'");
        
        if ($resultado && mysqli_num_rows($resultado) == 1){
            $dados = mysqli_fetch_assoc($resultado);
            $user = Array('email' => $dados['email'], 'imagemURL' => $dados['imagemURL'],'nome' => $dados['nome'], 'id' => $dados['id']);
            return $user;
        }else{
            return null;
        }
    }
    
    function deleteUser($id){
        $resultado = mysqli_query($this->linkDB->con, "DELETE FROM usuario WHERE id = ".$id);
        return $resultado;
    }
    
    function criarSala($nomeSala, $idUser){
         $sql = "INSERT INTO sala(nome, idCriador) VALUES(?, ?)";
        
        //tratamento do sql injection
        $stm = mysqli_prepare($this->linkDB->con, $sql);
        
        if(!$stm) {
            return false;
        }
        
        if(!$stm->bind_param("si", $nomeSala, $idUser)) {
            return false;
        }
        
        return $stm->execute();     
    }
    
    /*
    function solicitaSala($nomeSala, $idUser){
        $sql = "INSERT INTO usersala(idUser, idCriador, aprovado) VALUES(?, ?, false)";
        
        //tratamento do sql injection
        $stm = mysqli_prepare($this->linkDB->con, $sql);
        
         echo '<script>console.log("foi");</script>';
        if(!$stm) {
            return false;
        }
        echo '<script>console.log("foi1");</script>';
        
         $resultado = mysqli_query($this->linkDB->con, "SELECT id FROM sala WHERE nome = '".$nomeSala."'");
         $idSala = mysqli_fetch_assoc($resultado)['id'];
         echo '<script>console.log("'.$idSala.'");</script>';
         
        if(!$stm->bind_param("ii", $idUser, $idSala)) {
            return false;
        }
        
        return $stm->execute(); 
    }*/
    
}
