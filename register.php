<?php  session_start();  require('template/header.php'); ?>
<?php include("kafer/config.php"); include("kafer/fer.php"); ?>
<style>
  :root {
    --ruler: 16px 16px 16px 16px;
    --color-red: #AE1100;
    --color-bg: #EBECF0;
    --color-shadow: #BABECC;
    --color-white: #FFF;
  }

.formulario p, select, textarea, button {
    font-family: 'Montserrat', sans-serif;
    letter-spacing: -0.2px;
    font-size: var(--ruler);
}
.formulario input{
    font-family: 'Montserrat', sans-serif;
    letter-spacing: -0.2px;
    font-size: var(--ruler); 
}
.formulario div, p {
  color: var(--color-shadow);
  text-shadow: 1px 1px 1px var(--color-white);
}
form {
  padding: 15px;
  width: var(--ruler);
  margin: 0 auto;
}
.formulario button, input {
  border: 0;
  outline: 0;
  font-size: var(--ruler);
  border-radius: var(--ruler);
  padding: var(--ruler);
  background-color:var(--color-bg);
  text-shadow: 1px 1px 0 var(--color-white);
}

.formulario labels {
  display: block;
  margin-bottom: var(--ruler);
  width: 100%;

}

.formulario input {
  margin-right: var(--ruler);
  box-shadow:  inset 2px 2px 5px var(--color-shadow), inset -5px -5px 10px var(--color-white);
  width: 100%;
  box-sizing: border-box;
  transition: all 0.2s ease-in-out;
  appearance: none;
  -webkit-appearance: none;
  color: #797D7F ;
}
.formulario #nameuser{
    text-transform: capitalize;
}
.formulario .mail{
    text-transform: lowercase;
}
.formulario input::placeholder {
  color: var(--color-shadow);
  text-shadow: 1px 1px 0 var(--color-white);
}
.formulario input:focus{
    box-shadow:  inset 1px 1px 2px var(--color-shadow), inset -1px -1px 2px var(--color-white);
}
.formulario button {
  color:#61677C;
  font-weight: bold;
  box-shadow: -5px -5px 20px var(--color-white),  5px 5px 20px var(--color-shadow);
  transition: all 0.2s ease-in-out;
  cursor: pointer;
  font-weight: 600;
}
.formulario button.unit {
    border-radius: var(--ruler);
    line-height: 0;
    width: var(--ruler);
    height: var(--ruler);
    display:inline-flex;
    justify-content: center;
    align-items:center;
    margin: 0 var(--ruler);
    font-size: var(--ruler);

  }
.formulario button:active {
    box-shadow: inset 1px 1px 2px var(--color-shadow), inset -1px -1px 2px var(--color-white);
}
.formulario button:hover {
    box-shadow: -2px -2px 5px var(--color-white), 2px 2px 5px var(--color-shadow);
}
.formulario button.red {
    display: block; width: 100%; color:var(--color-red);
}
.formulario .input-group {
  display: flex; align-items: center; justify-content: flex-start;
}
.formulario .input-group labels{
    margin: 0; flex: 1;
}

.formulario .alert labels{
    margin: 0; flex: 1; color: black;
}
.alert-danger {
  position:relative;
  width: 100%;
  height: 50px;
  padding: 10px;
  border: 1px solid var(--color-red);
}
.alert-danger svg {
  position: absolute;
  top: 50%;
  left: 10px;
  transform: translateY(-50%);
  width: 30px;
  height: 30px;
  fill: var(--color-red);
}
.alert-danger labels{
  color: var(--color-red);
  font-weight: bold;
  font-size: 1.2em;
  text-align: center;
  line-height: 30px;
}
.alert-success {
  position:relative;
  width: 100%;
  height: 50px;
  padding: 10px;
  border: 1px solid #33ff33;
}
.alert-success svg {
    position: absolute;
    top: 50%;
    left: 10px;
    transform: translateY(-50%);
    width: 30px;
    height: 30px;
    fill: #33ff33;
  }
  .alert-success labels{
    color: var(--color-red);
    font-weight: bold;
    font-size: 1.2em;
    text-align: center;
    line-height: 30px;
  }
  .alert-warning {
    position:relative;
    width: 100%;
    height: 50px;
    padding: 10px;
    border: 1px solid #FDCC04;
  }
  .alert-warning svg {
      position: absolute;
      top: 50%;
      left: 10px;
      transform: translateY(-50%);
      width: 30px;
      height: 30px;
      fill: #FDCC04;
    }
    .alert-warning labels{
      color: var(--color-red);
      font-weight: bold;
      font-size: 1.2em;
      text-align: center;
      line-height: 30px;
    }
  
