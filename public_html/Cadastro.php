<!DOCTYPE html>

<html>
    <head>
        <title>Cadastro</title>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>    
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Base.css"/>
        <link rel="stylesheet" type="text/css" href="css/EditProfile.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <?php
            session_start();
            //Verifica se não há uma sessão
            if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
                Header('location: Mensagem.php?titulo=007&mensagem=007&link=index.php');
            }

            //Importação do header
            include 'util/headerClean.php'; ?>
        
         <div class="container editUserContainer">
            <form action="UsuarioFuncoes.php?acao=cad" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin editUser">
                <h2 class="w3-center">Criar Conta</h2>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border alter" name="nome" id="nome" type="text" placeholder="Nome" maxlength="30" required >
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                    <div class="w3-rest">
                        <input class="w3-input w3-border alter" name="email" id="email" type="email" placeholder="Email" maxlength="100" required>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                    <div class="w3-rest">
                        <input id="Password" class="w3-input w3-border alter" name="senha"  type="password" placeholder="Password" maxlength="60" required>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-key"></i></div>
                    <div class="w3-rest">
                        <input id="Confirm" class="w3-input w3-border alter" type="password" placeholder="Confirm password" maxlength="60" required>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-circle"></i></div>
                    <div class="w3-rest">
                        <img id="imgPerfil" name = "imgPerfil" class="w3-circle photo" src="imagens/padrao.png" alt="Foto do Perfil"/>
                    </div>
                    <div> 
                     <input type="file" name="imagem" alt="Submit" id="diretorio" value="imagens/padrao.png"/>
                    </div>
                </div>
                <button  type="submit"  value="Submit" name="submit" onClick="return CheckPassword()" class="w3-button w3-block w3-section w3-green w3-ripple w3-padding">Criar</button>
            </form>
        </div>
    </body>
        <script type="text/javascript" src="js/util.js"></script>            
</html>

