<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Minha Pagina</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Base.css"/>
	<link rel="stylesheet" href="css/w3.css">
	<link rel="stylesheet" type="text/css" href="css/ProfileLists.css"/>
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
        <div id="tabelas" class="divTable tabelas_left">
            <h2 class="table_title">Álbuns</h2>
            <table  class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Progresso</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="album.html">álbum 1</a></td>
                        <td> <div class="progress">
                                <div class="progress-bar" role="progressbar" 
                                     aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                    70%
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td><a href="album.html">álbum 2</a></td>
                        <td> <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                     aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                    60%
                                </div>
                            </div> 
                        </td>
                    </tr>
                    <tr>
                        <td><a href="album.html">álbum 3</a></td>
                        <td> <div class="progress">
                                <div class="progress-bar" role="progressbar"
                                     aria-valuemin="0" aria-valuemax="100" style="width:50%">
                                    50%
                                </div>
                            </div> 
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div id="tabelas2" class="divTable tabelas_right">
            <a href="sala.html"> 
                <h2 class="table_title">Salas</h2>
            </a>
            <table  class="table table-striped">
                <thead>
                    <tr>
                        <th>Sala</th>
                        <th>Participantes</th>
                        <th>Capacidade</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sala 1</td>
                        <td>25</td>
                        <td>100</td>
                    </tr>
                    <tr>
                        <td>Sala 2</td>
                        <td>20</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>Sala 3</td>
                        <td>0</td>
                        <td>80</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- End your code here -->
    </body>
</html>
