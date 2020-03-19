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
        <a class="navbar-brand" href="/index/shop.php?id_registrado=<?php echo $_GET['id_registrado']; ?>">RETURN</a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="/index/shop.php?id_registrado=<?php echo $_GET['id_registrado']; ?>">Shop</a></li>
          <li class="active"><a href="/index/productos.php?id_registrado=<?php echo $_GET['id_registrado']; ?>">My products</a></li>
          <li><a href="/index/works.php?id_registrado=<?php echo $_GET['id_registrado']; ?>" class="smoothscroll">Works</a></li>
          <li><a href="/index/contact.php?id_registrado=<?php echo $_GET['id_registrado']; ?>" class="smoothscroll">Contact</a></li>
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

  <form class="contact-form" method="POST" action="agregar.php?id_registrado=<?php echo $_GET['id_registrado']; ?>">

    <div class="form-send">
      <button type="submit" class="btn btn-large">New Product</button>
    </div>
  </form>

  <section id="works"></section>
  <div class="container">
    <div class="row centered mt mb">

      <h1>MY PRODUCTS</h1>
      <?php
      $conn = mysqli_connect("database", "root", "", "DBTienda");

      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $id = $_GET['id_registrado'];
      $consulta = "SELECT id, nombre, descripcion_breve, url_imagen FROM productos WHERE id_creador='$id'";
      $ejecutar = mysqli_query($conn, $consulta);

      $i = 0;
      while ($fila = mysqli_fetch_array($ejecutar)) {
        $id = $fila['id'];
        $nombre = $fila['nombre'];
        $descrip_b = $fila['descripcion_breve'];
        $url_img = str_replace("/app", " ", $fila['url_imagen']);

        $i++;
      ?>
        <table>
          <tr style="align-content: center">
            <td>
              <div class="col-lg-12 gallery">

                <a href=""><img style="width: 300px; height: 300px" class="img-responsive" id="imgSalida" width="50%" height="50%" src="<?php echo $url_img; ?>" /></a>
              </div>
            </td>
            <td>
              <div class="form-group">
                <label><h4>Nombre del producto: </h4><?php echo $nombre; ?> </label>
                <br>
                <label><h4>Informacion breve del producto: </h4><?php echo $descrip_b; ?> </label>
              </div>
            </td>
            <td>
              <form class="contact-form" method="POST" action="">

                <button style="background-color: #02B6ED" type="submit" class="btn btn-large">EDIT PRODUCT</button>
                <br>
                <br>
                <button style="background-color: #02B6ED" type="submit" class="btn btn-large">VIEW MESSAGES</button>

              </form>
            </td>
          </tr>
        </table>

        <br>


      <?php
      }
      ?>
    </div>
  </div>



  <div id="copyrights">
    <div class="container">

      <div class="credits">

      </div>
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