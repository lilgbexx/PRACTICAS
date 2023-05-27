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
                    <?php
                    if(isset($_GET['logout'])){
                        session_destroy();
                        header('Location: login.php');
                        exit();
                    }
                    ?>
                    
                    <li role="presentation"><a href="about.php">ABOUT</a></li>
                    <li role="presentation"><a href="VerCarta.php">CARRITO</a></li>
                    <li role="presentation"><a href="contact.php">CONTACT</a></li>
                    <li role="presentation"><a href="formulario.php">FORMULARIO</a></li>
                    <li role="presentation"><a href="?logout=true">Desconectar</a></li>

                    
                </ul>
            </div>

            <div class="panel-body">
                <h1>Tienda de Productos</h1>
                
                <div id="products" class="row list-group">
                    <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM productos ORDER BY id DESC LIMIT 10");
                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                    ?>
                            <div class="item col-lg-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                                        <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="lead"><?php echo '$' . $row["price"] . ' COP'; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Enviar al Carrito</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <p>Producto(s) no existe.....</p>
                    <?php } ?>
                </div>
            </div>
        </div>
       
        <!--Panek cierra-->

    </div>
</body>

</html>
    <?php
} else {
    // El usuario no ha iniciado sesión, redirigir a la página de login
    ?>
    <!DOCTYPE html>
<html lang="es">

<head>
    <title>Carrito de Compras</title>
    <meta charset="utf-8">
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

                
                    <li role="presentation" class="active"><a href="productos.php">$GSCOMPANY$</a></li>
                    <?php
                    if(isset($_GET['logout'])){
                        session_destroy();
                        header('Location: login.php');
                        exit();
                    }
                    ?>
                    
                           
                
                <li role="presentation"><a href="about.php">ABOUT</a></li>
                    <li role="presentation"><a href="contact.php">CONTACT</a></li>
                    <li role="presentation"><a href="formulario.php">FORMULARIO</a></li>
                    <li role="presentation"><a href="registrarse.php">REGISTRASE</a></li>
                    <li role="presentation"><a href="login.php">INICIAR SESSION</a></li>
                    
                    

                    
                </ul>
            </div>

            <div class="panel-body">
                <h1>Tienda de Productos</h1>
                
                <div id="products" class="row list-group">
                    <?php
                    //get rows query
                    $query = $db->query("SELECT * FROM productos ORDER BY id DESC LIMIT 10");
                    if ($query->num_rows > 0) {
                        while ($row = $query->fetch_assoc()) {
                    ?>
                            <div class="item col-lg-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                                        <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <p class="lead"><?php echo '$' . $row["price"] . ' COP'; ?></p>
                                            </div>
                                            <div class="col-md-6">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } else { ?>
                        <p>Producto(s) no existe.....</p>
                    <?php } ?>
                </div>
            </div>
        </div>
       
        <!--Panek cierra-->

    </div>
</body>

</html>
    <?php
}
?>
