<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Criar Sala</title>
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Base.css"/>
        <link rel="stylesheet" type="text/css" href="css/EditProfile.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        
        <div class="container editUserContainer">
            <form action="gerenciaSala.php?acao=cad" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin editUser">
                <h2 class="w3-center">Criar Sala</h2>
                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <input class="w3-input w3-border alter" name="nome" id="nome" type="text" placeholder="Nome da sala" maxlength="30" required >
                    </div>
                </div>
                <button  type="submit"  value="Submit" name="submit" class="w3-button w3-block w3-section w3-green w3-ripple w3-padding">Criar</button>
            </form>
        </div>
    
        <!-- End your code here -->
    </body>
</html>
