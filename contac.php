<?php  session_start();  require('template/header.php'); ?>
<?php require('template/redes.php'); ?>
<section class="contact">
  <div class="form-box">
    <table>
      <tr>
        <td>
        <h2>Formulario de Contacto</h2>
        </td>
      </tr>
      <tr>
        <td>
          <div class="inputbox">
            <input type="text" name="name" placeholder="Nombre" required>
            <label for="">Nombre</label>
          </div>        
        </td>
      </tr>
      <tr>
        <td>
          <div class="inputbox">
            <input type="text" name="name" placeholder="Nombre" required>
            <label for="">email</label>
          </div>        
        </td>
      </tr>
    </table>
    <div class="form-value">
      <form action="">




      </form>
    </div>
  </div>

</section>
<?php require('template/footer.php'); ?>
<style>
  body{
  background-image: url(GaleriaPrincipal/254753546_580639983155436_3756085931513216062_n.jpg);
  background-size: cover;
  background-position: center center;
  background-attachment: fixed;
}
</style>