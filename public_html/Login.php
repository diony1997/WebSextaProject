<?php

 require_once  'OperacoesBanco.php';

  $bd = new OperacoesBanco();
 
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
	 if($bd != null)	
		FindUser();
	 else
		Header('location: index.php');
  }
    
	function FindUser(){
		
		$user = $bd->login($_POST['email'], $_POST['password'])
		
		if ($user != null){	
			 $_SESSION['username'] = $user['email']; // store username
			 $_SESSION['id'] = $user['id'];
			 $_SESSION['picurl'] = $user['imagemURL'];
		}
		Header('location: index.php');	
	}
		
?>