$( document ).ready(function() {
    // Ajax para recibir informacion actualizada de la recoleccion de arandanos

    jQuery.ajax({            
        method: "GET",
        url: "../servers/Reporte.php",
    })
    .done(function(data) {
        
        var datos = JSON.parse(data);
        if(datos != null){
            $('.txt_fecha').text(datos[0]);
            $('.txt_cantidad').text(datos['cantidad_fruta'][0]+'KG');
            $('.txt_recolector').text(datos[2]);
            $('.txt_encargado').text(datos[3]);
        }
    });

   

});
