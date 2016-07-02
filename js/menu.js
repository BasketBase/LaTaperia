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
});