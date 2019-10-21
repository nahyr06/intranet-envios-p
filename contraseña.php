
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login user password</title>

  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/estilos.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Mukta&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
  <link rel="icon" type="image/vnd.microsoft.icon" href="images/package.ico" sizes="16x16 32x32">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/4f4d3f6091.js" crossorigin="anonymous"></script>
</head>

<body>
  
  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.html"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <a class="nav-link" href="index.html"><i class="fas fa-home"></i>Inicio</a></li>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-truck"></i>Envíos</a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                    <a class="dropdown-item" href="Envios Nacionales.html"><i class="fas fa-box-open"></i>Nacionales</a>
                    <a class="dropdown-item" href="Envios Internacionales.html"><i class="fas fa-box-open"></i>Internacionales</a>
                  <a class="dropdown-item" href="cot_fedexyestafeta.html"><i class="fas fa-calculator"></i>Calcular</a>
                  <a class="dropdown-item" href="Zonas_Fedex.html"><i class="fab fa-fedex"></i>Zonas Fedex</a>
                </div>
              </li>
          <li class="nav-item">
            <a class="nav-link" href="contraseñas.php"><i class="fas fa-key"></i>Contraseñas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html"><i class="far fa-id-badge"></i>Directorio</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>



<!--login para usuario-->


  <div class="container">
      <div class="row">
          <h2 class="subt"><i class="fas fa-user-lock"></i>Contraseñas<img src="" alt=""></h2>
      </div>
  </div>

<br>

<br>
<br>
<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->
  





      <!-- Icon -->
      <div class="fadeIn first">
        <i class="far fa-user"></i>
      </div>
  
      <!-- Login Form -->
      <form method="POST" action="validar.php">
        <input type="text" id="login" name="nnombre" placeholder="Usuario">
        <input type="password" id="password" class="fadeIn third" name="npassword" placeholder="Contraseña">
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>
  
      <!-- Remind Passowrd -->
      <div id="formFooter">
        <a class="underlineHover" href="#">Olvidaste tu Password?</a>
      </div>
  
    </div>
  </div>




      <br>

 
  
  
  <!-- /.container -->

  <!-- Footer -->
 

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  

</body>

</html>
