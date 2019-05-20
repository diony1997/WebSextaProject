<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sala</title>
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
            <a href="#"><h2 class="table_title">Nome da sala <br> Criador</h2></a>
        </div>     
        <div id="tabelas" class="divTable tabelas_right">
                <tbody>
                    <tr>
                        <td><button type="button" class="btn btn-lg btn-lg btn-block">Deixar de participar</button></td>
                        <td><button type="button" class="btn btn-danger btn-lg btn-block">Sair</button></td>
                    </tr>
                </tbody>
            </div>       
        </fieldset>

<p>
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

        <div id="tabelas2" class="divTable tabelas_right">
            <a href="#"> 
                <h2 class="table_title">Rodadas</h2>
            </a>
            <table  class="table table-striped">
                <thead>
                    <tr>
                        <th>Rodada</th>
                        <th>Pontos</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Rodada 1</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>Rodada 2</td>
                        <td>20</td>
                    </tr>
                    <tr>
                        <td>Rodada 3</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- End your code here -->
    </body>
</html>
