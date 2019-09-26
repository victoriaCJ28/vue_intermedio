<?php
require_once "config.php";
class database{
    private $host;
    private $db;
    private $user;
    private $clave;
    private $charset;


    public function __construct(){
        $this->host = constant('HOST');
        $this->db = constant('DB');
        $this->user = constant('USER');
        $this->clave = constant('PASSWORD');
        $this->charset = constant('CHARSET');
    }

    function conn(){
        $this->conexion = new mysqli($this->host, $this->user, $this->clave, $this->db) or die(mysql_error());
        $this->conexion->set_charset("utf8");
    }
}

?>
