var indice;
function modificar(id) {
    $.ajax({
        type: 'POST',
        data: {'usuario': document.getElementById("usuarioD"+id).value, 'edad1': document.getElementById("edadD"+id).value, 'correo1': document.getElementById("correoD"+id).value},
        url: 'Controlador/datos_controlador.php',
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



