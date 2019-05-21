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
        $sql = "INSERT INTO user (nome, email, senha, imageURL) VALUES(?, ?, ?, ?)";
        
        //tratamento do sql injection
        $stm = mysqli_prepare($this->linkDB->con, $sql);
        
        if(!$stm) {
            die('Falha na construcao SQL');
        }
        
        $nome = $obj->getNome();
        $email = $obj->getEmail();
        $senha = $obj->getSenha();
        $imagem = $obj->getImagemURL();
                
        if(!$stm->bind_param("ssss", $nome, $email, $senha, $imagem)) {
            die('Falha na atribuicao de valores');
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
    
    function itemExiste($campo, $item) {
        $resultado = mysqli_query($this->linkDB->con, "SELECT * FROM usuario WHERE ".$campo." = '".$item."'");

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
        
        $resultado = mysqli_prepare($this->linkDB->con, "SELECT * FROM user WHERE email = ? AND senha = ?");
        
        if (!$resultado) {
            die('Falha na construcao SQL');
        }
        
        if (!$resultado->bind_param("ss", $email, $senha)) {
            die('Falha na atribuicao de valores');
        }
        
          if (!$resultado->execute()) {
            die('Falha na execucao SQL');
        }
        
        $result = $resultado->get_result();
            
        if ($result->num_rows ===  1){
            $dados = mysqli_fetch_assoc($result);
            $user = Array('email' => $dados['email'], 'imageURL' => $dados['imageURL'],'nome' => $dados['nome'], 'id' => $dados['id']);
            return $user;
        } 
        
        return null;
        
    }
    
    function deleteUser($id){
        $resultado = mysqli_query($this->linkDB->con, "DELETE FROM user WHERE id = ".$id);
        return $resultado;
    }
    
}
