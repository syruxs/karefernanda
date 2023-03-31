<?php 
ob_start(); 
error_reporting(1);
session_start(); 
include("kafer/config.php");
include("kafer/fer.php");
include("cart.php");
?>
<?php require('template/header.php'); ?>
<?php require('template/redes.php'); ?>
<!--<div class="cabeza">
    <img src="fondoMenu/353737-admin.jpg" alt="">
</div>-->
<br>
<br>
<br>
<br>
<div class="separator">
  <span><h3>PAGAR PRODUCTOS</h3></span>
  <hr>
</div>

<section class="tabla_productos">
<?php
    if($_POST){
        $total=0;
        $SID=session_id();
        $correo=$_POST['email'];
        $status="pendiente";
        $fechayhora=date("Y-m-d H:i:s");
        $id_producto=$_POST['ref'];


        foreach($_SESSION['CARRITO'] as $indice=>$producto){
            $total=$total+($producto['CANTIDAD']*$producto['PRECIO']);
        }
        $insert=mysqli_query($conn,"INSERT INTO `ventas` (`claveTransaccion`, `paypalDatos`, `fecha`, `correo`, `total`, `status`) VALUES ('$SID', '', '$fechayhora', '$correo', '$total', '$status');");
        $id_ultima=mysqli_insert_id($conn);

        foreach($_SESSION['CARRITO'] as $indice=>$producto){
            $insertar=mysqli_query($conn,"INSERT INTO `detalleventa` 
                    (`idVenta`, `idproducto`, `preciounitario`, `cantidad`, `descargado`)
             VALUES ('$id_ultima', '$producto[ID]', '$producto[PRECIO]', '$producto[CANTIDAD]', '0');");
        }
        $folio=$id_ultima;
    }

?>
<br>
<br>
<div class="text-center" style="background-color: #CBF99A; padding: 30px;">
    <h1 class="display-4">¡Paso Final!</h1>
    <p class="lead">Estas a un paso de pagar con PayPal la cantidad de :</p>
      <h4>$ <?php echo number_format($total, 0);?> CLP</h4>
      <div class="banco">
        <h3><img src="img/bci.png" width="100"></h3>
        <p>Para terminar su proceso de compra puede hacer la transferencia a la siguiente cuenta Corriente.</p>
        <p><label>Nombre : Karen Fernanda Castro Rifo</label></p>
        <p>R.U.T. 13.796.376-0</p>
        <p>Cta Cte Bco BCI</p>
        <p>N° cuenta : 45209774</p>
        <p>karenfernanda_castro@hotmail.com</p>
      </div>
      <h4>Folio : <?php echo $folio;?></h4>
      <hr class="my-4">
    <p>Una vez finalizado el pago tus productos estaran listos para retiro o despacho.
    <br>    
      <strong>(Si necesitas ayuda contactate a contacto@karenfernanda.cl)</strong>
    </p>
</div>
</section>
<style>
  body{
  background-image: url(GaleriaPrincipal/254753546_580639983155436_3756085931513216062_n.jpg);
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
}

</style>
<div class="separator">
  <hr>
</div>
<?php require('template/footer.php'); // Cerrar conexión
$conn->close();
//session_destroy();?>