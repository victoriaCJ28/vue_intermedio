<?php

class session{

    public function __construct(){
       session_start();
    }

    public function set($username, $valor) {
        $_SESSION [$username] = $valor;
     }
     public function get($username) {
        if (isset ( $_SESSION [$username] )) {
           return $_SESSION [$username];
        } else {
            return false;
        }
     }
     public function elimina_variable($username) {
         unset ( $_SESSION [$username] );
     }
     public function termina_sesion() {
         $_SESSION = array();
         session_destroy ();
     }
}

?>