
<?php
include 'Configuracion.php';


session_start();
if (isset($_SESSION['name'])) {
    // El usuario ha iniciado sesión
    $username = $_SESSION['name']; 
   ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Carrito de Compras</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/formulario.css">
    <style>
        .container {
            padding: 20px;
        }

        .cart-link {
            width: 100%;
            text-align: right;
            display: block;
            font-size: 22px;
        }
    </style>
</head>


<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

                <ul class="nav nav-pills">
                <?php
                    if(isset($_GET['logout'])){
                        session_destroy();
                        header('Location: login.php');
                        exit();
                    }
                    ?>

                    <li role="presentation" class="active"><a href="productos.php">$GSCOMPANY$</a></li>
                    <li role="presentation"><a href="about.php">ABOUT</a></li>
                    <li role="presentation"><a href="VerCarta.php">CARRITO</a></li>
                    <li role="presentation"><a href="contact.php">CONTACT</a></li>
                    <li role="presentation"><a href="formulario.php">FORMULARIO</a></li>
                    <li role="presentation"><a href="?logout=true">Desconectar</a></li>

                    
                </ul>
            </div>

            <div class="container-form">
    <div class="info-form">
        <h1 style="color:black">Contacta con GSCOMPANY</h1>
        <p style="color:black">Para cualquier consulta, no dude en ponerse en contacto con nosotros a través de este formulario.</p>
        <a href="#" style="color:black">  <img src="media/telefono.png" alt="imagen de un telefono" style="color:black"> 671179342  </a>
        <a href="#" style="color:black"> <img src="media/email.png" alt="imagen de un correo" style="color:black"> gscompany@gmail.com </a> 
        <a href="#" style="color:black"> <img src="media/ubicacion.png" alt="imagen de ubicacion" style="color:black"> Guadalupe, Murcia, España </a>
    </div>

    <form action="mailto:gscompany@gmail.com?subject=consulta" autocomplete="off" id="form">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="campo">
      <!--  <input type="email" name="email" id="email" placeholder="Email" class="campo">-->
        <input type="text" name="asunto" id="asunto" placeholder="Asunto" class="campo">
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Mensaje" class="campo"></textarea>
        <input type="checkbox" name="condiciones" id="condiciones" value="condiciones"> He leído y acepto los términos de la Política de privacidad
        <br><br>
        <input type="button" value="Comprobar campos" name="comprobar" id="comprobar" class="btn-enviar">
        <input type="submit" value="Enviar" name="enviar" id="enviar" class="btn-enviar">
    </form>

   </div><br>

   

</div>
</div>
</div>
   
</body>
</html>

<?php

                }
                else{
                   ?>
                   <!DOCTYPE html>
<html lang="es">

<head>
    <title>Carrito de Compras</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/formulario.css">
    <style>
        .container {
            padding: 20px;
        }

        .cart-link {
            width: 100%;
            text-align: right;
            display: block;
            font-size: 22px;
        }
    </style>
</head>


<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">

                <ul class="nav nav-pills">
                <?php
                    if(isset($_GET['logout'])){
                        session_destroy();
                        header('Location: login.php');
                        exit();
                    }
                    ?>

                    <li role="presentation" class="active"><a href="productos.php">$GSCOMPANY$</a></li>
                    <li role="presentation"><a href="about.php">ABOUT</a></li>
                    <li role="presentation"><a href="contact.php">CONTACT</a></li>
                    <li role="presentation"><a href="formulario.php">FORMULARIO</a></li>
                    <li role="presentation"><a href="registrarse.php">REGISTRASE</a></li>
                    <li role="presentation"><a href="login.php">INICIAR SESSION</a></li>
                    
                    

                    
                </ul>
            </div>

            <div class="container-form">
    <div class="info-form">
        <h1 style="color:black">Contacta con GSCOMPANY</h1>
        <p style="color:black">Para cualquier consulta, no dude en ponerse en contacto con nosotros a través de este formulario.</p>
        <a href="#" style="color:black">  <img src="media/telefono.png" alt="imagen de un telefono" style="color:black"> 671179342  </a>
        <a href="#" style="color:black"> <img src="media/email.png" alt="imagen de un correo" style="color:black"> gscompany@gmail.com </a> 
        <a href="#" style="color:black"> <img src="media/ubicacion.png" alt="imagen de ubicacion" style="color:black"> Guadalupe, Murcia, España </a>
    </div>

    <form action="mailto:gscompany@gmail.com?subject=consulta" autocomplete="off" id="form">
        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="campo">
      <!--  <input type="email" name="email" id="email" placeholder="Email" class="campo">-->
        <input type="text" name="asunto" id="asunto" placeholder="Asunto" class="campo">
        <textarea name="descripcion" id="descripcion" cols="30" rows="10" placeholder="Mensaje" class="campo"></textarea>
        <input type="checkbox" name="condiciones" id="condiciones" value="condiciones"> He leído y acepto los términos de la Política de privacidad
        <br><br>
        <input type="button" value="Comprobar campos" name="comprobar" id="comprobar" class="btn-enviar">
        <input type="submit" value="Enviar" name="enviar" id="enviar" class="btn-enviar">
    </form>

   </div><br>

   

</div>
</div>
</div>
   
</body>
</html>

<?php
                   
                }

      
                ?>



<script>
    window.onload = function() {
    document.getElementById("comprobar").onclick = enviar;
    document.getElementById("enviar").style.display="none";
}

function enviar() {
    if (validar()) {
       document.getElementById("enviar").style.display="block";
    }
}

function validar() {

    //Nombre
    var campoNombre = document.getElementById("nombre");
    var expNombre = new RegExp ('^([A-Z][a-z]+)( [A-Z][a-z]+){2,30}$');
    var vNombre = validarCampos(expNombre, campoNombre);

    if (!vNombre) {
        alert("El formato del nombre es: 'Nombre Apellido1 Apellido2'");
        campoNombre.focus();
        return false;
    }

    //Asunto
    var campoAsunto = document.getElementById("asunto");
    var expAsunto = new RegExp("^([A-Z][a-z]+){1,25}$");
    var vAsunto = validarCampos(expAsunto, campoAsunto);

    if (!vAsunto) {
        alert("El asunto debe de empezar por mayúscula");
        campoNombre.focus();
        return false;
    }
    
    //Descripcion
    
    var campoDescripcion = document.getElementById("descripcion");
    var expDescripcion = new RegExp('^(.|\n){0,200}$');
    var vDescripcion = validarCampos(expDescripcion,campoDescripcion);

    if(!vDescripcion){
        alert("La descripción no puede superar los 200 caracteres");
        campoDescripcion.focus();
        return false;
    }


    //Politica de privacidad

    if(document.getElementById("condiciones").checked){
        return true;
    }else{
        alert("Debe de aceptar nuestra política de privacidad");
        return false;
    }

    return true;

}

function validarCampos(expresion,campo){
    if(expresion.test(campo.value)){
        campo.style.borderColor='green';
        return true;
    }else{
        campo.style.borderColor='red';
        return false;
    }
}
</script>

  