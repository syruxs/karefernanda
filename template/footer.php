
<footer>
      <!-- Footer main -->
      <section class="ft-main">
        <div class="ft-main-item">
          <h2 class="ft-title">Menu</h2>
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Pricing</a></li>
            <li><a href="#">Customers</a></li>
            <li><a href="#">Careers</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Productos</h2>
          <ul>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('ACCESORIOS', COD, KEY);?>">Accesorios</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('BLUSAS', COD, KEY);?>">Blusas</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('CARDIGAN', COD, KEY);?>">Cardigan</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('CHAQUETA', COD, KEY);?>">Chaquetas</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('PANTALON', COD, KEY);?>">Pantalones</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('POLERA', COD, KEY);?>">Polera</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('SWEATERS', COD, KEY);?>">Sweaters</a></li>
            <li><a class="dropdown-item" href="category.php?category=<?php echo openssl_encrypt('TEJIDOS', COD, KEY);?>">Tejidos</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Contacto</h2>
          <ul>
            <li><a href="contac.php">Contactar</a></li>
          </ul>
        </div>
        <div class="ft-main-item">
          <h2 class="ft-title">Mantente actualizado</h2>
          <p>Suscríbete a nuestro boletín para recibir nuestras últimas noticias..</p>
          <form>
            <input type="email" name="email" placeholder="Ingresa tu dirección de correo">
            <input type="submit" value="Suscribete">
          </form>
        </div>
      </section>

      <!-- Footer social -->
      <section class="ft-social">
        <ul class="ft-social-list">
          <li><a href="https://www.facebook.com/SilviaLagos157/" target="_blank" title="VISITA MI FACEBOOK"><i class="fa fa-facebook-square facebook icon fa-1x" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/silvialagos157/" target="_blank" title="VISITA MI INSTAGRAM"><i class="fa fa-instagram instagram icon fa-1x" aria-hidden="true"></i></a></li>
          <li><a href="https://api.whatsapp.com/send?phone=56952262052" target="_blank" title="CONTACTAME A TRAVES DE WHATSAPP"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
        </ul>
      </section>
    
      <!-- Footer legal -->
      <section class="ft-legal">
        <ul class="ft-legal-list">
          <li><a href="#">Politica de Privacidad</a></li>
          <li>&copy; 2023 Copyright D.U.</li>
        </ul>
      </section>
    </footer>