<?php 
ob_start(); 
?>
<?php 
error_reporting(0);
session_start(); 
include("kafer/config.php");
include("kafer/fer.php");
include("cart.php");

if(isset($_SESSION['carrito'])){
  $carrito_mio=$_SESSION['carrito'];
}
if(isset($_SESSION['carrito'])){
  for($i=0;$i<=count($carrito_mio)-1;$i++){
      if(isset($carrito_mio[$i])){
        if($carrito_mio[$i]!=NULL){
          if(!isset($carrito_mio['cantidad'])){
            $carrito_mio['cantidad']='0';
          }else{
            $carrito_mio['cantidad']=$carrito_mio['cantidad'];
          }$total_cantidad = $carrito_mio['cantidad'];
          $total_cantidad ++ ;
          if(!isset($totacantidad)){$totacantidad = '0';}else{$totacantidad = $totacantidad;}
          $totacantidad += $total_cantidad;
        }}}
  if(!isset($totacantidad)){$totacantidad = '';}else{$totacantidad = $totacantidad;}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Karen Fernanda">
    <meta name="keywords" content="Karen Fernanda">
    <meta name="author" content="Karen Fernanda">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="google" content="nositelinkssearchbox">
    <meta name="google" content="notranslate">
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>::: Karen Fernanda :::</title>
    <script type="text/javascript">
		window.addEventListener("scroll", function(){
			var header = document.querySelector("header");
			header.classList.toggle("abajo",window.scrollY>0);
		});
	</script>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
</head>

<body>
<!--Menu principal web-->
<header>
  <img src="img/logo.png" alt="" width="100" title="KAREN FERNANDA">
  <a href="#" class="logo">KAREN FERNANDA</a>
  <nav>
    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a href="#">Productos</a>
          <ul>
            <li><a href="category.php?category=<?php echo openssl_encrypt('ACCESORIOS', COD, KEY);?>">Accesorios</a></li>
            <li><a href="category.php?category=<?php echo openssl_encrypt('BLUSAS', COD, KEY);?>">Blusas</a></li>
            <li><a href="category.php?category=<?php echo openssl_encrypt('CARDIGAN', COD, KEY);?>">Cardigan</a></li>
            <li><a href="category.php?category=<?php echo openssl_encrypt('CHAQUETA', COD, KEY);?>">Chaquetas</a></li>
            <li><a href="category.php?category=<?php echo openssl_encrypt('PANTALON', COD, KEY);?>">Pantalones</a></li>
            <li><a href="category.php?category=<?php echo openssl_encrypt('POLERA', COD, KEY);?>">Polera</a></li>
            <li><a href="category.php?category=<?php echo openssl_encrypt('SWEATERS', COD, KEY);?>">Sweaters</a></li>
            <li><a href="category.php?category=<?php echo openssl_encrypt('TEJIDOS', COD, KEY);?>">Tejidos</a></li>
          </ul>      
        </li>
      <li><a href="#">Servicios</a></li>
      <li><a href="#">Portafolio</a></li>
      <li><a href="contac.php">Contacto</a></li>
      <li><a href="#log" title="INGRESAR A CUENTA"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a></li>
      <li><a href="mostrarCarrito.php" title="VER CARRITO"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i><?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO'])?></a></li>
    </ul>
  </nav>
</header>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" id="menu">
  <a class="navbar-brand" href="#">&nbsp; KAREN FERNANDA</a>
  <div class="input-group">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
      <span class="navbar-toggler-icon"></span>
    </button>
  <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
    <div class="offcanvas-body">
      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fa fa-times-circle" aria-hidden="true"></i> CERRAR MENU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Productos
        </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('ACCESORIOS', COD, KEY);?>">Accesorios</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('BLUSAS', COD, KEY);?>">Blusas</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('CARDIGAN', COD, KEY);?>">Cardigan</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('CHAQUETA', COD, KEY);?>">Chaquetas</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('PANTALON', COD, KEY);?>">Pantalones</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('POLERA', COD, KEY);?>">Polera</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('SWEATERS', COD, KEY);?>">Sweaters</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('TEJIDOS', COD, KEY);?>">Tejidos</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Portafolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contac.php">Contacto</a>
        </li>
        <li class="nav-item">
          <a href="#log" title="INGRESAR A CUENTA" class="nav-link active" aria-current="page"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a>
        </li>
        <li class="nav-item">
          <a href="mostrarCarrito.php" title="VER CARRITO" class="nav-link active" aria-current="page"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i><?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO'])?></a>
        </li>
      </ul>
    </div>
  </div>
  <a href="#log" title="INGRESAR A CUENTA" class="navbar-brand"><i class="fa fa-user-circle-o fa-2x" aria-hidden="true"></i></a>
  <a href="mostrarCarrito.php" title="VER CARRITO" class="navbar-brand"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i><?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO'])?></a>
</div>
</nav>