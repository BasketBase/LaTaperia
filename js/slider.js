var img=0;

$(function(){
	window.setTimeout(cambiaImagen, 6000);
});

var cambiaImagen=function(){
	$.get("php/slider.php", function(data){
		var images=$.parseJSON(data);

		img++;

		if(img==images.length || img<0){
			img=0;
		}

		$("#slider").fadeOut('slow', function(){
			$("#img-slider").attr('src', images[img].substr(3, images[img].length));
			if(img==1)
				$("#slider p").html("DEJATE SORPRENDER");
			else if(img==2){
				$("#slider p").html("VENGA A VISITARNOS");
			}
			else{
				$("#slider p").html("SOMOS ORIGINALES<br/>SOMOS DISTINTOS");
			}
			$(this).fadeIn('slow', function(){
				window.setTimeout(cambiaImagen, 6000);
			})
		});
	})
}