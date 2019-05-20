<?php

/** Classe para prover a conexao com o BD */
class DataSource {
    private $con;
    
    function __construct() {
        $this->con = mysqli_connect("localhost", "root", "", "bdaps");
        if (!$this->con) {
            die('<script>console.log("Não foi possivel estabelecer a conexão com o banco");</script>');
        }
    }
    
    function __destruct() {
        mysqli_close($this->con);
    }
    
    function __get($name) {
        return $this->con;
    }

}
