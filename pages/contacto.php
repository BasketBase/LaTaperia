<!DOCTYPE html>
<html>
	<head lang="ES">
		<meta charset="UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="theme-color" content="#FEC"/>
		<link rel="icon" type="image/png" href="/LaTaperia/img/favicon.png" size="192x192"/>
		<title>Reservas · La Tapería</title>
		<script type="text/javascript" src="/LaTaperia/lib/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="/LaTaperia/lib/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/lib/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/styles.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/contacto.css"></link>
		<script type="text/javascript" src="/LaTaperia/js/menu.js"></script>
		<script type="text/javascript" src="/LaTaperia/js/contacto.js"></script>
	</head>
	<body>
		<div id="nav-main">
			<a href="/LaTaperia/index.php" class="nav-main-e1"><img src="../img/logo.png"></a>
			<a href="/LaTaperia/pages/carta.php" class="nav-main-e2">CARTA</a>
			<a href="/LaTaperia/pages/bodega.php" class="nav-main-e3">BODEGA</a>
			<a href="/LaTaperia/pages/eventos.php" class="nav-main-e4">EVENTOS</a>
			<a href="/LaTaperia/pages/reservas.php" class="nav-main-e5">RESERVAS</a>
			<a  class="nav-main-e6 active">CONTACTO</a>
			<div id="nav-hidden-min" class="glyphicon glyphicon-menu-hamburger"></div>
		</div>
		<div id="content">
			<div id="container">
				<span id="desc">
					<div>
						<span class="glyphicon glyphicon-phone-alt" style="margin-right: 20px;margin-top: 40px"></span><span>981981981</span>
					</div>
					<div>
						<span class="glyphicon glyphicon-envelope" style="margin-right: 20px"></span><span>info@restaurantelataperia.com</span>
					</div>
					<div>
						<span class="glyphicon glyphicon-home" style="margin-right: 20px"></span><span>Avda. de Santa Cristina, 24 Bajo, Santa Cristina, 15172 - Oleiros (A Coruña)</span>
					</div>
					<div>
						<TextArea style="resize:none" rows="7" cols="107" id="message">Deja tu sugerencia aquí</TextArea>
					</div>
					<div>
						<button onclick="sendMail()">Enviar</button>
					</div>
				</span>
			</div>
		</div>
	</body>
</html>
