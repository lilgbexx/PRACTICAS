<?php
if (isset($_SESSION["usuario"])) {
    if ($_SESSION["usuario"] == "admin") {
        require_once("vista/base3.php");
  
    } else {
        require_once("vista/base2.php");
  
    }
    
} else {
    require_once("vista/base.php");
    
}

?>
<div>
    <h1 style="color: white; text-align: center;">$GSCOMPANY$ EST. 2023</h1>
    <h2 style="color: white; text-align: center;">BASED IN MURCIA</h2>
    <h3 style="color: white; text-align: center;" id="testabout">
      Simon y Gines eran dos amigos de la universidad que siempre habían compartido una pasión por la moda urbana y la
      cultura callejera. Ambos estudiaron diseño de moda y soñaban con crear su propia marca de ropa algún día.

      Después de trabajar durante algunos años en la industria de la moda para otras empresas, Simon y Gines
      finalmente decidieron que era hora de hacer realidad su sueño de fundar su propia marca de ropa urbana.
      Decidieron llamarla $GSCOMPANY$ y comenzaron a trabajar en su idea.

      Desde el principio, Simon y Gines sabían que querían crear algo único y diferente a lo que ya estaba en el
      mercado. Querían ofrecer prendas de alta calidad que fueran accesibles para todos, pero que al mismo tiempo
      fueran lo suficientemente exclusivas como para destacar en la multitud. <br><br>

      Para lograrlo, Simon y Gines pasaron meses investigando y buscando inspiración en las últimas tendencias de la
      moda urbana. Trabajaron duro para desarrollar una colección de ropa que reflejara su visión y su estilo
      personal.

      Después de varias semanas de trabajo arduo, Simon y Gines presentaron su primera colección de ropa urbana bajo
      la marca $GSCOMPANY$. La colección se enfocaba en la fusión de estilos de moda urbana con elementos
      tradicionales de la cultura de Murcia.

      Las prendas de la colección estaban hechas con materiales de alta calidad y con diseños que reflejaban la
      creatividad y el talento de Simon y Gines. La marca rápidamente comenzó a llamar la atención de los consumidores
      locales y se ganó una gran cantidad de seguidores en las redes sociales.

      Hoy en día, $GSCOMPANY$ es una marca de ropa urbana en pleno crecimiento que se ha expandido más allá de Murcia
      y ha comenzado a hacerse un nombre en la escena nacional. La marca es el resultado del arduo trabajo y la
      dedicación de Simon y Gines, que han logrado crear algo verdaderamente único y especial en el mundo de la moda
      urbana.
    </h3>
  </div>

<div>
  <div class="recomendaciones">

    <div class="card">
      <img src="images/logo.png" alt="Avatar" style="width:100%">
      <div class="containerr">
      
      </div>
    </div>
    <div class="card">
      <img src="images/logo.png" alt="Avatar" style="width:100%">
      <div class="containerr">
        
      </div>
    </div>
    <div class="card">
      <img src="images/logo.png" alt="Avatar" style="width:100%">
      <div class="containerr">
       
      </div>
    </div>
    
    <div class="card">
      <img src="images/logo.png" alt="Avatar" style="width:100%">
      <div class="containerr">
        
      </div>
    </div>

  </div>
</div>

<div id="footer">
       
    <img src="images/logo.png" alt="Tu foto" id="imagenelogo">
  
    <div id="footer-right">
      <h1>DERECHOS RESERVADOS © 2023 </h1>
    </div>
  
     <img src="images/logo.png" alt="Tu foto" id="imagenelogo">

</div>