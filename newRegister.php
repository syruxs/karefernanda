<?php include("kafer/config.php"); include("kafer/fer.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="node_modules/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <?php
    $nombre = $_POST['name'];
    $user = $_POST['user'];
    $pass = sha1($_POST['pass']);
    $correo = $_POST['correo'];
    $fono = $_POST['fono'];
    $permiso = "cliente";
    $estado = "activo";

    $buscar = mysqli_query($conn, "SELECT * FROM `user` WHERE `user` = '$user' OR `email` = '$correo'");
    $count = mysqli_num_rows($buscar);

    if ($count > 0) {
        echo '<script>
                swal("Usuario ya existe!", "El usuario o correo ya existe!", "error");
              </script>';
        exit();
    }else{
        $ingresar = mysqli_query($conn, "INSERT INTO `user`
        (`name`, `email`, `fono`, `permiso`, `user`, `pass`, `estado`) 
 VALUES ('$nombre', '$correo', '$fono', '$permiso', '$user','$pass', '$estado')");

     if ($ingresar && mysqli_affected_rows($conn) > 0) {
         // La inserción fue exitosa
         echo '<script>
                 swal("Bien Hecho!", "Tú registro ha sido ingresado exitosamente!", "success");
               </script>';
     } else {
         // La inserción falló
         echo '<script>
                 swal("Fallo en el Registro!", "Tú registro no ha podido ser ingresado!", "error");
               </script>';
     }
  }
    ?>
</body>
</html>