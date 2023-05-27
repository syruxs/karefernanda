<?php session_start(); 
include("kafer/config.php");
include("kafer/fer.php");
error_reporting(0);
$messaje="";

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case 'Agregar':
            /*VALIDAMOS LA ID DEL PRODUCTO*/
            if(is_numeric(openssl_decrypt($_POST['ref'],COD,KEY))){
                $ID=openssl_decrypt($_POST['ref'],COD,KEY);
                /*$messaje.="OK ID correcto".$ID."<br>";*/
            }else{
                $messaje.="Upss... ID incorrecto".$ID."<br>"; break;
            }
            /*VALIDAMOS EL NOMBRE DEL PRODUCTO*/
            if(is_string(openssl_decrypt($_POST['titulo'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['titulo'],COD,KEY);
                /*$messaje.="OK nombre correcto".$NOMBRE."<br>";*/
            }else{  
                $messaje.="Upss... algo pasa con el nombre"; break;
            }
            /*VALIDAMOS EL PRECIO DEL PRODUCTO*/
            if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                /*$messaje.="OK precio correcto".$PRECIO."<br>";*/
            }else{ 
                $messaje.="Upss... algo pasa con el precio"; break;
            }
            /*VALIDAMOS LA CANTIDAD DEL PRODUCTO*/
            if(is_numeric($_POST['cantidad'])){
                $CANTIDAD=$_POST['cantidad'];
                /*$messaje.="OK cantidad correcto".$CANTIDAD."<br>";*/
            }else{
                /*$messaje.="Upss... algo pasa con la cantidad";*/
                echo '<script>swal("Error de Sistema!", "Debes seleccionar una CANTIDAD para continuar!", "error");</script>';
                break;
            }
            /*VALIDAMOS LA TALLA DEL PRODUCTO*/
            if($_POST['talla'] != ""){
                $TALLA=$_POST['talla'];
                /*$messaje.="OK talla correcto".$TALLA."<br>";*/
            }else{
                echo '<script>swal("Error de Sistema!", "Debes seleccionar una TALLA para continuar!", "error");</script>';
                /*$messaje.="Upss... algo pasa con la talla";*/
                break;
            }
            /*VALIDAMOS LA IMAGEN*/
            if(is_string(openssl_decrypt($_POST['img'],COD,KEY))){
                $IMAGEN=openssl_decrypt($_POST['img'],COD,KEY);
                /*$messaje.="OK imagen correcto".$IMAGEN."<br>";*/
            }else{
                $messaje.="Upss... algo pasa con la imagen"; break;
            }
            if(!isset($_SESSION['CARRITO'])){

                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'PRECIO'=>$PRECIO,
                    'CANTIDAD'=>$CANTIDAD,
                    'TALLA'=>$TALLA,
                    'IMAGEN'=>$IMAGEN
                );

                $_SESSION['CARRITO'][0]=$producto;
                $messaje="Producto agregado al carrito";

            }else{
                    
                    $idProductos=array_column($_SESSION['CARRITO'],"ID");
    
                    if(in_array($ID,$idProductos)){
                        echo '<script>swal("Bien Hecho!", "Tú '.$NOMBRE.' ya ha sido agregado a tu carrito!", "success");</script>';
                        $messaje="";
                    }else{
    
                        $NumeroProductos=count($_SESSION['CARRITO']);
                        $producto=array(
                            'ID'=>$ID,
                            'NOMBRE'=>$NOMBRE,
                            'PRECIO'=>$PRECIO,
                            'CANTIDAD'=>$CANTIDAD,
                            'TALLA'=>$TALLA,
                            'IMAGEN'=>$IMAGEN
                        );
    
                        $_SESSION['CARRITO'][$NumeroProductos]=$producto;
                        $messaje.="Producto agregado al carrito";
                    }
            }
        break;

        case 'Eliminar':
            if(is_numeric(openssl_decrypt($_POST['ref'],COD,KEY))){
                $ID=openssl_decrypt($_POST['ref'],COD,KEY);
                
                foreach($_SESSION['CARRITO'] as $indice=>$producto){
                    if($producto['ID']==$ID){
                        unset($_SESSION['CARRITO'][$indice]);
                        echo "<script>alert('Elemento Eliminado ...')</script>";
                        echo '<script>swal("Bien Hecho!", "Tú producto ha sido eliminado de tu carrito!", "warning");</script>';
                        
                    }
                }
            }else{
                $messaje.="Upss... ID incorrecto".$ID."<br>";
                $id_producto=$_POST['ref'];
            }
        break;
    }
}
?>