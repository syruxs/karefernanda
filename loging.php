<div class="logear" id="log">
  <div class="close">
    <a href="#" title="CERRAR FORMULARIO"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
  </div>
    <div class="login-box">
    <h2>Login</h2>
        <form class="form-login" action="login.php" method="post">
            <table width="100%">
                <tr>
                    <td colspan="2">
                        <div class="user-box">
                            <input type="text" name="user" maxlength="12" required>
                                <label>Usuario</label>
                        </div>                    
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="user-box">
                            <input type="password" name="pass" maxlength="12" required>
                                <label>Contraseña</label>
                        </div>                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="">
                          <button type="submit" name="logearse">ENTRAR</button>
                        </a>                    
                    </td>
                    <td>
                        <a href="register.php">
                          <button type="button" name="registrarse">REGISTRARSE</button>
                        </a>                    
                    </td>
                </tr>
            </table>
        </form>
        <br>
        <a href="">recuperar contraseña</a>
    </div>
</div>
<link rel="stylesheet" href="css/login.css">