
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>products</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

  <!-- Static navbar -->
  <div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/index/shop.php">RETURN</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/index/shop.php">Shop</a></li>
          <li class="active"><a href="/index/productos.php">My products</a></li>
          <li><a href="/index/works.php" class="smoothscroll">Administration</a></li>
          <li style="margin-left: 200px"><a href="/Login/login.php" class="smoothscroll">Logout</a></li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>


  <div id="aboutwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <h1>Aqui podra agregar y administrar sus productos</h1>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>

  <form class="contact-form" method="POST" action="agregar.php">

    <div class="form-send">
      <button type="submit" class="btn btn-large">New Product</button>
    </div>
  </form>

  <section id="works"></section>
  <div class="container">
    <div class="row centered mt mb" style="padding-right: 30px; padding-left: 30px">

      <h1>MY PRODUCTS</h1>
      <br>
  
      <?php
     require "clases/clsProductos.php";
     $ob = new clsProductos($_SERVER);
     $ob->extraer_mis_productos($_SESSION['id_usuario']);
      
     ?>
    </div>
  </div>
  </div>


  <div id="copyrights">
    <div class="container">

      <div class="credits">

      </div>
    </div>

  <!-- / copyrights -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/php-mail-form/validate.js"></script>
  <script src="lib/easing/easing.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>

</html>