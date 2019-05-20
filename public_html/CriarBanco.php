<?php

    //Obtem a xml de configuração do banco
    $xml = simplexml_load_file('config/scriptBanco.xml');
    
    //verifica se há conexão com o banco de dados
    $conexao = mysqli_connect("localhost", "root", "", $xml->databaseName);
    
    echo '<h2>Status da verificação no banco:</h2><br>';
    if (!$conexao){
        
        echo "O banco de dados não foi encontrado<br>";
        echo "O banco de dados está sendo criado...";
        //Entra no 'master' no mysql
        $conexao1 = mysqli_connect("localhost", "root", "", "mysql");
        if ($conexao1){
            
            //Cria a database do sistema
            $criacao = "CREATE DATABASE ".$xml->databaseName;
            $criacaoBD = mysqli_query($conexao1, $criacao);
            $conexao2 = mysqli_connect("localhost", "root", "", $xml->databaseName);
            
            //Verifica se houve exito na conexão
            if ($criacaoBD && $conexao2){
                echo '<br>Banco de dados foi criado com sucesso!<br>';
                //Cria as tabelas do sistema
                criarDatabases($conexao2, $xml);
                echo '<br><h2>Banco de dados está em perfeito estado!</h2>';
            }else{
                echo "<h1>Erro ao criar o banco de dados</h1>";
            }
        }else{
            echo "<h1>Erro ao criar o banco de dados</h1>";
        }
    }else{
        echo 'O banco de dados está acessível<br>';
        criarDatabases($conexao, $xml);
        echo '<br><h2>Banco de dados está em perfeito estado!</h2>';
    }
    echo '<br><h3>Clique no botão abaixo para ir a home</h3>';
    echo '<a href="index.php"><button>Home</button></a>';
    
    function criarDatabases($conexao, $xml){
        //Obtem todas as <table> da xml
        foreach($xml -> table as $item){
                //Chama metodo para verificar conexão com a tabela
              if (!verificarTabela($conexao, $item -> name)){
                  //Criação da tabela com base no script da mesma
                $criacao = mysqli_query($conexao,utf8_decode($item -> script));
                //Verifica exito da criação
                if ($criacao){
                    echo "<strong>Tabela criada!</strong> -> A tabela ".$item -> name." foi criada com sucesso<br />";
                    echo "<strong>Script:</strong> ".utf8_decode($item -> script)."<br />";
                    echo "<br />";
                }else{
                    echo "Houve um erro ao criar a tabela ".$item -> name."<br />";
                }
              }else{
                  echo "A tabela ".$item -> name." já existe no sistema e está acessivel<br>";
              }
        } 
    }
    //Faz um comando select para verificar se há coneção com a tabela
    function verificarTabela($conexao, $nomeTabela){
           $consulta = mysqli_query($conexao, 'SELECT * FROM '.$nomeTabela);
           return $consulta;
    }