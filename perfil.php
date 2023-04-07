<?php  session_start();  require('template/header.php'); ?>
<div class="cabeza">
    <img src="fondoMenu/353737-admin.jpg" alt="">
</div>
<div class="zona1">
<div class="perfil">
    <table border="1" width="100%">
        <thead>
            <tr>
                <td colspan="2">
                    <div class="img_perfil">
                        <img src="imgPerfil/yo.jpg" alt="" width="100">
                    </div>
                </td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><label for="">Nombre</label></td>
                <td><input type="text"></td>
            </tr>
        </tbody>
    </table>
</div>
</div>
<?php require('template/footer.php'); ?>