<?php
// initializ shopping cart class
include 'La-carta.php';
$cart = new Cart;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>View Cart - PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container {
            padding: 20px;
        }

        input[type="number"] {
            width: 20%;
        }
    </style>

</head>
</head>

<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
            <?php
                if(isset($_GET['logout'])){
                        session_destroy();
                        header('Location: login.php');
                        exit();
                    }
                    ?>
                <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="productos.php">$GSCOMPANY$</a></li>
                    <li role="presentation"><a href="about.php">ABOUT</a></li>
                    <li role="presentation"><a href="VerCarta.php">CARRITO</a></li>
                  
                    <li role="presentation"><a href="contact.php">CONTACT</a></li>
                    <li role="presentation"><a href="formulario.php">FORMULARIO</a></li>
                    <li role="presentation"><a href="?logout=true">Desconectar</a></li>
                </ul>
            </div>

            <div class="panel-body">


                <h1>Carrito de compras</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Sub total</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($cart->total_items() > 0) {
                            //get cart items from session
                            $cartItems = $cart->contents();
                            foreach ($cartItems as $item) {
                        ?>
                                <tr>
                                    <td><?php echo $item["name"]; ?></td>
                                    <td><?php echo '$' . $item["price"] . ' COP'; ?></td>
                                    <td><?php echo $item["qty"]; ?></td>
                                    <td><?php echo '$' . $item["subtotal"] . ' COP'; ?></td>
                                    <td>
                                        <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="return confirm('Confirma eliminar?')"><i class="glyphicon glyphicon-trash"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="5">
                                    <p>No has solicitado ningún producto.....</p>
                                </td>
                            <?php } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td><a href="productos.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Volver a la tienda</a></td>
                            <td colspan="2"></td>
                            <?php if ($cart->total_items() > 0) { ?>
                                <td class="text-center"><strong>Total <?php echo '$' . $cart->total() . ' COP'; ?></strong></td>
                                <td><a href="Pagos.php" class="btn btn-success btn-block">Pagos <i class="glyphicon glyphicon-menu-right"></i></a></td>
                            <?php } ?>
                        </tr>
                    </tfoot>
                </table>

            </div>
           
        </div>
        <!--Panek cierra-->

    </div>
</body>

</html>