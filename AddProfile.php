<?php 
 
 require_once  'OperacoesBanco.php';
 require_once  './Util/Usuario.php';

 $bd = new OperacoesBanco();
 

 if($_SERVER['REQUEST_METHOD']=='POST')
  {
	 if($bd != null)	
		FindUser();
	 else
		Header('location: index.php');
  }
  
  
  function InsertUser()
  {
	  $user = $bd->login($_POST['email'], $_POST['password']);
	  
	  if($user == null){
				  
		  $obj = new Usuario($_POST['email'], $_POST['password'], $_POST['username'], $_POST['image']);
		  
		  $bd->inserirUser($obj);
		  
		  $user = $bd->login($_POST['email'], $_POST['password']);
		  
		  $_SESSION['username'] = $user['nome']; // store username
		  $_SESSION['id'] = $user['id'];
		  $_SESSION['picurl'] = $user['imagemURL'];
	  }  
	  
	   Header('location: index.php');
  }

?>