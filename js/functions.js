//JS PARA PAGINA INDEX.PHP

$( document ).ready(function() {
    //Cuando cargue en su totalidad la pagina de inicio se dispara un ajax 
    //para comunicarnos con la base de datos por medio del back

    jQuery.ajax({            
        method: "POST",
        url: "servers/Usuarios.php",
        data: {opcion:"usuarios"}
    })
    .done(function(data) {
        //Recibimos toda la data para llenar la tabla de usuarios
        
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
//Funcion para agregar usuarios
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
        //Ajax para registro de usuarios
        jQuery.ajax({
            
            method: "POST",
            url: "servers/Usuarios.php",
            data: {obj_user, opcion:"registro"}
        })
        .done(function(msg) {
            // respuesta
            if(msg == "true"){
                alert("Usuario añadido");
                window.location.reload();
            }else{
                alert("Error al añadir el usuario");
            }
            
        });
      });

});
