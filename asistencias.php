 <?php
		include_once("constantes.php")
 ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Mudle - Asistencias</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="img/pluma16.png">
    <link rel="apple-touch-icon-precomposed" href="img/pluma128.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/pluma57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/pluma72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/pluma114.png" />

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="main">
      <header>
        <div class="logo">
          <img src="img/pluma64.png" /> Mudle
        </div>
        <div class="datos">
          <p>Nombre Usuario</p>
          <a href="#">Perfil</a> |
          <a href="#">Logout</a>
        </div>
        <div class="clear"></div>
      </header>

     <?php
		include_once(MENUMAESTRO)
	?>

      <article>
        <h1>Asistencias</h1>
        <table class="asistencias">
          <thead>
            <tr>
              <th rowspan="2">Codigo</th>
              <th rowspan="2">Nombre</th>
              <th rowspan="2">Carrera</th>
              <th colspan="10">Asistencia</th>
              <th rowspan="2">Total</th>
            </tr>
            <tr>
              <th>1</th>
              <th>2</th>
              <th>3</th>
              <th>4</th>
              <th>5</th>
              <th>6</th>
              <th>7</th>
              <th>8</th>
              <th>9</th>
              <th>10</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>210224667</td>
              <td>Gustavo Rodrigo Guillen Villarreal</td>
              <td>Ing. En Computacion</td>
              <td id="asistencias">Asistencias</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>|</td>
              <td class="celda-total">90%</td>
            </tr>
            <tr>
              <td>210224669</td>
              <td>David Cavazos Woo</td>
              <td>Ing. En Computacion</td>
              <td id="asistencias">Asistencias</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td class="celda-total">100%</td>
            </tr>
            <tr>
              <td>210224669</td>
              <td>Stefan Rodriguez</td>
              <td>Lic. en Informatica</td>
              <td id="asistencias">Asistencias</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td>*</td>
              <td class="celda-total">100%</td>
            </tr>
          </tbody>
        </table>
        <br />
        <br />
      </article>
    </div>

    <footer>Copyright - About us</footer>

    <!-- asdf
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    -->
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <!--
    <script>
      var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src='//www.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
    -->
  </body>
</html>
