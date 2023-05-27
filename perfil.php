<?php  session_start();  require('template/header.php'); ?>
<div class="cabeza">
    <img src="fondoMenu/353737-admin.jpg" alt="">
</div>
<div class="zona1">
    <?php
        $buscar_usuario = mysqli_query($conn, "SELECT * FROM `user` WHERE id = '".$_SESSION['id']."' ");
        while($resultado=mysqli_fetch_array($buscar_usuario)){
            $nombre=$resultado['name'];
            $usuario=$resultado['user'];
        }
    ?>
<div class="perfil">
    <table border="0" width="100%" cellspacing="6" cellpadding="6">
        <thead>
            <tr>
                <td colspan="2">

                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><label for="">Nombre</label></td>
                <td><input type="text" value="<?php echo $nombre;?>"></td>
            </tr>
            <tr>
                <td><label for="">Usuario</label></td>
                <td><input type="text" value="<?php echo $usuario;?>"></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<?php require('template/footer.php'); ?>