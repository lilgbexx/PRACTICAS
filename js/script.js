var indice; 
function modificar(id) {
    $.ajax({
        type: 'POST',
        data: {'usuario': document.getElementById("usuarioD"+id).value,
        'nombre1': document.getElementById("nombreD"+id).value,
        'apellido1': document.getElementById("apellidoD"+id).value,
        'correo1': document.getElementById("correoD"+id).value,
        'direccion1': document.getElementById("direccionD"+id).value,
        'telefono1': document.getElementById("telefonoD"+id).value},

        url: 'controlador/datos_controlador.php',
        success: function (response) {
            document.getElementById("insertForm").style.display = 'none';
            document.getElementById("container").style.display = 'inherit';
            $("#container").html(response); //respuesta formulario
        }
    })
}
function cancelar() {
    document.getElementById("insertForm").style.display = 'inherit';
    document.getElementById("container").style.display = 'none';
}




