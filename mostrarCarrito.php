<?php 
ob_start(); 
error_reporting(0);
session_start(); 
include("kafer/config.php");
include("kafer/fer.php");
include("cart.php");
?>
<?php require('template/header.php'); ?>
<?php require('template/redes.php'); ?>
<div class="cabeza">
    <img src="fondoMenu/353737-admin.jpg" alt="">
</div>
<br>
<br>
<br>
<br>
<div class="separator">
  <span><h3>LISTADO DE PRODUCTOS</h3></span>
  <hr>
</div>
<section class="tabla_productos">
<?php if(!empty($_SESSION['CARRITO'])){ $contador=1;?>
<table width="100%" border="0" cellpadding="6" cellspacing="6" class="tabla table table-striped table-hover">
    <thead>
        <tr>
            <th width="auto" class="text-center">FOTO</th>
            <th width="40%" class="text-center">DESCRIPCIÓN</th>
            <th width="auto" class="text-center">TALLA</th>
            <th width="15%" class="text-center">CANTIDAD</th>
            <th width="20%" class="text-center">PRECIO</th>
            <th width="20%" class="text-center">TOTAL</th>
            <th width="5%">----</th>
        </tr>
    </thead>
        <?php $total=0; ?>
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){ ?>
    <tbody>
        <tr>
            <td class="text-center" style="cursor: pointer;"><a href="#img<?php echo $contador; ?>"><img src="<?php echo $producto['IMAGEN'];?>" width="60" alt=""></a></td>
            <td class="align-middle text-center"><?php echo $producto['NOMBRE'];?></td>
            <td class="align-middle text-center"><?php echo $producto['TALLA'];?></td>
            <td class="align-middle text-center"><?php echo $producto['CANTIDAD'];?></td>
            <td class="align-middle text-center"><?php echo " $ ".number_format($producto['PRECIO'], 0);?></td>
            <td class="align-middle text-center"><?php echo " $ ".number_format($producto['CANTIDAD']*$producto['PRECIO'],0);?></td>
            <td class="align-middle text-center">
                <form action="" method="post">
                    <input type="hidden" name="ref" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
                    <button class="btn btn-danger" type="submit" name="btnAccion" value="Eliminar">Eliminar</button>
                </form>
            </td>
        </tr>
        <div class="modal" id="img<?php echo $contador; ?>">
            <div class="imagen">
                <a href=""><img src="<?php echo $producto['IMAGEN'];?>" style="width: 100%;"></a>
            </div>
        </div>
        <?php $total=$total+($producto['CANTIDAD']*$producto['PRECIO']); ?>
        <?php $contador++;} ?>
        <tr>
            <td colspan="5" align="right"><h3>Total</h3></td>
            <td align="right"><h3><?php echo " $ ".number_format($total,0); ?></h3></td>
            <td></td>
        </tr>
        <form action="pagar.php" method="post" width="100%" style="background-color: #216154;">
            <tr>
                <td colspan="4">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Correo de contacto</span>
                        <input type="email" name="email" id="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" placeholder="Por favor escribe tu correo" required>
                    </div>
                </td>
                <td colspan="3">
                    <button class="btn btn-primary btn-lg btn-block" type="submit" name="btnAccion" value="proceder"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Proceder a pagar >></button>
                </td>
            </tr>
        </form>
    </tbody>
</table>
<a class="btn btn-primary" href="index.php" role="button"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Seguir Comprando...</a>
<?php }else{ ?>
    <div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    No hay productos en el carrito...
  </div>
</div>
<a class="btn btn-primary" href="index.php" role="button">IR A PRODUCTOS</a>
<?php } ?>
</section>
<div class="separator">
  <span>&nbsp;</span>
  <hr>
</div>
<?php require('template/footer.php'); ?>
<style>

    @media screen and (max-width: 833px) {
       table {
           width:100%;
       }
       thead {
           display: none;
       }
       tr:nth-of-type(2n) {
           background-color: inherit;
       }
       tr td:first-child {
           background: #f0f0f0;
           font-weight:bold;
           font-size:1.3em;
       }
       tbody td {
           display: block;
           text-align:center;
       }
       tbody td:before {
           content: attr(data-th);
           display: block;
           text-align:center;
       }
}
</style>
<script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>