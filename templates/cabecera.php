<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito PHP Globant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top ">
        <a class="navbar-brand" href="index.php">
        <img src="https://image.flaticon.com/icons/png/512/107/107831.png" alt="logo, carritophp" style="height: 25px; width: 25px;" class="m-1">
        </a>
        <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="my-nav" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="vercarrito.php" >Carrito (<?php 
                            echo (empty($_SESSION["carrito"]))?0:count($_SESSION["carrito"]);
                        ?>)
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <br/>
    <div class="container pt-3">
    <br>