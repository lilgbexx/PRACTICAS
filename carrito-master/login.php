<?php
session_start();
include 'Configuracion.php';

// Verificar si el formulario de login ha sido enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos del formulario
 $name = $_POST['name'];
 $contrasenia = $_POST['contrasenia'];

  // Validar las credenciales (aquí debes implementar tu lógica de validación)
  if ($name = $_POST['name'] && $contrasenia = $_POST['contrasenia']) {
    // Credenciales válidas, se inicia la sesión
    $_SESSION['name'] = $name;
    // Redirigir al usuario a la página de productos
    header('Location: productos.php');
    exit();
  } else {
    // Credenciales inválidas, se muestra un mensaje de error
    $error = "Nombre de usuario o contraseña incorrectos.";
  }
}elseif(isset($_GET['logout'])){
    session_destroy();
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <li role="presentation"><a href="login.php">INICIAR SESSION</a></li>
                    <li role="presentation"><a href="registrarse.php">REGISTRASE</a></li>
                    

                    
                </ul>
            </div>
            </div>
            </div>


  <h1>Iniciar sesión</h1>
  <?php if (isset($error)) { ?>
    <p><?php echo $error; ?></p>
  <?php } ?>
    <form action="login.php" method="POST">
        <div>
        <label for="name">Nombre de usuario:</label>
        <input type="text" name="name" id="name">
        </div>
        <div>
        <label for="contrasenia">Contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia">
        </div>
        <div>
        <input type="submit" value="Iniciar sesión">
        </div>
    </form>
</body>
</html>


