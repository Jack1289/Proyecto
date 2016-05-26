<!DOCTYPE html>
<html lang="en">
  <head>
	  <style>



	  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Iniciar Sesi&oacute;n</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/login.css">
      
    <!--<script src="https://use.fontawesome.com/fe55c3cf21.js"></script>-->
    
     <?php //require_once('../html/header-comun.html'); ?>

  </head>
  <body background="../img/h.jpg">



    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="../index.html">Cinemas Delicias</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

						<li>
							<a href="php/pelicula.php">CARTELERA</a>
						</li>

					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div>
						<button type="submit" class = "btn btn-default" ><i class="fa fa-search" aria-hidden="true"></i>
							Submit
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="php/iniciar_sesion.php">Iniciar Sesi&oacute;n</a>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
</div>
    <center>
	<div  style="width: 10%; color: white; margin-top: 12%;" align="center">
	  <form id="formularioSesion" method="POST" action="validar_sesion.php">
	    
	    
            <label for="usuario">Usuario:</label>
            <input type="text" class="form-control" id="usuario" name="usuario" style="text-align: center; text-transform: uppercase;" maxlength="12" autofocus="true"  />
	    <br> 
    
            <label for="contrasena">Contrase&ntilde;a:</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena" style="text-align: center;" maxlength="12" />
	    <br><br>
	    
	    <button type="submit" class="btn btn-outline btn-success"><i class="fa fa-sign-in"></i> Ingresar</button>
	  </form>
        </div>
    </center>
      <script src="https://use.fontawesome.com/fe55c3cf21.js"></script>
      <?php //require_once('../html/footer-comun.html'); ?>

    
  </body>
</html>