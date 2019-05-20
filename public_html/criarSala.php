<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Criar Sala</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Base.css"/>
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/ProfileLists.css"/>
    </head>
    <body>
        <?php 
        //Importação do header
        include 'util/header.php'; 
        
            //Verifica se há uma sessão
          if (!isset($_SESSION['user']) && empty($_SESSION['user'])) {
                Header('location: Mensagem.php?titulo=007&mensagem=007&link=index.php');
          }
          $sessao = unserialize($_SESSION['user']);
       ?>
        <fieldset>
        <div id="tabelas" class="divTable tabelas_left">
            <a href="#"><h2 class="table_title">Nome da sala</h2> 
                <br> <center>Quantidade de participantes:</center></a>
        </div>     
        <div id="tabelas" class="divTable tabelas_right">
                <table  class="table table-striped">
                <tbody>
                    <tr>
                        <td><button type="button" class="btn btn-info btn-lg btn-block">Editar pontuação</button></td>
                        <td><button type="button" class="btn btn-info btn-lg btn-block">Excluir sala</button></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-info btn-lg btn-block">Editar sala</button></td>
                        <td><button type="button" class="btn btn-info btn-lg btn-block">Sair</button></td>
                    </tr>
                </tbody>
                </table>
            </div>       
        </fieldset>


        <div id="tabelas" class="divTable tabelas_left">
            <a href="#"><h2 class="table_title">Scoreboard</h2></a>
            <table  class="table table-striped">
                <thead>
                    <tr>
                        <th>Coleção</th>
                        <th>Nome Usuário</th>
                        <th>Pontos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Coleção #</td>
                        <td>User 1</td>
                        <td>84</td>
                    </tr>
                    <tr>
                        <td>Coleção #</td>
                        <td>User 2</td>
                        <td>43</td>
                    </tr>
                    <tr>
                        <td>Coleção #</td>
                        <td>User 3</td>
                        <td>62</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <!-- End your code here -->
    </body>
</html>
