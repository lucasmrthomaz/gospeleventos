<!DOCTYPE html>
<html>

<head>
  <meta charset='utf-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
  <title>Gospel Eventos</title>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
  <script src='js/main.js'></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d">
  </link>

  <!-- CSS do Slider -->
<link href="css/custom.css" rel="stylesheet">

</head>
<body>
<?php include_once('navbar.php'); ?>

<!-- Começo do Slider -->
<div id="carouselFull" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
           <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
           <li data-target="#carouselIndicators" data-slide-to="1"></li>
           <li data-target="#carouselIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
           <div class="carousel-item active">
               <img class="d-block" src="img/s1.jpg" alt="First slide">
               <div class="carousel-caption d-md-block">
                   <h3>Seja Bem-vindo ao Gospel Eventos</h3>
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer felis neque, suscipit eget dolor quis, accumsan imperdiet elit. Praesent quis mauris</p>
               </div>
           </div>
           <div class="carousel-item">
               <img class="d-block" src="img/s2.jpg" alt="Second slide">
               <div class="carousel-caption d-md-block">
                   <h3>Aqui você encontra eventos e muito mais!</h3>
                   <p>Nullam at elementum felis, at sodales diam. In a lectus nisl. Maecenas sodales commodo sollicitudin. Sed nisi nisl, laoreet eu erat vel, porttitor scelerisque</p>
               </div>
           </div>
           <div class="carousel-item">
               <img class="d-block" src="img/s3.jpg" alt="Third slide">
               <div class="carousel-caption d-md-block">
                   <h3>Compra de ingressos e reserva online</h3>
                   <p>Nam scelerisque molestie cursus. Ut scelerisque turpis iaculis erat feugiat, eget tristique risus luctus. Quisque non est dignissim, rhoncus nisi a, fermentum</p>
               </div>
           </div>
       </div>
       <a class="carousel-control-prev" href="#carouselFull" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselFull" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
       </a>
   </div>
   <!-- Fim do Slider--> 

  <div class="jumbotron">
    <h1 class="display-4">Olá, seja bem-vindo!</h1>
    <p class="lead">Você está no melhor site de eventos gospel do Brasil.
      </br> Aqui você econtrará ingressos, eventos e muito mais!
    </p>
    <hr class="my-4">
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="eventos.php" role="button">Conferir eventos</a>
    </p>
  </div>

  <div class="container">

<?php /*  
    <!--   -->
    <div class="well">
      <h1><b>Item 1</b></h1>
    </div>
    <div class="row">
      
    </div> 
    
    <!--    -->

    <!--      -->
    <div class="well">
      <h1><b>Item 2</b></h1>
    </div>
    <div class="row">
      
    </div>
    <!--  
        -->
?>

  </div>
*/ 
  ?>



</body>

</html>