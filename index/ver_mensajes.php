<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Instant - Bootstrap Personal Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

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

  
    <div class="container">
        <div class="row centered mt mb">
            <h1>VIEW MESSAGE</h1>
            <?php
            include "clases/clsMensajes.php";
            $ob = new clsMensajes($_SERVER);
            $ob->mostrar_mensajes($_GET['id_producto']);
            ?>
        </div>
    </div>
    <div id="copyrights">
        <div class="container">
            <p>
            </p>
            <div class="credits">

            </div>
        </div>
    </div>

    <script languague="javascript">
        function ocultar() {

            div = document.getElementById('alerta');
            div.style.display = 'none';

        }
    </script>
    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/php-mail-form/validate.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>
    <script src="js/imagen.js"></script>

</body>

</html>