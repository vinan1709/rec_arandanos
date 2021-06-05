$( document ).ready(function() {

    jQuery.ajax({            
        method: "GET",
        url: "../servers/Reporte.php",
    })
    .done(function(data) {
        
        var datos = JSON.parse(data);
        console.log(datos);

        datos.forEach(obtenerdatos);

        function obtenerdatos(item, index) {
            console.log(item);

        }
        
    });

   

});
