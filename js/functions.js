$( document ).ready(function() {

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
        });
      });

});
