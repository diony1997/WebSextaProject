<?php

	require_once './Util/DataSource.php';
	
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	$bd = new DataSource();
	 if($bd != null){
		 //Só id deleta
		if($_POST['id'] != null, $_POST['userId'] == null, $_POST['nome'] == null){
			deleteAlbum($bd, $_POST['id']);
		}
		//Só id e nome
		else if($_POST['id'] != null, $_POST['userId'] == null, $_POST['nome'] != null){
			putAlbum($bd, $_POST['id'], $_POST['nome']);
		}	
		//Só userId e nome
		else if($_POST['id'] == null, $_POST['userId'] != null, $_POST['nome'] != null){
			postAlbum($bd, $_POST['userId'], $_POST['nome']);		
		}
	 }
}
else if($_SERVER['REQUEST_METHOD'] == 'GET'){
	    $bd = new DataSource();
    if($bd != null)
        getAlbum($bd, $_GET["userId"], $_GET["nome"]);
}


function getAlbum($banco, $userId, $nome) {

      $resultado = mysqli_prepare($banco-> __get(), "SELECT * FROM album WHERE userId = ? AND nome = ?");
	  
        if(!$resultado) {
            die('Falha na construcao SQL');
        }
		
        if(!$resultado->bind_param("ss", $userId, $nome)) {
            die('Falha na atribuicao de valores');
        }
		
        if(!$resultado->execute()) {
            die('Falha na execucao SQL');
        }
		
        $result = $resultado->get_result();
		
        if($result->num_rows === 1) {
            $dados = mysqli_fetch_assoc($result);
            $album = Array('userId' => $dados['userId'], 'nome' => $dados['nome'], 'id' => $dados['id']);
            return $album;
        }
		
        return null;
    }
}

    function deleteAlbum($banco, $id) {
	
        $resultado = mysqli_prepare($banco-> __get(), "DELETE FROM album WHERE id = ? ");
		
        if(!$resultado) {
            die('Falha na construcao SQL');
        }
        if(!$resultado->bind_param("s", $id)) {
            die('Falha na atribuicao de valores');
        }
        if(!$resultado->execute()) {
            die('Falha na execucao SQL');
        }
    }

function postAlbum($banco, $userId, $nome){
		$sql = "INSERT INTO album (nome, userId) VALUES(?, ?)";
	 
        //tratamento do sql injection
        $stm = mysqli_prepare($banco-> __get(), $sql);
		
        if(!$stm) {
            die('Falha na construcao SQL');
        }
		
		
        if(!$stm->bind_param("ss", $nome, $userId)) {
            die('Falha na atribuicao de valores');
        }
		
        if !$stm->execute()) {
            die('Falha na execucao SQL');
        }
}

function putAlbum($banco, $id, $nome){
	
	     $resultado = mysqli_prepare($banco-> __get(), "UPDATE album SET nome = ? WHERE id = ?");
        //tratamento do sql injection
        if (!$resultado) {
            die('Falha na construcao SQL');
        }
        if (!$resultado->bind_param("ss", $nome, $id)) {
            die('Falha na atribuicao de valores');
        }
        if (!$resultado->execute()) {
            die('Falha na execucao SQL');
        }
}

?>