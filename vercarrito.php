<?php
    include_once "global/config.php";
    include_once "carrito.php";
    include_once "templates/cabecera.php";
?>

<br>
<br>
<br>

<?php if (!empty($_SESSION["carrito"])) {?>

<div class="table-responsive">

    <table class="table table-hover table align-middle">

        <tr class="table-active">
            <th width="15%" class="text-center">Imagen</th>
            <th width="20%" class="text-center">Nombre</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Cantidad</th>
            <th width="15%" class="text-center">total</th>
            <th width="10%" class="text-center">--</th>
        </tr> 

        <?php $total= 0;?>

            <!-- Recibo los datos del producto en un arreglo de session -->
        <?php foreach($_SESSION["carrito"] as $var => $producto){ ?>

        <tr>
            <td class="text-center">
            <div class="card-img-top p-2">
            <img src="<?= $producto["imagen"];?>" 
                    class="" 
                    alt="..." 
                    data-bs-toggle="popover" 
                    title= "<?= $producto["descripcion"];?>"            
                    height= "100px"
                ></div>
            </td>

            <td class="text-center"><?= $producto["nombre"];?></td>
            <td class="text-center">$<?= $producto["precio"];?></td>            
            <td class="text-center"><?= $producto["cantidad"];?></td>
            <td class="text-center">$<?= number_format($producto["precio"]*$producto["cantidad"],2);?></td>
            
            <td class="text-center">
                <form action="" method="post">
                    <input 
                    type="hidden" 
                    name="ID" 
                    id="ID" 
                    value= "<?= openssl_encrypt($producto["id"],COD,KEY); ?>">
                    
                    <!-- Envio un value de eliminar con el ID  -->
                    <button 
                        class= "btn btn-danger" 
                        type="submit" 
                        name="enviarcarrito" 
                        value="borrar">Eliminar</button>
                </form>
            </td>
        </tr>
        
        <!-- suma total de los productos -->
        <?php $total +=($producto["precio"]* $producto["cantidad"]);?>
        <?php }?>
        
        <tr class="table-active">
            <td colspan="3" align="right" width="60%"><h3>Total</h3></td>
            <td align="right" width="30%"><h3><?= number_format($total,2);   ?></h3></td>
            <td><button class="btn btn-info" width="10%">Comprar</button></td>
        </tr>

    </table>
</div>

<?php } else {?>
    <div class="alert alert-success">
        no hay productos en el carrito
    </div>
<?php }?>
<?php include_once "templates/pie.php"; ?>