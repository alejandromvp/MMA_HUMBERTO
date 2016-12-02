
<!DOCTYPE html>
<?php require_once('./EjemploArchivo.php'); ?>
<html lan="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../../resource/css/navbar.css" media="screen">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" href="../../custom/style.css" media="screen" title="no title">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../resource/css/style.css" />
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="../../js/toggle_navbar.js" type="text/javascript"></script>
    <!--  libreria fancynox       -->
      <script type="text/javascript" src="../../resource/fancybox/lib/jquery-1.10.1.min.js"></script>
      <script type="text/javascript" src="../../resource/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
      <script type="text/javascript" src="../../resource/fancybox/source/jquery.fancybox.js?v=2.1.5"></script>
      <link rel="stylesheet" type="text/css" href="../../resource/fancybox/source/jquery.fancybox.css?v=2.1.5" media="screen" /> 
    <!--  fin importe fancybox      -->
    <title>Contacto</title>
    <style>
      a{text-decoration:none;}
      h2 a{color:#428bca;}
      h2 a:hover{color:#428bca;}
      p a{color:#4183D7;}
    </style>
  </head>
  <body>
    <div class="container">
          <div id="titulo">
              <h1 class="titulo_h1">
                 <a href="index.html"><img src="../../resource/img/logo_academia_sin_fondo.png" alt="Titulo de mi pagina web"  width="100px" height="100px" /></a>ACADEMIA VULCÁO DO FOGO
               </h1>
        </div>
    </div>

        <nav>
  				<div class="container nav-bg">
  					<div class="row">

  						<div class="nav-menubtn">
  							<span id="display-menu" class="icon-th-menu"></span>
  						</div>

  						<div class="col-sm-12 pull-right nav-links min-hide">
  							<ul>
  								<li><a href="../../index.html">INICIO</a></li>
  								<li><a href="../../galeria.html">GALERIA</a></li>
  								<li><a href="../../noticias.html">NOTICIAS</a></li>
  								<li><a href="../../contacto.html">CONTACTO</a></li>
  							</ul>
  						</div>

  					</div>
  				</div>
  			</nav>
  			<div class="nav-margin"></div> <!-- Espaciador de navbar -->

<div class="container">
     <div class="row">
        <div class="col-lg-10">
            <h1>Panamericano de mma se suspende</h1>
            <!-- Author -->
            <p class="lead">
                por <a href="#">Vucao Do Fogo</a>
            </p>
            <p><span class="glyphicon glyphicon-time"></span> Posteado el 20 de agosto, 2016 a las 10:00 PM</p>
            <hr>
            <!-- Preview Image -->
            <img class="img-responsive" src="http://placehold.it/900x300" alt="">
            <hr>

            <!-- Post Content -->
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corpoeligendi eos magni recusandae laborum minus inventore?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>

            <hr>

            <!-- Blog Comments -->

            <!-- Comments Form -->
            <div class="well">
                <h4>Deja tu comentario:</h4>

                <form role="form" action="" method="POST">
                    <div class="form-group">
                    	<input type="hidden" name="nombre_archivo_txt" value="noticia_1.txt">
                    	<input type="text" name="usuario" class="form-control" placeholder="Nombre">
                        <textarea class="form-control" rows="3" name="comentario" placeholder="Comentario"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="btnGuardar" Value="Postear">Postear</button>
                </form>

            </div>

            <hr>
            <h1>COMENTARIOS</h1>
           
            <!--0000000000000000000000000000000000 COMENTARIOS 000000000000000000000000000 -->
            <?php
            	$dirArchivo = "Archivos/noticia_1.txt";
            	$instruccionQueHara = "r";
            	$nombreDirectorio = "Archivos";
            	$instruccion = "a";
            	@creandoDirectorio($nombreDirectorio); 
				creandoArchivo2($dirArchivo, $instruccion); 
				mostrandoArchivos($dirArchivo, $instruccionQueHara);
            ?>

		 </div> <!-- fin col-lg-10 -->
     </div><!-- fin row -->
</div> <!-- fin container -->
  
<footer class="footer">
    <div class="context_footer">
        <div class="col-md-12">
              <div class="col-md-4">
                    <p>Academia de Jiu Jitsu Humberto Fuentes</p>
              </div>
              <div class="col-md-4">
                    <p> © 2016 Desarrollado por Informatica Soluciones</p>
              </div>
              <div class="col-md-4 lista_footer">
                    <ul>
                    <li class="li_footer"><a href="#">Inicio</a></li>
                    <li class="li_footer"><a href="#">Galeria</a></li>
                    <li class="li_footer"><a href="#">Noticias</a></li>
                    <li class="li_footer"><a href="contacto.html">Contacto</a></li>
                  </ul>
              </div>
        </div> <!-- cierre col-md-12 -->
      </div><!-- cierre content_footer -->
    </footer>
  </body>
</html>
