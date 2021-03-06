<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--estilos-->
    <link rel="stylesheet" href="../css/style-usuario.css">
    <link rel="stylesheet" href="../css/ejercicios.css">
    <link rel="" href="iniciar-sesion.php">
    <title>StayFitness</title>
</head>

<body>

<!--Sección de menu-->
  <nav>
    <img src="../img/logostayfitnessblanco.png">
    <ul id="menu">
      <li><a href="usuario.php">HOME</a></li>
      <li><a href="ejercicios.php">EJERCICIOS</a></li>
      <li><a href="cerrar-sesion.php">CERRAR SESIÓN</a></li>
      <li id="w" href="">BIENVENIDO <?php 
                session_start();
                echo $_SESSION["nombre"];?>
      </li>
    </ul>
  </nav>

<!--Banner con datos de sitio-->
    <header class="banner">
        <div class="nombre">
            <h1>STAYFITNESS</h1>
        </div>    
    </header>


  
<!--Contenido de Desarrollo de seccion de ejercicios-->
<h2 style="text-align: center;">EJERCICIOS QUE DEBES REALIZAR</h2>
  <div class="layout">
    <div class="accordion">
      <div class="categoria">
        <p>EJERCICIOS PARA SUBIR DE PESO</p>
  
      </div>
      <div class="url">
        <h3>Aumento de masa corporal</h3>
        <!--Video 1-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir1'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> > 
          
        <!--Video 2-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir2'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 3-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir3'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 4-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir4'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >
        
      </div>
    </div>
  
    <div class="accordion">
      <div class="categoria">
        <p>EJERCICIOS PARA BAJAR DE PESO</p>
  
      </div>
      <div class="url">
        <h3>Cardio</h3>
        <!--Video 1-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir5'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> > 
          
        <!--Video 2-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir6'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 3-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir7'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 4-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir8'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >
        
      </div>
    </div>

    <div class="accordion">
      <div class="categoria">
        <p>EJERCICIOS PARA MANTENERTE EN TU PESO</p>
  
      </div>
      <div class="url">
        <h3>Tonificar</h3>
        <!--Video 1-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir9'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> > 
          
        <!--Video 2-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir10'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 3-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir11'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 4-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir12'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 5-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir13'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Otra subcategoria-->
        <h3>Flexibilidad</h3>
        <!--Video 1-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir15'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> > 
          
        <!--Video 2-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir16'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 3-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir17'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 4-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir18'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >

        <!--Video 5-->
        <p <?php 
          require_once("conectar.php");
          $sql= "SELECT `url` FROM `videos` WHERE `nombre` = 	'Subir19'";
          $result=mysqli_query($link,$sql);
          while($mostrar=mysqli_fetch_array($result)){
        ?>>
          <iframe width="560" height="315" src="<?php echo $mostrar['url']?>" 
          title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
          clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </p<?php } ?> >
        
      </div>
    </div>
</div>

<!--script de funcionamiento de despliegue-->
  <script>
    let answers=document.querySelectorAll(".accordion");
    answers.forEach((event)=>{
        event.addEventListener('click',()=>{
            if(event.classList.contains("active")){
                event.classList.remove("active");
            }
            else{
                event.classList.add("active");
            }
        })
    })
</script>

<!--Sección de pie de página-->
<footer id="contacto">
        <img src="../img/logostayfitnessblanco.png">
        <a href="ayuda.php"><h3 class="ayuda">AYUDA</h3></a>
        <h3>REDES SOCIALES</h3>
        <ul class="redes">
            <li><a href="https://www.instagram.com/stayfitness4/?hl=es-la" target="_blank"><img src="../img/redes-sociales/instagram.png" alt=""></a></li>
            <li><a href="https://vm.tiktok.com/ZTdU2C36b/" target="_blank"><img src="../img/redes-sociales/tiktok.png" alt=""></a></li>
        </ul>
</footer>


</body>
</html>