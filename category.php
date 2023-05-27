<?php 
session_start();
require('template/header.php'); 
$CATEGORY=openssl_decrypt($_GET['category'], COD, KEY);
include("kafer/config.php");
include("kafer/fer.php");
?>
<!-- Fin Menu principal web-->
<section class="zona1">
<!-- Galeria Slider Carrusel -->
   <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-touch="true" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="GaleriaPrincipal/254753546_580639983155436_3756085931513216062_n.jpg" class="d-block w-100" alt="..." width="800" height="700">          
            <div class="carousel-caption d-none d-md-block">
            <h5>Karen Fernanda</h5>
            <p>Tú imagen, Tú sello personal.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
          <img src="https://i.pinimg.com/originals/7d/22/a8/7d22a8f0a0468499e959211388aeb109.jpg" class="d-block w-100" alt="..." width="800" height="700">
          <div class="carousel-caption d-none d-md-block">
            <h5>Karen Fernanda</h5>
            <p>Tú imagen, Tú sello personal.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="https://i.pinimg.com/originals/62/51/ea/6251ea640cc0ed2dacfd29b1e5276938.jpg" class="d-block w-100" alt="..." width="800" height="700">
          <div class="carousel-caption d-none d-md-block">
            <h5>Karen Fernanda</h5>
            <p>Tú imagen, Tú sello personal..</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="GaleriaPrincipal/foto2.png" class="d-block w-100" alt="..." width="800" height="700">
          <div class="carousel-caption d-none d-md-block">
            <h5>Karen Fernanda</h5>
            <p>Tú imagen, Tú sello personal.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
<!-- Fin Galeria Slider Carrusel -->
</section>
<?php require('template/redes.php'); ?>
<!--menu categorias-->
<div class="separator">
  <span>CATEGORIAS</span>
  <hr>
</div>
<!--fin menu categorias-->
<section class="zona2">
  <div class="container swiper">
    <div class="slide-container">
      <div class="card-wrapper swiper-wrapper">
        <div class="card swiper-slide">
          <div class="image-box">
            <a href="category.php?category=<?php echo openssl_encrypt('ACCESORIOS', COD, KEY);?>"><img src="category/accesorios.jpg" alt="" /></a>
          </div>
          <div class="profile-details">
            <img src="category/accesorios.jpg" alt="" />
            <div class="name-job">
              <h3 class="name">ACCESORIOS</h3>
            </div>
          </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-box">
            <a href="category.php?category=<?php echo openssl_encrypt('POLERA', COD, KEY);?>"><img src="category/polera.jpg" alt="" /></a>
          </div>
          <div class="profile-details">
            <img src="category/polera.jpg" alt="" />
            <div class="name-job">
              <h3 class="name">POLERA</h3>
            </div>
          </div>
        </div>        
        <div class="card swiper-slide">
          <div class="image-box">
            <a href="category.php?category=<?php echo openssl_encrypt('BLUSAS', COD, KEY);?>"><img src="category/blusas.jpg" alt="" /></a>
          </div>
          <div class="profile-details">
            <img src="category/blusas.jpg" alt="" />
            <div class="name-job">
              <h3 class="name">BLUSAS</h3>
            </div>
          </div>
        </div>
        <div class="card swiper-slide">
        <div class="image-box">
        <a href="category.php?category=<?php echo openssl_encrypt('CARDIGAN', COD, KEY);?>"><img src="category/cardigan.jpg" alt="" /></a>
        </div>
        <div class="profile-details">
        <img src="category/cardigan.jpg" alt="" />
        <div class="name-job">
        <h3 class="name">CARDIGAN</h3>
        </div>
        </div>
        </div>
        <div class="card swiper-slide">
        <div class="image-box">
        <a href="category.php?category=<?php echo openssl_encrypt('CHAQUETA', COD, KEY);?>"><img src="category/chaquetas.jpg" alt="" /></a>
        </div>
        <div class="profile-details">
        <img src="category/chaquetas.jpg" alt="" />
        <div class="name-job">
        <h3 class="name">CHAQUETAS</h3>
        </div>
        </div>
        </div>
        <div class="card swiper-slide">
        <div class="image-box">
        <a href="category.php?category=<?php echo openssl_encrypt('PANTALON', COD, KEY);?>"><img src="category/pantalones.jpg" alt="" /></a>
        </div>
        <div class="profile-details">
        <img src="category/pantalones.jpg" alt="" />
        <div class="name-job">
        <h3 class="name">PANTALONES</h3>
        </div>
        </div>
        </div>
        <div class="card swiper-slide">
        <div class="image-box">
        <a href="category.php?category=<?php echo openssl_encrypt('SWEATERS', COD, KEY);?>"><img src="category/sweaters.jpg" alt="" /></a>
        </div>
        <div class="profile-details">
        <img src="category/sweaters.jpg" alt="" />
        <div class="name-job">
        <h3 class="name">SWEATERS</h3>
        </div>
        </div>
        </div>
        <div class="card swiper-slide">
          <div class="image-box">
            <a href="category.php?category=<?php echo openssl_encrypt('TEJIDOS', COD, KEY);?>"><img src="category/tejidos.jpg" alt="" /></a>
            </div>
            <div class="profile-details">
              <img src="category/tejidos.jpg" alt="" />
            <div class="name-job">
              <h3 class="name">TEJIDOS</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-navBtn"></div>
    <div class="swiper-button-prev swiper-navBtn"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>
