<?php
    include_once "global/conexion.php";
    include_once "global/config.php";
    include_once "carrito.php";
    include_once "templates/cabecera.php";
    $object = new Conexion();
    $conexion = $object->Conectar();

    $consulta = "SELECT * FROM productos";
    $resultado = $conexion->prepare($consulta);
    $resultado->execute();
    $listaProductos = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<br>
<div class="alert alert-success text-center ">
    <!-- <?php echo $alerta;?> -->
    ¡Nuestros Productos!
</div>

<div class="row d-flex text-center ">  

    
            <!-- Lista de productos traidos de la base de datos -->

    <?php foreach($listaProductos as $producto){?>

    <article class="card col-4 col-lg-4 m-4 text-white bg-secondary" style="width: 14rem;">
               
        <img src="<?php echo $producto["imagen"]; ?>" 
            class="card-img-top p-2" 
            alt="..." 
            data-bs-toggle="popover" 
            title= "<?php echo $producto["descripcion"];?>"
            height= "220px"
        >
        <div class="card-body">
            <h5 class="card-title"><?= $producto["nombre"]; ?></h5>
            <p class="card-text"></p>
            <h6 class="card-price">$<?= $producto["precio"]; ?></h6>
            <form action="" method="post">
                <input type="hidden" name="imagen" id="imagen" value= "<?= openssl_encrypt($producto["imagen"],COD,KEY); ?>">
                <input type="hidden" name="id" id="id" value= "<?= openssl_encrypt($producto["ID"],COD,KEY); ?>">
                <input type="hidden" name="nombre" id="nombre" value= "<?= openssl_encrypt($producto["nombre"],COD,KEY); ?>">
                <input type="hidden" name="precio" id="precio" value= "<?= openssl_encrypt($producto["precio"],COD,KEY);  ?>">
                <input type="hidden" name="cantidad" id="cantidad" value= "<?= openssl_encrypt(1,COD,KEY); ?>">               

                <button type="submit" name="enviarcarrito" class="btn btn-primary" value="agregar">
                    Agregar al carrito
                </button>
            </form>
        </div>
    </article>


    <?php } ?>            

</div>




            <!-- navegador de productos -->

<!-- <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav> -->

<script>
var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new bootstrap.Popover(popoverTriggerEl)
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>

<?php include_once "templates/pie.php" ?>