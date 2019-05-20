<?php

    require_once './Util/Usuario.php';
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
                cadastrar($banco);
                break;
            case 'edit';
                editar($banco, $sessao);
                break;
            case 'apag';
                apagar($banco, $sessao);
                break;
        }
    }
    
    function cadastrar($banco){
        
        $objcli = new Usuario($_POST['email'], $_POST['senha'], $_POST['nome']);
        $link = 'Cadastro.php';
        $botao = '99';
        
        if ($_POST['imagem']===''){
            $objcli->setImagemURL('imagens/padrao.png');
        }else{
            $objcli->setImagemURL($_POST['imagem']);
        }
        
        if($banco->itemExiste('email', $objcli->getEmail())){
            $titulo = '99';
            $mensagem = '1';
        }else{
            $usuario = $banco->inserirUser($objcli);
            if ($usuario != null){
                $titulo = '1';
                $botao = '1';
                $mensagem = '2';
                $link = 'index.php?msg=2';
            }else{
                $titulo = '2';
                $mensagem = '99';
            }
        }
        
        Header('location: Mensagem.php?titulo='.$titulo.'&mensagem='.$mensagem.'&botao='.$botao.'&link='.$link);
        
    }
    
    function editar($banco, $sessao){
        
        $user = $banco->getUser($sessao['id']);
        
        if ($user!=null){
            $nome = $_POST['nomeUsuario'];
            $senhaOld = $_POST['oldSenha'];
            $senhaNew = $_POST['newSenha'];
            $img = $_POST['imagem'];
            $altera = false;
            
            if ($nome != $user->getNome()){
                if ($banco->update($user->getID(), 'nome', $nome)){
                    $sessao['nome'] = $nome;
                    $altera = true;
                }
            }
            if (!empty($senhaOld)){
                if (md5($senhaOld) === $user->getSenha()){
                   if ($banco->update($user->getID(), 'senha', md5($senhaNew))){
                       $altera = true;
                   }
                }
            }
            if (!empty($img)){
                 if ($banco->update($user->getID(), 'imagemURL', $img)){
                    $sessao['imagemURL'] = $img;
                    $altera = true;
                 }
            }
            if ($altera){
             //Atualiza sessão
             $_SESSION['user'] = serialize($sessao);
             Header('location: Mensagem.php?titulo=1&mensagem=5&botao=1&link=index.php');
            }else{
             Header('location: Mensagem.php?titulo=99&mensagem=6&botao=1&link=index.php');
            }
        }else{
             Header('location: Mensagem.php?titulo=99&mensagem=99&botao=1&link=index.php');
        }
        
    }
    
    function apagar($banco, $sessao){
        
        $user = $banco->getUser($sessao['id']);
        
        if ($user!=null && $banco->deleteUser($sessao['id'])){
            unset ($_SESSION['user']);
            Header('location: Mensagem.php?titulo=1&mensagem=4&botao=1&link=index.php');
        }else{
             Header('location: Mensagem.php?titulo=99&mensagem=99&botao=1&link=index.php');
        }
    }