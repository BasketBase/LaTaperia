<!DOCTYPE html>
<html>
	<head lang="ES">
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="theme-color" content="#FEC"/>
		<link rel="icon" type="image/png" href="/LaTaperia/img/favicon.png" size="192x192"/>
		<title>La Tapería</title>
		<script type="text/javascript" src="/LaTaperia/lib/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="/LaTaperia/lib/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/lib/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/styles.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/eventos.css"></link>
		<script type="text/javascript" src="/LaTaperia/js/menu.js"></script>
	</head>
	<body>
		<div id="nav-main">
			<a href="/LaTaperia/" class="nav-main-e1"><img src="../img/logoBlanco.png"></a>
			<a href="/LaTaperia/pages/carta.php" class="nav-main-e2">CARTA</a>
			<a href="/LaTaperia/pages/bodega.php" class="nav-main-e3">BODEGA</a>
			<a class="nav-main-e4 active">EVENTOS</a>
			<a href="/LaTaperia/pages/reservas.php" class="nav-main-e5">RESERVAS</a>
			<a href="/LaTaperia/pages/contacto.php" class="nav-main-e6">CONTACTO</a>
			<div id="nav-hidden-min" class="glyphicon glyphicon-menu-hamburger"></div>
		</div>
		<div id="content">
			<?php
				include '/LaTaperia/php/config.php';

				$qry="SELECT * FROM eventos";
				$res=mysqli_query($con, $qry);

				while($row=mysqli_fetch_array($res)){
					echo 	'<div class="evento">
								<div class="tit-evento tit-main">'.$row["fecha"].' - '.$row["titulo"].'</div>
								<div class="img-evento">
									<img src="/LaTaperia/img/eventos/'.$row["imagen"].'"/>
								</div>
								<div class="desc-evento">'.$row["descripcion"].'</div>
							</div>';
				}
			?>
			<!--<div class="evento">
				<div class="tit-evento tit-main">22/06/2016 22:00 - Casemiro Máster Chef</div>
				<div class="img-evento">
					<img src="/LaTaperia/img/eventos/CARTEL_CAMPUS.jpg"/>
				</div>
				<div class="desc-evento">Malcalpone SI SEÑOL PUTO ONSALO</div>-->
			</div>
		</div>
	</body>
</html>