<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Index.css"/>
         <link rel="stylesheet" href="css/w3.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/Base.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    </head>
    <body>
        
        <?php 
       
        if (!empty($_GET["msg"])){
            $msg = $_GET["msg"];
                switch ($msg){
                    case '1':
                        $msg = "Informações inseridas não são validas";
                        break;    
                    case '2':
                        $msg = "Insira seu login e senha para entrar";
                        break;
                    case '3':
                        $msg = "Você foi desconectado com sucesso!";
                        break;
                    default:
                        $msg = null;
                        break;
                }   
                if ($msg!=null){
                echo '<script>alert("'.$msg.'");</script>';
                }
            }
            
        //Importação do header
        include 'util/header.php'; 
        
        ?>
      
        <div class="text-center">
            <h1 class="title"> Sit amet </h1>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img src="imagens/album.jpg" class="text_pic_left" />
                </div>
                <div class="col-md-8">
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra aliquet velit, quis feugiat lectus. Vivamus rhoncus hendrerit metus ornare malesuada. Curabitur vel ante vitae ante aliquet semper. Sed pharetra lorem ut eros pellentesque aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam at urna eros. Praesent sollicitudin tellus id purus porttitor ornare. Vestibulum sodales leo non est posuere, vel ultricies justo eleifend. In leo quam, tincidunt in vulputate vel, pulvinar at neque.

                        Quisque mattis orci vitae libero vestibulum, ut auctor velit ornare. Duis tincidunt erat id posuere consequat. Aenean volutpat, odio sed eleifend pulvinar, nibh tellus porttitor arcu, vitae porttitor odio ligula vel velit. Proin vehicula convallis lectus eu accumsan. Proin vitae vulputate sapien, vehicula ultrices lectus. Praesent porta eros sed dolor maximus cursus. Sed gravida neque magna, eget sagittis lacus condimentum sit amet. Duis ut justo ut justo posuere scelerisque. Proin mattis a justo id tempus. Nulla vitae ornare ex, quis pharetra dui. Morbi eu iaculis urna, eu blandit velit. In hac habitasse platea dictumst. Suspendisse dolor orci, viverra at elementum id, auctor eu ligula. Donec tempor ullamcorper mi, vitae porta enim volutpat eget. Maecenas fermentum sed tortor quis posuere. Etiam eget euismod enim.

                        Aliquam tempus, mauris sed egestas vulputate, nibh quam ultrices nunc, ut tristique nulla nunc quis risus. Vivamus in turpis ac justo scelerisque dapibus. Etiam vestibulum bibendum est sodales iaculis. Sed scelerisque at tellus eu varius. Fusce vulputate ex sit amet tellus elementum, tincidunt cursus neque pellentesque. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam neque ligula, feugiat eu vestibulum at, scelerisque lobortis augue. Aliquam auctor erat ipsum, non finibus ante porttitor et. Nulla facilisi. Aenean varius lacus nec pulvinar bibendum. Quisque vitae ligula quis nulla luctus ultrices. Morbi augue est, aliquet nec tempor in, ultrices ultrices arcu. 
                    </p>
                </div>
            </div>
        </div>

        <div class="text-center">
            <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eleifend et purus ac lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi vitae fringilla tortor, quis varius lorem. Nullam malesuada facilisis mi, ac vulputate justo. Proin bibendum aliquet sollicitudin. Praesent nec felis nunc. Donec bibendum pulvinar interdum. Suspendisse sodales lacus sapien. Etiam vestibulum lobortis purus, ac posuere est pretium tincidunt. Duis sit amet purus sollicitudin, faucibus quam quis, vulputate nunc. Suspendisse feugiat vitae ante eu egestas. Etiam lacinia tellus ac urna pharetra condimentum eu in lacus. Maecenas hendrerit eros a quam aliquam facilisis. In nec ex suscipit, laoreet turpis eu, hendrerit nunc.

                Vivamus euismod vestibulum elit eget congue. Aliquam suscipit auctor justo ac feugiat. Donec et maximus nisi. Integer accumsan volutpat nulla quis rutrum. Sed in arcu non ipsum sagittis placerat et id nibh. Vestibulum rhoncus, libero ac egestas lacinia, felis risus faucibus mi, eu pellentesque dolor metus vitae leo. Sed sed est non enim laoreet finibus eget ac nibh. Duis luctus urna eu nisl lobortis egestas id id purus. Aenean imperdiet cursus diam, quis sagittis nulla. Nam non posuere metus, vitae aliquam erat. Nulla convallis volutpat arcu, id pulvinar elit egestas ac. Etiam egestas nibh non dui luctus aliquet. Integer facilisis posuere purus ac sollicitudin. Morbi fringilla massa et tellus blandit rhoncus. Quisque vel arcu tellus. Duis a ullamcorper dolor.

                Sed ut lacus nec felis gravida dapibus. Phasellus porta velit eu porttitor viverra. Proin dolor metus, lobortis vel velit nec, rhoncus tristique augue. Aliquam vestibulum sem sit amet viverra molestie. Phasellus blandit nisl at malesuada porta. Maecenas blandit massa vel laoreet tristique. Morbi varius semper neque condimentum tristique. Nullam at commodo felis. Maecenas ac est nec enim iaculis tristique. Integer nec est vel eros ornare faucibus vel nec nisi.

                Sed magna arcu, placerat eget enim nec, convallis accumsan orci. Nam ut placerat est. Integer ut mauris vel tellus commodo blandit non vitae elit. Ut erat augue, fermentum ac condimentum varius, pellentesque congue nulla. Integer ullamcorper odio ex, nec mattis elit blandit a. Etiam non mi at ex interdum pellentesque non sit amet ante. Sed in ullamcorper nisl. Cras condimentum faucibus aliquet. Nulla tincidunt ex id molestie sodales. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam est est, dictum ac metus et, bibendum laoreet risus. Aliquam viverra gravida eros consequat commodo. Aliquam rhoncus egestas sem et sodales.

                Pellentesque blandit aliquet posuere. Vestibulum vitae purus quis leo tristique malesuada. Nam quis sollicitudin nisl. Integer sit amet fringilla nibh, quis tempor ipsum. Integer sed bibendum ligula, eget finibus arcu. Duis lacinia placerat vulputate. Integer venenatis, arcu in accumsan lacinia, sem velit efficitur lectus, quis fringilla mi nisi vel elit. Vestibulum commodo nisi nisl. 
            </p>
        </div>

        <div class="fixed-bottom">
            <div class="container-fluid">
                <div class="text-center">
                    <div class="row bg-dark">
                        <a class="col-md-3" href="#">Lorem</a>
                        <a class="col-md-3" href="#">ipsum</a>
                        <a class="col-md-3" href="#">dolor</a>
                        <a class="col-md-3" href="#">sit amet</a>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>
