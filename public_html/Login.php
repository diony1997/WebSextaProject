<?php

 $conn = mysqli_connect("localhost", "root", "", "BDNAME");
 
 
  if($_SERVER['REQUEST_METHOD']=='POST')
  {
		if (!$conn) {
			die();
		}
		else{
		
            FindUser();
        } 
		   
  }
    
	function FindUser(){
		
		$sql = "SELECT * FROM Users Where Email = " . $_POST["email"] . " AND Password = " . $_POST["password"];
		$result = $conn->query($sql);

		if ($result->num_rows > 0){
			
			 $_SESSION['username'] = $_POST['username']; // store username
			 $_SESSION['password'] = $_POST['password']; // store password
			
			Header('location: EditProfile.html');
			//Redirect(); //Redirect to user page.
		}
		else{
			
			Header('location: index.html');
			//Redirect(); //Redirect to index.html
		}
		
	}
		
?>