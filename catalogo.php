<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Catalogo</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/catalogo.css">
</head>
<body>
	<div class="container">
		<div class="catalogo_titulo">
			<h1 align="center" style="font-weight: 200;">Productos</h1>
			<div class="row center">
				<h5 style="font-weight: 300;" class="col s12">
					Tenemos la mejor calidad en productos y grabados. Nuestro trabajo garantiza tu total satisfacción
				</h5>
			</div>
		</div>
		<hr><br>
		<div class="catalogo_line"></div>
		<div class="catalogo_contenido">
			<div class="row">
				<div class="col s12 contenido_div">
					<?php catalogo_contenido(); ?>
				</div>
				<div class="col s6 gradilla_1 gradillas" style="display:none;" on="no">
					<p>
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1 Gradilla 1
					</p>
				</div>
				<div class="col s6 gradilla_2 gradillas" style="display:none;" on="no">
					<p>
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2 Gradilla 2
					</p>
				</div>
				<div class="col s6 gradilla_3 gradillas" style="display:none;" on="no">
					<p>
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3 Gradilla 3
					</p>
				</div>
			</div>
			
		</div>

	</div>

	
	<!-- Los puros fakin scripts -->
	<script src="js/jquery.js"></script>
	<script src="js/catalogo.js"></script>
</body>
</html>

<?php  
	function catalogo_contenido(){
		?> 
		<div class="row">
			<div class="col s4 catalogo_contenido_texto" align="right">
				<div class="catalogo_contenido_titulo">
					Anillos de graduación
				</div>
				<div class="catalogo_contenido_descripcion">
					Tenemos el anillo perfecto para ti. Conoce nuestra variedad.
				</div>
				<hr>
			</div>
			<div class="col s4 izquierda" align="center">
				<img src="img/catalogo/1.png" class="circle catalogo_img" data-id="1">
			</div>
		</div>
		<!-- ******************************************************* -->
		<div class="row">
			<div class="col s4 offset-s4 derecha" align="center">
				<img src="img/catalogo/2.png" class="circle catalogo_img" data-id="2">
			</div>
			<div class="col s4 catalogo_contenido_texto" align="left">
				<div class="catalogo_contenido_titulo">
					Artículos promocionales
				</div>
				<div class="catalogo_contenido_descripcion">
					Descubre nuestra nueva línea de productos promocionales.
				</div>
				<hr>
			</div>
		</div>
		<!-- ******************************************************* -->
		<div class="row">
			<div class="col s4 catalogo_contenido_texto" align="right">
				<div class="catalogo_contenido_titulo">
					Paquetes de graduación
				</div>
				<div class="catalogo_contenido_descripcion">
					Ponemos a tus órdenes nuestra amplia gama de productos.
				</div>
				<hr>
			</div>
			<div class="col s4 izquierda" align="center">
				<img src="img/catalogo/3.png" class="circle catalogo_img" data-id="3">
			</div>
		</div>
		<?php
	}
?>