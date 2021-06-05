$( document ).ready(function() {

    jQuery.ajax({
            
        method: "POST",
        url: "servers/Usuarios.php",
        data: {opcion:"usuarios"}
    })
    .done(function(data) {
        
        var datos = JSON.parse(data);
        
        for(var i=0; i<datos.length; i++){
            console.log(datos[i]);
            var tr = `<tr>
            <td>`+datos[i].id_usuario+`</td>
            <td>`+datos[i].nombres+`</td>
            <td>`+datos[i].apellidos+`</td>
            <td>`+datos[i].documento+`</td>
            <td>`+datos[i].nombre_cargo+`</td>            
          </tr>`;
          $(".cuerpo_tabla").append(tr)  
        }
        
    });

    console.log( "ready!" );
    $(".adduser").click(function() {
        var nombres = $("#name").val();
        var apellidos = $("#apellidos").val();
        var documento = $("#documento").val();
        var cargo = $(".form-select").val();

        var obj_user = {
            nombres : nombres,
            apellidos : apellidos,
            documento : documento,
            cargo : cargo,
        }
        console.log(obj_user);
        jQuery.ajax({
            
            method: "POST",
            url: "servers/Usuarios.php",
            data: {obj_user, opcion:"registro"}
        })
        .done(function(msg) {
            if(msg == "true"){
                alert("Usuario añadido");
                window.location.reload();
            }else{
                alert("Error al añadir el usuario");
            }
            
        });
      });

});
