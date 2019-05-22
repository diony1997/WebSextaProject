<?php

    require_once './OperacoesBanco.php';
    
    session_start();
    $banco = new OperacoesBanco();
    if (isset($_SESSION['user'])){
        $sessao = unserialize($_SESSION['user']);
    }
    if (!empty($_GET["acao"])){
        $acao =  $_GET["acao"];
        switch ($acao){
            case 'cad';
                criarSala($banco, $sessao);
                break;
            case 'solicita';
                solicitaSala($banco, $sessao);
                break;
        }
    }
    
    function criarSala($banco, $sessao){
        $nomeSala = $_POST['nome'];
        $idUser = $sessao['id'];
        if (!$banco->itemExiste('nome', $nomeSala, 'sala')){
            if ($banco->criarSala($nomeSala, $idUser)){
                Header('location: Mensagem.php?titulo=1&mensagem=7&botao=1&link=index.php');
            }else{
            Header('location: Mensagem.php?titulo=99&mensagem=99&botao=1&link=index.php');
            }
        }else{
            Header('location: Mensagem.php?titulo=99&mensagem=8&botao=99&link=criarSala.php');
        }
    }
    /*
    function solicitaSala($banco, $sessao){
        $nomeSala = $_POST['nomeSala'];
        $idUser = $sessao['id'];
        
        echo $banco->itemExiste('idUser', $nomeSala, 'usersala');
        
         if ($banco->itemExiste('nome', $nomeSala, 'sala')){
            if ($banco->solicitaSala($nomeSala, $idUser)){
                Header('location: Mensagem.php?titulo=1&mensagem=10&botao=1&link=index.php');
            }else{
                 Header('location: Mensagem.php?titulo=99&mensagem=99&botao=1&link=index.php');
            }
        }else{
            Header('location: Mensagem.php?titulo=99&mensagem=9&botao=99&link=joinSala.php');
        }
    }*/