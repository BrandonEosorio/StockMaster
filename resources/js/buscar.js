// Constante para el manejo de errores
const mensajeError = document.getElementById('mensaje-error');

// Función para realizar la consulta
function buscarCedula() {
    // Obtener el valor de la cédula
    var cedula = document.getElementById("cedula").value;

    // Crear un objeto XMLHttpRequest
    var xhr = new XMLHttpRequest();

    // Definir la función para manejar el evento onreadystatechange
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            // Si la respuesta es satisfactoria, mostrar los datos en el formulario
            var data = JSON.parse(this.responseText);
            mensajeError.classList.add('d-none');
            mensajeError.classList.remove('d-block');
            document.getElementById("persona_id").value = data.id;
            document.getElementById("nombre").value = data.nombre;
            document.getElementById("apellido").value = data.apellido;
            // Otros campos que desees actualizar con la respuesta
        } else if (this.readyState == 4 && this.status == 404) {
            // Si la respuesta no es satisfactoria, mostrar un mensaje de error
            var data = JSON.parse(this.responseText);
            mensajeError.classList.add('d-block');
            mensajeError.classList.remove('d-none');
            mensajeError.textContent = data.error;
            document.getElementById("nombre").value = '';
            document.getElementById("apellido").value = '';
        }
    };

    // Abrir la conexión con el servidor
    xhr.open("GET", "/ventas/buscarCedula?cedula=" + cedula, true);

    // Enviar la solicitud al servidor
    xhr.send();
}
