$( document ).ready(function() {
//Ajax para recibir data de la tabla
    jQuery.ajax({
        method: "GET",
        url: "../servers/Recoleccion.php",
        data: {opcion:"recoleccion"}
    })
        .done(function(data) {

            var datos = JSON.parse(data);

            for(var i=0; i<datos.length; i++){
                console.log(datos[i]);
                var tr = `<tr>
            <td>`+datos[i].recolector+`</td>
            <td>`+datos[i].cantidad_fruta+`</td>
            <td>`+datos[i].fecha+`</td>
            <td>`+datos[i].encargado+`</td>     
          </tr>`;
                $(".cuerpo_tabla").append(tr)
            }

        });
    //Agregarr recoleccion

    $(".addrecoleccion").click(function() {
        var recolector = $(".select_recolector").val();
        var cantidad = $("#cantidad").val();
        var encargado = $(".select_encargado").val();

        var obj_recoleccion = {
            recolector : recolector,
            cantidad : cantidad,
            encargado : encargado,
        };
        jQuery.ajax({

            method: "POST",
            url: "../servers/Recoleccion.php",
            data: {obj_recoleccion, opcion:"registro"}
        })
            .done(function(msg) {
                console.log(msg);
                if(msg == "true"){
                    alert("Registro fruta añadido");
                    window.location.reload();
                }else{
                    alert("Error al añadir el registro");
                }

            });
    });



});
