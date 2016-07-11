$(function(){
	var hidden=0;
	$("#nav-hidden-min").click(function(){
		if(hidden==0){
			$("#nav-main a").addClass("nav-hidden-elem");
			hidden=1;
		}
		else{
			$("#nav-main a").removeClass("nav-hidden-elem");
			hidden=0;
		}
	});

	//Intercambia el logo según la posición del ratón y si no está en la página principal
	$(".nav-main-e1").mouseenter(function(){
		if($(this).attr('href')!=undefined){
			$(".nav-main-e1 img").attr("src", "../img/logo.png")
		}
	}).mouseleave(function(){
		if($(this).attr('href')!=undefined){
			$(".nav-main-e1 img").attr("src", "../img/logoBlanco.png")
		}
	});
});