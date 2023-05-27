
<?php
// Verificar si se envió el formulario de registro
if (isset($_POST['submit'])) {
    
    
    $id	= $_POST['id'];
    $name = $_POST['name'];	
    $email = $_POST['email'];	
    $phone = $_POST['phone'];
    $address = $_POST['address'];	
    $created	 = $_POST['created'];
    $modified	 = $_POST['modified'];
    $status	 = $_POST['status'];
    $contrasenia	 = $_POST['contrasenia'];
        
	



    // Conexión a la base de datos (reemplaza con tus propios datos de conexión)
    $dbHost = 'localhost:3307';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'carrito';

    // Crear una conexión
    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // Verificar si hay errores de conexión
    if ($conn->connect_error) {
        die('Error de conexión: ' . $conn->connect_error);
    }

   $sql = "INSERT INTO clientes (id, name, email, phone, address, created, modified, status, contrasenia) VALUES ('$id', '$name', '$email', '$phone', '$address', '$created', '$modified', '$status', '$contrasenia')";

    if ($conn->query($sql) === TRUE) {
      header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
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

                         
                <li role="presentation" class="active"><a href="productos.php">$GSCOMPANY$</a></li>
                <li role="presentation"><a href="about.php">ABOUT</a></li>
                    <li role="presentation"><a href="contact.php">CONTACT</a></li>
                    <li role="presentation"><a href="formulario.php">FORMULARIO</a></li>
                    <li role="presentation"><a href="registrarse.php">REGISTRASE</a></li>
                    <li role="presentation"><a href="login.php">INICIAR SESSION</a></li>
                    

                    
                </ul>
            </div>
            </div>
            </div>
    <h1>Registrarse</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="id">id:</label>
            <input type="text" name="id" id="id" >
        </div>
        <div>
            <label for="name">Nombre de usuario:</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Correo electrónico:</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="phone">Telefono:</label>
            <input type="text" name="phone" id="phone">
        </div>
        <div>
            <label for="address">Direccion:</label>
            <input type="text" name="address" id="address">
        </div>
        <div>
            <label for="created">Creado:</label>
            <input type="text" name="created" id="created">
        </div>
        <div>
            <label for="modified">Modificado:</label>
            <input type="date" name="modified" id="modified">
        </div>
        <div>
            <label for="status">Estado:</label>
            <input type="date" name="status" id="status">
        </div>
        <div>
            <label for="contrasenia">Contraseña:</label>
            <input type="password" name="contrasenia" id="contrasenia">
        </div>
        <div>
            <input type="submit" name="submit" value="Registrarse">
        </div>
    </form>
</body>
</html>

