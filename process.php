<?php 
include "global/conexion.php";

if(isset($_POST["action"])){
    $action = $_POST["action"];
    switch ($action){
        case "add": 
            add_productos();
            volver_inicio();
        break;
        case "add2": 
            // add_productos2();
            // volver_inicio();
        break;
    }
}

function add_productos(){
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $imagen = $_POST["imagen"];

    $object = new Conexion();
    $conexion = $object->Conectar();
    $consulta = "INSERT INTO productos(nombre,precio,descripcion,imagen) 
                 VALUES ('$nombre','$precio','$descripcion','$imagen')";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();

    if(!$resultado){
        echo "<script>alert('Algo hice mal otra vez')</script>";
    } else {
        echo "<script>alert('Al fin')</script>";
    }
    
}

function volver_inicio (){
    header('LOCATION: index.php');
}

// function add_productos2(){
//     //formulario
//     $nombre = $_POST["nombre"];
//     $precio = $_POST["precio"];
//     $descripcion = $_POST["descripcion"];
//     //data de files
    
//     $nombreImagen = $_FILES["file"]["name"];
//     $tmpName = $_FILES["file"]["tmp_name"];
//     $ruta = "fotos/" . $nombreImagen;

//     move_uploaded_file($tmpName,$ruta);

//     $object = new Conexion();
//     $conexion = $object->Conectar();
//     $consulta = "INSERT INTO productos(nombre,precio,descripcion,imagen) 
//                  VALUES ('$nombre','$precio','$descripcion','$ruta')";
//     $resultado = $conexion->prepare($consulta);
//     $resultado->execute();

//     if(!$resultado){
//         echo "<script>alert('Algo hice mal otra vez')</script>";
//     } else {
//         echo "<script>alert('Al fin')</script>";
//     }    
        
// }
