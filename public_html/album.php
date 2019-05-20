<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Álbum</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Base.css"/>
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" type="text/css" href="css/ProfileLists.css"/>
        <link rel="stylesheet" type="text/css" href="css/album.css"/>
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

        <h3 id="nome" >Cards coletadas</h3>
        <table id="album" border="3" align="center">
            <tr>
                <td>
                    <img id="card" src="imagens/card3.webp" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/card.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/card2.webp" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
            </tr>
            <tr>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
            </tr>
            <tr>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
            </tr>
            <tr>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
                <td>
                    <img id="card" src="imagens/cardBack.jpg" alt="Carta">
                </td>
            </tr>
        </table>

        <!-- End your code here -->
    </body>
</html>
