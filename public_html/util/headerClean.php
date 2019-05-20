<?php
$xml = simplexml_load_file('config/geral.xml');
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
            <div class="nav navbar-nav">
                <div class="navbar-left">
                    <a class="navbar-brand" href="Index.php" style="color:whitesmoke;font-weight:bold"><?php echo $xml->title ?></a>
                </div>
            </div>
</nav>