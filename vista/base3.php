




<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div> <!-- .site-mobile-menu -->


  <div class="site-navbar-wrap">
    <div class="site-navbar-top">
      <div class="container py-3">
        <div class="row align-items-center">
          <div class="col-6">
            <div class="d-flex mr-auto">
              <a href="#" class="d-flex align-items-center mr-4">
                <span class="icon-envelope mr-2"></span>
                <span class="d-none d-md-inline-block">$GSCOMPANY$@gmail.com</span>
              </a>
              <a href="#" class="d-flex align-items-center mr-auto">
                <span class="icon-phone mr-2"></span>
                <span class="d-none d-md-inline-block">+34 674421693 / +34 671179342</span>
              </a>
              <img src="images/logo.png" alt="Tu foto" id="imagenelogo">

            </div>
          </div>
          <div class="col-6 text-right">
            <div class="mr-auto">
              <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
              <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-navbar site-navbar-target js-sticky-header">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-2">
            <h1 class="my-0 site-logo"><a href="inicio.php?controlador=home">$GSCOMPANY$</a></h1>
          </div>
          <div class="col-10">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">
                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3">
                  <a href="#" class="site-menu-toggle js-menu-toggle text-white">
                    <span class="icon-menu h3"></span>
                  </a>
                </div>




                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                  
                  
                  
                  <li class="has-children">
                  <a href="#about" ><?php echo($_SESSION["usuario"]);?></a>
                      <ul class="dropdown arrow-top">
                      <li><a href="inicio.php?controlador=datos&action=cerrar" class="nav-link">DESCONECTAR</a></li>
                      </ul>
                  </li>
                  <li><a href="inicio.php?controlador=shop" class="nav-link">SHOP</a></li>
                  <li><a href="inicio.php?controlador=about" class="nav-link">ABOUT</a></li>
                  <li><a href="inicio.php?controlador=contact" class="nav-link">CONTACT</a></li>
                  <li><a href="inicio.php?controlador=cart" class="nav-link">CART</a></li>
                  
                  
                 </ul>



              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="hero" style="background-image: url('images/hero_1.jpg');"></div>


