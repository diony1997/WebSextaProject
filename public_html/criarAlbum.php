<!DOCTYPE html>

<html>
    <head>
        <title>Criar Álbum</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/criarAlbum.css"/>
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
            <form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin editUser">
                <h2 class="w3-center">Criar Álbum</h2>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-book"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border alter" name="nomeAlbum" type="text" placeholder="Nome">
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <img id="preview" src="imagens/cardBack.jpg" alt="Figurinha"/>
                    </div>
                    <div> 
                        <button type="button" class="btn btn-info btn-sm">Procurar imagem</button>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <p>foto1.jpg
                        <p>foto2.jpg
                        <p>foto3.jpg
                    </div>
                </div>
                <button type="button" href="#" class="w3-button w3-block w3-section w3-green w3-ripple w3-padding">Criar</button>
                <a class="w3-button w3-block w3-section w3-red w3-ripple w3-padding" href="ProfileLists.html" >Cancelar</a>
            </form>
        </div>
    </body>
</html>
