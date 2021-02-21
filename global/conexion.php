<?php 
session_start();
class Conexion {
    public static function Conectar(){
        define("servidor","localhost");
        define("user","root");
        define("password","");
        define("db","carritophp");
        $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8');
        try {
            $conexion = new PDO("mysql:host=".servidor."; dbname=".db,user,password,$opciones);
            return $conexion;
        } catch (Exception $e) {
            echo "<script>alert('no se puedo conectar al servidor')</script>";
        }
    }

}
