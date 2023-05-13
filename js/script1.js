var indice1;
function modificar1(ida) {
    $.ajax({
        type: 'POST',
        data: {'id_producto': document.getElementById("id_productoD"+ida).value,
        'nombre1': document.getElementById("nombreD"+ida).value,
        'tipo1': document.getElementById("tipoD"+ida).value,
        'talla1': document.getElementById("tallaD"+ida).value,
        'precio1': document.getElementById("precioD"+ida).value,
        'ruta1': document.getElementById("rutaD"+ida).value},
        url: 'controlador/productos_controlador.php',
        success: function (response) {
            document.getElementById("insertForma").style.display = 'none';
            document.getElementById("containera").style.display = 'inherit';
            $("#containera").html(response); //respuesta formulario
        }
    })
}
function cancelar1() {
    document.getElementById("insertForma").style.display = 'inherit';
    document.getElementById("containera").style.display = 'none';
}