<?php 
include_once "global/config.php";
include_once "templates/cabecera.php";
?>

<br>
<form method="post" name= "add_productos2" action="process.php" class="alert alert-success text-center ">
    <input type="hidden" name="action" value="add2">
    
    <span class="fs-3 ">¡Ingrese los datos VERSION 2!</span>

    <div class="container pt-4 text-start">

        <div class="mb-3">
            <label for="formFile" class="form-label">Nombre del producto</label>
            <input class="form-control form-control-lg" type="text" name="nombre"  aria-label=".form-control-lg example">
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Ingrese la imagen</label>
            <input class="form-control" type="file"  name="file">
        </div>

        
        <label for="formFile" class="form-label">Precio del Producto</label>

        <div class="input-group mb-3">    
            <span class="input-group-text">$</span>
            <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)" name="precio" >
            
        </div>

        <div class="mb-3">
            <label for="formFile" class="form-label">Descripción</label>
            <textarea class="form-control"  rows="3" name="descripcion" type="text"></textarea>
        </div>

        <div class="text-center">
            <button type="submit" 
            name="" 
            class="btn btn-primary btn-lg" 
            value="">
                        Insertar
            </button>
        </div>

    </div>
</form>

<?php include_once "templates/pie.php"; ?>