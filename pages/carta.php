<!DOCTYPE html>
<html>
	<head lang="ES">
		<meta charset="UTF-8"/>
		<title>Carta · La Tapería</title>
		<script type="text/javascript" src="/LaTaperia/lib/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="/LaTaperia/lib/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/lib/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/styles.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/carta.css"></link>
		<script type="text/javascript" src="/LaTaperia/js/menu.js"></script>
	</head>
	<body>
		<div id="nav-main">
			<a href="/LaTaperia" class="nav-main-e1"><img src="../img/logo.png"></a>
			<a class="nav-main-e2 active">CARTA</a>
			<a href="/LaTaperia/pages/bodega.php" class="nav-main-e3">BODEGA</a>
			<a href="/LaTaperia/pages/eventos.php" class="nav-main-e4">EVENTOS</a>
			<a href="/LaTaperia/pages/reservas.php" class="nav-main-e5">RESERVAS</a>
			<a href="/LaTaperia/pages/contacto.php" class="nav-main-e6">CONTACTO</a>
			<div id="nav-hidden-min" class="glyphicon glyphicon-menu-hamburger"></div>
		</div>
		<div id="content">
			<div id="comida">
				<?php
					include '../php/config.php';

					$qryTC="SELECT * FROM tipocomida";
					$resTC=mysqli_query($con, $qryTC);

					while($rowTC=mysqli_fetch_array($resTC)){
						echo '<div id="tipo" class="tit-main">'.$rowTC["nombre"].'</div>';

						$qry="SELECT * FROM carta WHERE tipo=".$rowTC["id"];
						$res=mysqli_query($con, $qry);

						if($rowTC["id"]==1){
							echo '<div class="content-comidas multiprec">';
						}
						else if($row["tipo"]==2){
							echo '<div class="content-comidas multiprec">';
						}
						else{
							echo '<div class="content-comidas">';
						}
						while($row=mysqli_fetch_array($res)){
							echo 	'<div class="com-tipo">
										<span class="img-comida"><img src="/img/carta/'.$row["imagen"].'"></span>
										<span class="texto-com">';

							if($row["tipo"]==1){
								echo 		'<div class="tit-comida">'.$row["nombre"].'</div>
										</span>
										<span class="precios">
											<span class="prec-comida prec1">
												<div class="tit-multiprec">Tapa</div>
												<div class="prec-multiprec">'.$row["prec1"].' €</div>
											</span>
											<span class="prec-comida prec2">
												<div class="tit-multiprec">½ Ración</div>
												<div class="prec-multiprec">'.$row["prec2"].' €</div>
											</span>
											<span class="prec-comida prec3">
												<div class="tit-multiprec">Ración</div>
												<div class="prec-multiprec">'.$row["prec3"].' €</div>
											</span>
										</span>';
							}
							else if($row["tipo"]==2){
								echo 		'<div class="tit-comida">'.$row["nombre"].'</div>
											 <div class="desc-comida">'.$row["descripcion"].'</div>
										</span>
										<span class="precios">
											<span class="prec-comida prec1">
												<div class="tit-multiprec">Tapa</div>
												<div class="prec-multiprec">'.$row["prec1"].' €</div>
											</span>
											<span class="prec-comida prec2">
												<div class="tit-multiprec">½ Ración</div>
												<div class="prec-multiprec">'.$row["prec2"].' €</div>
											</span>
											<span class="prec-comida prec3">
												<div class="tit-multiprec">Ración</div>
												<div class="prec-multiprec">'.$row["prec3"].' €</div>
											</span>
										</span>';
							}
							else{
								echo 		'<div class="tit-comida">'.$row["nombre"].'</div>
											<div class="desc-comida">'.$row["descripcion"].'</div>
										</span>
										<span class="prec-comida">'.$row["prec1"].' €</span>';
							}

							echo 	'</div>';
						}

						echo '</div>';
					}
				?>
			</div>
		</div>
	</body>
</html>