<div class="separator">
  <span>PRODUCTOS DE <?php echo $CATEGORY;?></span>
  <hr>
</div>
<!--productos-->
<section class="containter-product">
  <?php
  if(!empty($_REQUEST['nume'])){$_REQUEST['nume']=$_REQUEST['nume'];}else{$_REQUEST['nume']='1';}
  if($_REQUEST['nume']==''){$_REQUEST['nume']='1';}
  $articulos=mysqli_query($conn, "SELECT * FROM `productos` WHERE category='$CATEGORY'");
  $num_registros=@mysqli_num_rows($articulos);
  $registros='4';
  $pagina=$_REQUEST['nume'];
  if(is_numeric($pagina)){$inicio=($pagina-1)*$registros;}else{$inicio=0;}
  $search_product=mysqli_query($conn, "SELECT * FROM `productos` WHERE category='$CATEGORY' LIMIT $inicio, $registros ");
  $paginas=ceil($num_registros/$registros);
    while($row=mysqli_fetch_array($search_product)){
      echo '
        <div class="product">
          <figure>
          <img src="'.$row['img'].'" alt="" class="product_img" width="400">
            <div class="capa">
              <h3>'.$row['name'].'</h3>
              <p>'.$row['description'].'</p>
              <form action="product.php" method="get" id="formulario">
                <input type="hidden" name="id" value="'.openssl_encrypt($row['id_product'], COD, KEY).'">
                <input class="btn btn-primary" type="submit" value="Ver Producto">
              </form>
            </div>
          </figure>
          <div class="product_description">
            <h3 class="product_title">'.$row['name'].'</h3>
            <span class="product_price">$ '.number_format($row['price'], 0, ',', '.').' CPL</span>
          </div>
          <br>
        </div>
      ';
    }
  ?>
</section>
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <?php
                if($_REQUEST['nume'] == '1'){
                    $_REQUEST['nume']== "0";
                      echo "";
                }else{
                  if($pagina>1)
                  $ant = $_REQUEST['nume']-1;
                        echo "<a class='page-link' aria-label='Previous' href='index.php?nume=1'><span aria-hidden='true'>&laquo;</span></a>";
                        echo "<li class='page-item'><a class='page-link' href='index.php?nume=".($pagina-1)."'>".$ant."</a></li>";}
                        echo "<li class='page-item active'><a class='page-link'>".$_REQUEST['nume']."</a></li>";
                  $sigui = $_REQUEST['nume'] + 1;
                  $ultima = $num_registros / $registros;
                  if($ultima == $_REQUEST['nume'] + 1){
                  $ultima == "";}
                  if($pagina<$paginas && $paginas>1)
                        echo "<li class='page-item'><a class='page-link' href='index.php?nume=".($pagina+1)."'>".$sigui."</a></li>";
                  if($pagina<$paginas && $paginas>1)
                        echo "
                      <li class='page-item'><a class='page-link' aria-label='Next' href='index.php?nume=".ceil($ultima)."'><span aria-hidden='true'>&raquo;</span><span class='sr-only'>next</span></a>
                      </li>";
            ?>
        </li>
    </ul>
</nav>

<!--fin productos-->
<div class="separator">
  <span></span>
  <hr>
</div>
<?php require('template/footer.php'); ?>
<script src="js/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>