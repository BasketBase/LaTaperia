<!DOCTYPE html>
<html>
	<head lang="ES">
		<meta charset="UTF-8"/>
		<title>Bodega · La Tapería</title>
		<script type="text/javascript" src="/LaTaperia/lib/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="/LaTaperia/lib/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/lib/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/styles.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/bodega.css"></link>
		<script type="text/javascript" src="/LaTaperia/js/menu.js"></script>
	</head>
	<body>
		<div id="nav-main">
			<a href="/LaTaperia" class="nav-main-e1"><img src="../img/logo.png"></a>
			<a href="/LaTaperia/pages/carta.php" class="nav-main-e2">CARTA</a>
			<a class="nav-main-e3 active">BODEGA</a>
			<a href="/LaTaperia/pages/eventos.php" class="nav-main-e4">EVENTOS</a>
			<a href="/LaTaperia/pages/reservas.php" class="nav-main-e5">RESERVAS</a>
			<a href="/LaTaperia/pages/contacto.php" class="nav-main-e6">CONTACTO</a>
			<div id="nav-hidden-min" class="glyphicon glyphicon-menu-hamburger"></div>
		</div>
		<div id="content">
			<div id="bodega">
				<?php
					include '/LaTaperia/php/config.php';

					$qryTV="SELECT * FROM tipoVino";
					$resTV=mysqli_query($con, $qryTV);

					while($rowTV=mysqli_fetch_array($resTV)){
						echo '<div id="tipo" class="tit-main">'.$rowTV["nombre"].'</div>';

						$qry="SELECT * FROM bodega WHERE tipo=".$rowTV["id"];
						$res=mysqli_query($con, $qry);

						echo '<div class="content-vinos">';
						while($row=mysqli_fetch_array($res)){
							echo 	'<div class="vino-tipo">
										<span class="img-vino"><img src="/img/bodega/'.$row["imagen"].'"></span>
										<span class="texto-vino">
											<div class="tit-vino">'.$row["nombre"].'</div>
											<div class="desc-vino">'.$row["descripcion"].'</div>
										</span>
										<span class="prec-vino">'.$row["precio"].' €</span>
									</div>';
						}

						echo '</div>';
					}
				?>
			</div>
		</div>
	</body>
</html>