</style>
<body>
<div class="cabeza">
    <img src="fondoMenu/353737-admin.jpg" alt="">
</div>
<br>
<br>
<br>
<br>
<div class="separator">
  <span>REGISTRO DE USUARIO</span>
  <hr>
</div>
<section class="zona1">
  <div class="container" id="contacto">
        <form action="" method="post" class="formulario" id="form">
          <div class="input-group">
            <labels>
            <input type="text" placeholder="Nombre y Apellido" id="name" name="name" style="text-transform:capitalize;"/>
            </labels> 
            <labels>
            <input type="text" placeholder="usuario" id="user" name="user" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();"/>
            </labels> 
            </div>
            <div class="input-group"> 
            <labels>
            <input type="password" placeholder="Contraseña entre 4 y 12 caracteres" id="pass" name="pass" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();"/>
            </labels>             
            <labels>
            <input type="password" placeholder="Ingresar la misma contraseña que el campo anterior" id="pass2" name="pass2" style="text-transform:lowercase;" onkeyup="javascript:this.value=this.value.toLowerCase();"/>
            </labels> 
            </div>             
            <br>
            <div class="input-group">
            <labels>
            <input type="text" placeholder="Direccion de Correo" class="mail" id="correo" name="correo" pattern='^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$'/>
            </labels>
            <br>
            <labels>
            <input type="text" placeholder="Telefono (Opcional)" id="fono" name="fono" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" maxlength="11"/>
            </labels>
          </div>
          <br>
          <button class="red" type="submit"><i class="fa fa-user" aria-hidden="true"></i> REGISTRAR USUARIO</button>
            <div id="respuesta"></div>
        </form>
  </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#name').focus();

  $('#form').submit(function(event) {
    // Prevenir el envío del formulario
    event.preventDefault();

    if ($('#name').val() === '') {
      swal("Fallo en el Registro!", "El campo Nombre y Apellido no puede estar vacio!", "warning");
        $('#name').focus();
      return;
    }
    if ($('#user').val() === '') {
      swal("Fallo en el Registro!", "El campo Usuario no puede estar vacio!", "warning");
        $('#user').focus();
      return;
    }
    
    var password = $('#pass').val();
    var pass2 = $('#pass2').val();

    if (password != pass2) {
      // Las contraseñas no coinciden
      swal("Fallo en el Registro!", "Las contraseñas no coinciden!", "error");
      return;
    }else{
      if (password.length >= 4 && password.length <= 12) {
        // La longitud del password es válida (entre 4 y 12 caracteres)
        if ($('#pass').val() === '') {
          swal("Fallo en el Registro!", "El campo Contraseña no puede estar vacio!", "warning");
            $('#pass').focus();
          return;
        }
      } else {
        // La longitud del password es inválida
          swal("Fallo en el Registro!", "Recuerde que la contraseña debe estar entre 4 y 12 caracteres!", "warning");
        return;
      }    
    }
      var correo = $('#correo').val();
      var expresion_regular = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      
      if (expresion_regular.test(correo)) {
        // El correo es válido
        if ($('#correo').val() === '') {
          swal("Fallo en el Registro!", "El campo Correo no puede estar vacio!", "warning");
            $('#correo').focus();
          return;
        }
      } else {
        // El correo es inválido
        swal("Fallo en el Registro!", "El formato del correo no es valido ejemplo@dominio.com !", "warning");
        return;
      }
    envia();
  });
});

    function envia(){
        $.ajax({
            type: "POST",
            url: "newRegister.php",
            data: {name: $("#name").val(), user: $('#user').val(), pass: $('#pass').val(), correo: $("#correo").val(), fono: $("#fono").val()},
            success: function(e){
                $("#respuesta").html(e);
            }
        });
        setTimeout(function() {
                $("#respuesta").fadeOut(1500);
        },4000);

        setTimeout(function(){
          window.location.href = 'index.php';
		    },4500);
    }
</script>
</body>
<?php require('loging.php'); ?>
<?php require('template/footer.php'); ?>