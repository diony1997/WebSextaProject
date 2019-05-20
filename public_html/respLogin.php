<?php

    session_start();
    if (empty($_GET["acao"])){
        require_once './OperacoesBanco.php';

        $banco = new OperacoesBanco();
         
        $email = $_POST['emailLogin'];
        $senha = $_POST['senhaLogin'];
        $dadosUser = $banco->login($email, $senha);
        if($dadosUser != null){
           $_SESSION['user'] = serialize($dadosUser);
           Header('location: index.php');
        }else{
           Header('location: index.php?msg=1');
        }  
    }else{
        unset ($_SESSION['user']);
        Header('location: index.php?msg=3');
    }