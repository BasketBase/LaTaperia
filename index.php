<!DOCTYPE html>
<html>
	<head lang="ES">
		<meta charset="UTF-8"/>
		<title>La Tapería</title>
		<script type="text/javascript" src="/LaTaperia/lib/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="/LaTaperia/lib/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/lib/bootstrap.min.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/styles.css"></link>
		<link rel="stylesheet" type="text/css" href="/LaTaperia/css/index.css"></link>
		<script type="text/javascript" src="/LaTaperia/js/slider.js"></script>
		<script type="text/javascript" src="/LaTaperia/js/menu.js"></script>
	</head>
	<body>
		<div id="nav-main">
			<a class="nav-main-e1 active"><img src="img/logo.png"></a>
			<a href="/LaTaperia/pages/carta.php" class="nav-main-e2">CARTA</a>
			<a href="/LaTaperia/pages/bodega.php" class="nav-main-e3">BODEGA</a>
			<a href="/LaTaperia/pages/eventos.php" class="nav-main-e4">EVENTOS</a>
			<a href="/LaTaperia/pages/reservas.php" class="nav-main-e5">RESERVAS</a>
			<a href="/LaTaperia/pages/contacto.php" class="nav-main-e6">CONTACTO</a>
			<div id="nav-hidden-min" class="glyphicon glyphicon-menu-hamburger"></div>
		</div>
		<div id="content">
			<div id="slider">
				<img id="img-slider" src="/LaTaperia/img/slider/1.jpg" />
				<p>
					SOMOS ORIGINALES<br/>
					SOMOS DISTINTOS
				</p>
			</div>
			<div class="tit-main">
				¿COMO LLEGAR?
			</div>
			<div id="map"></div>
			<script type="text/javascript">

				var map;
				function initMap() {
					var position={
				    	lat: 43.3370136,
				    	lng: -8.3771695
				    };

					map = new google.maps.Map(document.getElementById('map'), {
					    center: position,
						scrollwheel: false,
						zoom: 19
					});

				    var marker = new google.maps.Marker({
					    position: position,
					    map: map,
					    title: 'LA TAPERÍA'
				    });
				}

		    </script>
		    <script async defer
		      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwgXJKTYqgqH33IPlv4RgRfWJLZy7K5DI&callback=initMap">
		    </script>

		    <div id="cuadros">
		    	<span id="carta">
		    		<h4 class="tit-main">CARTA</h4>
		    		<p style="text-align: center; font-size: 25px; width: 300px">Visualize todas nuestras tapas y raciones.</p>
		    		<button class="btn btn-primary btn-lg"><a href="/LaTaperia/pages/carta.php">Ver carta</a></button>
		    	</span>
		    	<span id="bodega">
		    		<h4 class="tit-main">BODEGA</h4>
		    		<p style="text-align: center; font-size: 25px; width: 300px">Eche un vistazo a los vinos que tenemos a su disposición</p>
		    		<button class="btn btn-info btn-lg"><a href="/LaTaperia/pages/bodega.php">Ver bodega</a></button>
		    	</span>
		    </div>
		</div>
	</body>
</html>