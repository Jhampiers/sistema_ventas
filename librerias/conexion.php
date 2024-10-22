<?php
require_once "./config/config.php";
class Conexion{
    public static function connect(){
        $mysql = new mysqli(DB_HOST, DB_NAME, DB_USER, DB_PASSWORD);
        $mysql->set_charset(DB_CHARSET);
        if (mysqli_connect_errno()){
            echo "Error de conexion: ".
            mysqli_connect_errno();
        }
        return $msql;
    }

}

?>