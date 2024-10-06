// Función que valida los inputs del form 'reg-usuarios.php'
function checkFormInputs(e) {
    e.preventDefault();

    const user = document.querySelector('#usuario');
    const password = document.querySelector('#contrasena');
    const errorMessages = document.querySelectorAll('.error-msg');

    // Limpiar los mensajes de error de cada etiqueta '.error-msg'
    errorMessages.forEach(msg => msg.textContent = '');

    // Variable que almacena el estado de la validacion
    let estado = true;

    // Valida la existencia de un nombre de usuario
    if (user.value.trim() === "") {
        errorMessages[0].textContent = "El nombre de usuario no puede estar vacío.";
        estado = false;
    }

    // Valida la existencia de una contraseña
    if (password.value.trim() === "") {
        errorMessages[1].textContent = "La contraseña no puede estar vacía.";
        estado = false;
    }

    // Permite el flujo del sistema con el registro del usuario.
    if (estado) {
        e.target.submit(); 
    }
}

// Función que une un metodo segun el form.
function bindEvents() {
    let form;
    if (form === document.getElementById('registrationForm')) {
        form.addEventListener('submit', checkFormInputs);
    }
}

document.addEventListener('DOMContentLoaded', bindEvents);
