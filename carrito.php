<?php 
session_start();

$alerta = "";

if(isset($_POST["enviarcarrito"])){

    switch($_POST["enviarcarrito"]){

        case "agregar": 
            // recibo los datos del index name="id" , id="id"
            
            if (is_numeric(openssl_decrypt($_POST["id"],COD,KEY))){
                $id = openssl_decrypt($_POST["id"],COD,KEY);
            }else {
                echo "<script>alert('Error de codificación')</script>";
            }
            
            if (is_string(openssl_decrypt($_POST["nombre"],COD,KEY))){
                $nombre = openssl_decrypt($_POST["nombre"],COD,KEY);
            }else {
                echo "<script>alert('Error de codificación')</script>";
            } 

            if (is_numeric(openssl_decrypt($_POST["precio"],COD,KEY))){
                $precio = openssl_decrypt($_POST["precio"],COD,KEY);
            }else {
                echo "<script>alert('Error de codificación')</script>";
            }  

            if (is_numeric(openssl_decrypt($_POST["cantidad"],COD,KEY))){
                $cantidad = openssl_decrypt($_POST["cantidad"],COD,KEY);
            }else {
                echo "<script>alert('Error de codificación')</script>";
            }
            
            if (openssl_decrypt($_POST["imagen"],COD,KEY)){
                $imagen = openssl_decrypt($_POST["imagen"],COD,KEY);
            }else {
                echo "<script>alert('Error de codificación')</script>";
            }
            
            if (!isset($_SESSION["carrito"])){                
                $producto = array (
                    "id" => $id,
                    "nombre" => $nombre,
                    "precio" => $precio,
                    "cantidad" => $cantidad,
                    "imagen" => $imagen
                );
                $_SESSION["carrito"][0]=$producto;
            } else {
                $numProductos = count($_SESSION["carrito"]);
                $producto = array (
                    "id" => $id,
                    "nombre" => $nombre,
                    "precio" => $precio,
                    "cantidad" => $cantidad,
                    "imagen" => $imagen
                );
                $_SESSION["carrito"][$numProductos]=$producto;
            }


            break;
        
        case "borrar": 

            if (is_numeric(openssl_decrypt($_POST["ID"],COD,KEY))){
                $id = openssl_decrypt($_POST["ID"],COD,KEY);
                foreach($_SESSION["carrito"] as $var => $producto){
                    if($producto["id"] == $id){
                        unset($_SESSION["carrito"][$var]);
                        break;
                        
                        // echo "<script>alert('hola hasta aca todo ok')</script>";
                    }
                }
            }else {
                $alerta = "El id no es correcto" . $id ."<br>";
            }
            break;

    }

}

