<!DOCTYPE html>

<html>
    <head>
        <title>Mensagem</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Base.css"/>
        <link rel="stylesheet" type="text/css" href="css/EditProfile.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/Index.css"/>
       
    </head>
    <body>
        
        <?php
        //Importação do header
        include 'Util/headerClean.php'; 
        
            $titulo = $_GET['titulo'];
            $mensagem = $_GET['mensagem'];
            $botao = $_GET['botao'];
            $link = $_GET['link'];
            
            switch ($titulo){
                case '1':
                    $titulo = 'Sucesso!';
                    break;
                case '2':
                    $titulo = 'Atenção!';
                    break;
                case '007':
                    $titulo = 'Você não deveria estár aqui';
                    break;
                default:
                    $titulo = 'Ops';
                    break;
            }
            switch ($mensagem){
                case '1':
                    $mensagem = 'O email já está cadastrado';
                    break;
                case '2':
                    $mensagem = 'Perfil criado com sucesso!';
                    break;
                case '3':
                    $mensagem = 'Você confirma a exclusão do perfil?';
                    break;
                case '4':
                    $mensagem = 'Perfil apagado com sucesso!';
                    break;
                case '5':
                    $mensagem = 'Alteração feita com sucesso!';
                    break;
                case '6':
                    $mensagem = 'Nenhuma alteração foi feita';
                    break;
                case '7':
                    $mensagem = 'Sala criada com sucesso!';
                    break;
                 case '8':
                    $mensagem = 'Sala já existe';
                    break;
                case '9':
                    $mensagem = 'Sala não existe';
                    break;
                case '10':
                    $mensagem = 'A solicitação foi enviada!';
                    break;
                 case '007':
                    $mensagem = 'Você não tem permissão para entrar nesta pagina';
                    break;
                default:
                    $mensagem = 'Algo deu errado';
                    break;
            }
            switch ($botao){
                case '1':
                    $botao = 'Ir para a home';
                    break;
                case '2':
                    $botao = 'Confirmar';
                    break;
                default:
                    $botao = 'Voltar';
                    break;
            }
        ?>
        
        <div id="confirm" class="container editUserContainer">
            <form action="/action_page.php" class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin editUser">
                <h2 class="w3-center">
                    <?php
                    echo $titulo
                    ?></h2>
                <div class="w3-row w3-section">
                    <?php
                    echo $mensagem
                    ?>
                </div>
                <a class="w3-button w3-block w3-section w3-green w3-ripple w3-padding" href=
                    <?php
                    echo "$link>$botao";
                    ?></a>
            </form>
        </div>
		
    </body>
</html>
