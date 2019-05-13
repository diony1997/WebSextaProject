<!DOCTYPE html>

<html>
    <head>
        <title>Editar Perfil</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/Base.css"/>
        <link rel="stylesheet" type="text/css" href="css/EditProfile.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
		<?php
			echo('<div class="navbar-left">
					<a class="navbar-brand" href="EditProfile.html">
						<label class="navbar-brand" style="color:whitesmoke;font-weight:bold">' . $_SESSION['username'] . '</label>'
						. '<img src="'. $_SESSION['picurl'] . '" width="60" height="46" class="w3-circle" />
					</a>
				</div>
				<div class="nav navbar-nav navbar-right">
					<a class="nav-item nav-link" href="criaSala.html">Criar Sala</a>
					<a class="nav-item nav-link" href="criarAlbum.html">Criar Álbum</a>
					<a class="nav-item nav-link" href="joinSala.html">Entrar em Sala</a>
					<a href="index.html" class="btn btn-outline-danger " >Log Out</a>
				</div>'						
			);
		?>
        </nav>
        <div class="container editUserContainer">
            <form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin editUser">
                <h2 class="w3-center">Alterar Perfil</h2>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
                    <div class="w3-rest">
					<?php
                        echo ('<input class="w3-input w3-border alter" name="nomeUsuario" type="text" placeholder=" ' . $_SESSION['username'] . '">');
					?>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
                    <div class="w3-rest">
					<?php
                        echo ('<input class="w3-input w3-border alter" name="email" type="text" placeholder=" ' . $_SESSION['email'] . '">');
					?>
                    </div>
                </div>
                <div class="w3-row w3-section">
                    <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user-circle"></i></div>
                    <div class="w3-rest">
					<?php
                        echo (' <img class="w3-circle photo" src="' . $_SESSION['picurl'] . '" alt="Foto do Perfil">');
					?>
                    </div>
                    <div> 
                        <button type="button" class="btn btn-info btn-sm">Procurar imagem</button>
                    </div>
                </div>
                <button type="button" href="#" class="w3-button w3-block w3-section w3-green w3-ripple w3-padding">Salvar</button>
                <a class="w3-button w3-block w3-section w3-red w3-ripple w3-padding" href="ProfileLists.html" >Cancelar</a>
            </form>
        </div>
    </body>
</html>
