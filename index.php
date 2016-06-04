<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	  <style>



	  </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cinemas Delicias 3D</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      
    <script src="https://use.fontawesome.com/fe55c3cf21.js"></script>

  </head>
  <body background="img/h.jpg">



    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<nav class="navbar navbar-default" style="" role="navigation">
				<div class="navbar-header">
					 
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						 <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button> <a class="navbar-brand" href="#">Cinemas Delicias</a>
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">

						<li>
							<a href="php/pelicula.php">Cartelera</a>
						</li>

					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control">
						</div>


						<button type="submit" class = "btn btn-default" ><i class="fa fa-search" aria-hidden="true"></i>
							Buscar
						</button>
					</form>
					<ul class="nav navbar-nav navbar-right">

						<li>
							<a href="php/administrador_menu.php">Iniciar Sesi&oacute;n</a>
						</li>
					</ul>
				</div>
				
			</nav>
		</div>
	</div>
</div>

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<!--<li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>-->
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox" align="center">
			<div class="item active">
				<a href="#" onClick="hola();"><img src="img/boruto.jpg" alt="Boruto" width="590px"></a>
		</div>
			<div class="item">
				<a href="php/boruto.php"><img src="img/xmen.jpg" alt="X:Men" width="590px"  onclick=""></a>
			</div>
			<div class="item">
				<a href="php/asientos.php"><img src="img/escuadron-fanposter-restro.jpg" alt="X:Men" width="590px"></a>
			</div>
			<div class="item">
				<a href="php/bestias.php"><img src="img/animales-fantasticos.jpg" alt="X:Men" width="590px"></a>
			</div>


			<!--
                    <div class="item">
                        <img src="img_flower.jpg" alt="Flower">
                    </div>

                    <div class="item">
                        <img src="img_flower2.jpg" alt="Flower">
                    </div>-->
		</div>
		<input type="hidden" id="idPelicula" value="0">
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


	<script src="js/index.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>