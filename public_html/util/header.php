<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
            <?php
            
            $xml = simplexml_load_file('config/geral.xml');
            
            session_start();
            
            if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            $sessao = unserialize($_SESSION['user']);
            ?>
                <div class="navbar-left">
                <a class="navbar-brand" href="EditProfile.php">
                  <img src="<?php echo $sessao['imagemURL'];?>" width="60" height="46" class="w3-circle" />
                    <label class="navbar-brand" style="color:whitesmoke;font-weight:bold">
                     <?php echo $sessao['nome'];?></label>
                </a>
                </div>
                <div class="nav navbar-nav navbar-right">
                    <a class="nav-item nav-link" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="criarSala.php">Criar Sala</a>
                    <a class="nav-item nav-link" href="criarAlbum.html">Criar Álbum</a>
                    <a class="nav-item nav-link" href="joinSala.html">Entrar em Sala</a>
                    <a  href="respLogin.php?acao=sair" class="btn btn-outline-danger">Log Out</a>
                </div>
               <?php
                } else {
                ?>
            <div class="navbar-left">
            <span class="navbar-brand" style="color:whitesmoke;font-weight:bold">
            <?php echo $xml->title ?></span>
            </div>
            <div class="nav navbar-nav navbar-right">
            <form  action="respLogin.php" method="post" class="form-inline">   
                    <input class="nav-item singInInput" name="emailLogin" id="email" type="email" placeholder="Email" maxlength="100" required />
                    <input class="nav-item singInInput" id="Password" name="senhaLogin"  type="password" placeholder="Password" maxlength="60" required/>
                    <button type="submit"  value="Submit" name="submit" class="btn btn-outline-success">Login</button>
            </form>
                <a class="nav-item nav-link" href="Cadastro.php">Criar Conta</a>
            </div>
            <?php    
            }
            ?>      
        </nav>
