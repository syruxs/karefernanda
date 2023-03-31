<?php  session_start();  require('template/header.php'); ?>
<?php require('template/redes.php'); ?>
<?php   
  include("kafer/config.php");
  include("kafer/fer.php");
  include("cart.php");

$id=$_POST['id'];

if($ID == ''){
  $Id=$_POST['id'];
}else{
  $Id=$ID;
}

$buscar_producto=mysqli_query($conn, "SELECT * FROM `productos` WHERE `id_product` = '$Id'");
    while($resultado=mysqli_fetch_array($buscar_producto)){
        $img=$resultado['img'];
        $nombre=$resultado['name'];
        $descriptions=$resultado['description'];
        $Precio=$resultado['price'];
        $precio=number_format($Precio, 0, ',', '.');
        $x_small=$resultado['talla_xs'];
        $small=$resultado['talla_s'];
        $medium=$resultado['talla_m'];
        $large=$resultado['talla_l'];
        $x_large=$resultado['talla_xl'];
        $xx_large=$resultado['talla_xxl'];
        $category=$resultado['category'];
    }
?>
<body>
<div class="cabeza">
    <img src="fondoMenu/353737-admin.jpg" alt="">
</div>
<br>
<br>
<br>
<br>
<div class="separator">
  <span>DETALLE DEL PRODUCTOS</span>
  <hr>
</div>
<?php if($messaje!=""){?>
<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    <?php print_r($messaje);?> <a href="mostrarCarrito.php" class="alert-link">Ver Carrito</a>
  </div>
</div>
<?php } ?>
<section class="zona2">
    <div class="container principal">
        <div class="foto_product2">
            <img src="<?php echo $img;?>" alt="">
        </div>
        <div class="row">
            <div class="col-1">
                <img src="<?php echo $img;?>" width="100" alt="">
            </div>
            <div class="col" id="foto_product">
                <div class="img_product_result">
                    <figure>
                        <a href="#img1"><img src="<?php echo $img;?>" alt="" class="product_img" width="300"></a>
                    </figure>
                </div>
            </div>
            <div class="col">
                <div class="titulo_product">
                    <?php echo $nombre;?>
                </div>
                <div class="precio">
                    <p>Ahora </p> <span class="price"><?php echo ' $ '.$precio;?></span>
                </div>
                <div class="descriptions">
                    <h3>Descripción</h3>
                    <?php echo $descriptions;?>
                </div>
                <br>
                <div class="talla">
                    <p>Tallas Disponibles</p>
                    
                    <ul class="cicle">
                        <li title="Stock actual <?php echo $x_small;?>">XS<input type="hidden" class="ta" value="<?php echo $x_small;?>"></li>
                        <li title="Stock actual <?php echo $small;?>">S<input type="hidden" class="ta" value="<?php echo $small;?>"></li>
                        <li title="Stock actual <?php echo $medium;?>">M<input type="hidden" class="ta" value="<?php echo $medium;?>"></li>
                        <li title="Stock actual <?php echo $large;?>">L<input type="hidden" class="ta" value="<?php echo $large;?>"></li>
                        <li title="Stock actual <?php echo $x_large;?>">XL<input type="hidden" class="ta" value="<?php echo $x_large;?>"></li>
                        <li title="Stock actual <?php echo $xx_large;?>">XXL<input type="hidden" class="ta" value="<?php echo $xx_large;?>"></li>
                    </ul>
                    <br>
                    <br>
                    <p>Tú Talla seleccionada es: <label class='selectTalla' style="font-size:large;"></label></p>
                    <p><div class="tallas">No ha seleccionado una talla aun.</div></p>
                    <p style="background-color:#D2D5CF;padding: 5px;">Nota: El stock indicado en pantalla deberá ser verificado por la tienda.</p>
                </div>
                <br>
                <div class="wrapper">
                  <span class="minus ">-</span>
                  <span class="num">1</span>
                  <span class="plus">+</span>
                </div>
                <br>
                <br>
                <form action="" method="POST" id="form" name="form">
                  <input type="hidden" name="img" value="<?php echo openssl_encrypt($img, COD, KEY);?>">
                  <input type="hidden" name="ref" value="<?php echo openssl_encrypt($id, COD, KEY);?>">
                  <input type="hidden" name="titulo" value="<?php echo openssl_encrypt($nombre, COD, KEY);?>">
                  <input type="hidden" name="precio" value="<?php echo openssl_encrypt($Precio, COD, KEY);?>">
                  <input type="hidden" name="cantidad" class="count" value="1">
                  <input type="hidden" name="talla" value="">
                  <input type="hidden" name="stock" value="">
                  <button class="btn btn-primary" type="submit" name="btnAccion" value="Agregar" title="AÑADIR PRODUCTO AL CARRITO"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Añadir al carrito</button>
                </form>
            </div>
        </div>
    </div>
</section>
<div class="separator">
  <span>OTRAS OPCIONES PARA TI</span>
  <hr>
</div>
<section class="containter-product">
  <?php
  $search_product=mysqli_query($conn, "SELECT * FROM `productos` WHERE `category`='$category'");
    while($row=mysqli_fetch_array($search_product)){
      echo '
        <div class="product">
          <figure>
          <img src="'.$row['img'].'" alt="" class="product_img" width="400">
            <div class="capa">
              <h3>'.$row['name'].'</h3>
              <p>'.$row['description'].'</p>
              <form action="product.php" method="post" id="formulario">
                <input type="hidden" name="id" value="'.$row['id_product'].'">
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
<div class="modal" id="img1">
  <div class="imagen">
    <a href="#"><img src="<?php echo $img;?>" style="width: 100%;"></a>
  </div>
</div>
<div class="separator">
  <span></span>
  <hr>
</div>
<?php require('loging.php'); ?>
<?php require('template/footer.php'); ?>
<script>
  window.addEventListener('load', function() {
    validaTalla();
  });

  const cicle = document.querySelectorAll('.cicle li'),
              inputTalla = document.querySelector('input[name="talla"]'),
              comentario = document.querySelector('.tallas'),
              selectTalla = document.querySelector('.selectTalla'),
              stock = document.querySelector('input[name="stock"]'),
              ta = document.querySelectorAll('.ta');

        cicle.forEach((item) => { 
          item.addEventListener('click', () => {
            cicle.forEach((item) => {
              item.classList.remove('active');
              var cant = item.querySelector('.ta').value;
            });
        
            validaTalla();

            item.classList.add('active');
            var cant = item.querySelector('.ta').value;
            console.log(cant); 
            inputTalla.value = item.innerText;
            selectTalla.innerText = item.innerText + ' Stock diponible: ' + cant;
            stock.value = cant;
            comentario.style.display = "none";


          });
        });
        
        function validaTalla(){
          ta.forEach((item) => {
            if(item.value == 0){
              item.parentElement.style.display = "none";
            }
          });
        }

        const plus = document.querySelector('.plus'),
        minus = document.querySelector('.minus'),
        num = document.querySelector('.num'),
        input = document.querySelector('.count'),
        maximo = document.querySelector('input[name="stock"]');

        let a = 1;  


        plus.addEventListener('click', () => {
          a++;
          a = (a > maximo.value) ? maximo.value : a;
          num.innerText = a;
          input.value = a;
          });

        minus.addEventListener('click', () => {
          a--;

          a = (a < 1) ? 1 : a;
          num.innerText = a;
          input.value = a;
        });
 </script>
</body>
</html>