<?php 
    include_once "global/config.php";
    include_once "carrito.php"; 
    include_once "templates/cabecera.php";
?>

<div class="row row-cols-1 row-cols-md-2 bg-dark p-4 m-5 ">
  <div class="col p-2  border-top border-start border-white">
    <div class="card bg-dark text-white">
      <img height="200px" src="https://logodownload.org/wp-content/uploads/2016/10/php-logo.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">PHP 7</h5>
        <p class="card-text">Se utilizo para todo el desarrollo de la web: conexiones, configuración, entre otros .</p>
      </div>
    </div>
  </div>
  <div class="col p-2 border-top border-end border-white">
    <div class="card bg-dark text-white">
      <img height="200px" src="https://th.bing.com/th/id/OIP.0y5hfXEJY0JbYYQaiP82nwHaDt?pid=Api&rs=1" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">Bootstrap</h5>
        <p class="card-text">Herramienta de maquetación web, utilizada para realizar el sitio. </p>
      </div>
    </div>
  </div>
  <div class="col p-2 border-bottom border-start border-white">
    <div class="card bg-dark text-white ">
      <img height="200px" src="https://logos-download.com/wp-content/uploads/2016/05/MySQL_logo_logotype.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">MySql</h5>
        <p class="card-text">Base de datos utilizada para la conexion de productos en la web.</p>
      </div>
    </div>
  </div>
  <div class="col p-2 border-bottom border-end border-white">
    <div class="card bg-dark text-white ">
      <img height="200px" src="https://cdn-images-1.medium.com/max/1200/1*qwFrTMnFkcd3U9rFKwwacw.png    " class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title text-center">GitHub</h5>
        <p class="card-text">Repositorio utilizado para el almacenamiento del proyecto en la nube.</p>
      </div>
    </div>
  </div>
</div>

<?php
    include_once "templates/pie.php";
?>