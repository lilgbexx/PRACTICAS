<?php
include 'Configuracion.php';
session_start();










if (isset($_SESSION["name"])) {
    if ($_SESSION["name"] == "admin") {
        $username = $_SESSION['name'];
        ?>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <head>
        <title>Carrito de Compras</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACWW4Jea8SwkT9sqsfgfQGqGTxrfmibdc&callback=initMap"></script>
    </head>
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
    
    <div class="contact">
          <h1 class="titulillo">LOCALIZANOS AQUI</h1>
          <h4>
              <a href="https://www.google.com/maps/dir//UCAM+Universidad+Cat%C3%B3lica+San+Antonio+de+Murcia,+Av.+de+los+Jer%C3%B3nimos,+135,+30107+Guadalupe+de+Maciascoque,+Murcia/@37.9911115,-1.1870928,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd6380384e21bc4d:0x6f8f4ea9f358e209!2m2!1d-1.1851961!2d37.9914114">*</a>
          </h4>
    </div>
    
    
    </div>
    </div>
    </div>
    <div id="map" style="height: 50%; width: 100%; text-align: center"></div>
    </body>
    </html>
    
    <?php
        
  
    } else {
        $username = $_SESSION['name'];
        ?>
    
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
    <head>
        <title>Carrito de Compras</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACWW4Jea8SwkT9sqsfgfQGqGTxrfmibdc&callback=initMap"></script>
    </head>
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
    
    <div class="contact">
          <h1 class="titulillo">LOCALIZANOS AQUI</h1>
          <h4>
              <a href="https://www.google.com/maps/dir//UCAM+Universidad+Cat%C3%B3lica+San+Antonio+de+Murcia,+Av.+de+los+Jer%C3%B3nimos,+135,+30107+Guadalupe+de+Maciascoque,+Murcia/@37.9911115,-1.1870928,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd6380384e21bc4d:0x6f8f4ea9f358e209!2m2!1d-1.1851961!2d37.9914114">*</a>
          </h4>
    </div>
    
    
    </div>
    </div>
    </div>
    <div id="map" style="height: 50%; width: 100%; text-align: center"></div>
    </body>
    </html>
    
    <?php
  
    }
    
} else {
    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
    <head>
        <title>Carrito de Compras</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
       
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyACWW4Jea8SwkT9sqsfgfQGqGTxrfmibdc&callback=initMap"></script>
    </head>
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
    
    <div class="contact">
          <h1 class="titulillo">LOCALIZANOS AQUI</h1>
          <h4>
              <a href="https://www.google.com/maps/dir//UCAM+Universidad+Cat%C3%B3lica+San+Antonio+de+Murcia,+Av.+de+los+Jer%C3%B3nimos,+135,+30107+Guadalupe+de+Maciascoque,+Murcia/@37.9911115,-1.1870928,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0xd6380384e21bc4d:0x6f8f4ea9f358e209!2m2!1d-1.1851961!2d37.9914114">*</a>
          </h4>
    </div>
    
    
    </div>
    </div>
    </div>
    <div id="map" style="height: 50%; width: 100%; text-align: center"></div>
    </body>
    </html>
    
<?php
    
}



?>



<script>
    function initMap() {
  var map;
  map = new google.maps.Map(document.getElementById('map'), {
    center: { lat: 37.99229388769356, lng: -1.1305549432182505 },
    zoom: 13
  });

  var marker3 = new google.maps.Marker({
    position: { lat: 37.9910911, lng: -1.1847342 },
    map: map,
    title: 'UCAM'
  });

}
window.onload = function() {
  initMap();
} 
</script>
