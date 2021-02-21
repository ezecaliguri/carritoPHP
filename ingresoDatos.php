<?php 
require "global/conexion.php";


if(isset($_POST["insertarproducto"])){

    switch($_POST["insertarproducto"]){

        case "insertarNormal": 

            $nombre = $_POST["nombre"];
            $precio = $_POST["precio"];
            $descripcion = $_POST["descripcion"];
            $imagen = $_POST["imagen"];

            $insertar = "INSERT INTO productos ('nombre','precio','descripcion','imagen') VALUES ('$nombre','$precio','$descripcion','$imagen')";

           $resultado = mysqli_query($conexion,$insertar);
           if ($resultado){
               echo "<script>alert('ok')</script>";
           }else {
            echo "<script>alert('no ok')</script>";

           }

           
            
        break;
    }

      
}