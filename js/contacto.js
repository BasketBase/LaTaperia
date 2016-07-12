$(function(){
	$(".enviarSug").click(function(e){
		var textSug=$(this).text();
		if(textSug!=""){
			sendEmail(textSug);
		}
	});
});

var sendEmail=function(text){
	$.ajax({
        type: 	'POST',
        url: 	'/LaTaperia/php/send.php',
        data: 	"text="+text,
        success:function(data){
        	toastr.success("Gracias por ayudarnos a mejorar. Tendremos en cuenta sus palabras.", "Sugerencia enviada");
        },
        error: function(data){
        	console.log(data);
        	toastr.error("Ha ocurrido un error al enviar la sugerencia. Vuelva a intentarlo y disculpe las molestias.", "Error.");
        }
    });
}