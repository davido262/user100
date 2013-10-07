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
    <title>Mudle - Calificaciones</title>
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
        <div>
          <section>
            <article>
              <h1>Descripcion Del Curso</h1>
              <div>
                <p>CCxxx Nombre Del Curso</p>
                <p>Este curso esta para el,....</p>
              </div>
              <table class="datosCurso">
                <thead>
                  <tr>
                    <th>Item select</th>
                    <th>Forma De Evaluación</th>
                    <th>Porcentaje</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input id="checkFormaDeEvaluacion" name="checkEvaluacion" type="checkbox" /></td>
                    <td><input class="rubro" id="formaDeEvaluacion" name="formaEvaluacion" type="text" disabled="disabled" /></td>
                    <td><input class="rubro" id="porcentajeDeEvaluacion" name="porcentajeEvaluacion" type="text" disabled="disabled" /></td>
                  </tr>
                  <tr>
                    <td><input id="checkFormaDeEvaluacion" name="checkEvaluacion" type="checkbox" /></td>
                    <td><input class="rubro" id="formaDeEvaluacion" name="formaEvaluacion" type="text" disabled="disabled" /></td>
                    <td><input class="rubro" id="porcentajeDeEvaluacion" name="porcentajeEvaluacion" type="text" disabled="disabled" /></td>
                  </tr>
                  <tr>
                    <td><input id="checkFormaDeEvaluacion" name="checkEvaluacion" type="checkbox" checked="checked"/></td>
                    <td><input class="rubro" id="formaDeEvaluacion" name="formaEvaluacion" type="text" /></td>
                    <td><input class="rubro" id="porcentajeDeEvaluacion" name="porcentajeEvaluacion" type="text" /></td>
                  </tr>
                </tbody>
              </table>
              <br />
              <form id="opcionesCurso">
                <fieldset>
                  <div id="contenedorButton">
                    <input class="button" id="eliminarRubro" name="eliminarRubro" type="button" value="Eliminar" />
                    <input class="button" id="agregarRubro" name="agregarRubro" type="button" value="Agregar" />
                    <input class="button" id="guardarRubro" name="guardarRubro" type="button" value="Guardar" />
                  </div>
                </fieldset>
              </form>
            </article>
          </section>
        </div>
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
