<!DOCTYPE html>

<html>
    <head>
        <title>Editar Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/w3.css">
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
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
            <form action="UsuarioFuncoes.php?acao=edit" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin editUser">
                <h2 class="w3-center">Alterar Perfil</h2>
                <h4 class="w3-center">Só preencha o que for alterar</h2>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border alter" name="nomeUsuario" type="text" value="<?php echo $sessao['nome'] ?>" required="true">
					
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                    <div class="w3-rest">
                        <input id="Password" class="w3-input w3-border alter" type="password" name = "oldSenha" placeholder="Senha antiga" maxlength="60" >
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                    <div class="w3-rest">
                        <input id="Confirm" class="w3-input w3-border alter" type="password" placeholder="Nova senha" name = "newSenha" maxlength="60" >
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-rest">
                        <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-circle"></i></div>
                    <div class="w3-rest">
                        <img id="imgPerfil" name = "imgPerfil" class="w3-circle photo" src="imagens/padrao.png" alt="Foto do Perfil"/>
                    </div>
                    <div> 
                     <input type="file" name="imagem" alt="Submit" id="diretorio" value="imagens/padrao.png"/>
                    </div>
                    </div>
                </div>
                <button type="submit" onClick="return tamanhoPassword();" href="#" class="w3-button w3-block w3-section w3-green w3-ripple w3-padding">Salvar</button>
                <a class="w3-button w3-block w3-section w3-white w3-ripple w3-padding" href="index.php" >Cancelar</a>
                <a class="w3-button w3-block w3-section w3-red w3-ripple w3-padding" href="Mensagem.php?titulo=2&mensagem=3&botao=2&link=UsuarioFuncoes.php?acao=apag">Apagar a conta</a>
               
            </form>
        </div>
    </body>
     <script type="text/javascript" src="js/util.js"></script>
</html>
