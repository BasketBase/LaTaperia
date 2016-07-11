function sendMail() 
{
    var link = "mailto:info@restaurantelataperia.com"
             + "?subject=Sugerencia"
             + "&body=" + document.getElementById('message').value;
             
    window.location.href = link;
}
