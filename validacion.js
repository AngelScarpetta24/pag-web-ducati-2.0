function validarFormulario() {
    const nombre = document.getElementById("nombre").value;
    const email = document.getElementById("email").value;
    const mensaje = document.getElementById("mensaje").value;

    if (!nombre || !email || !mensaje) {
        alert("Por favor, complete todos los campos.");
        return false;
    }

    return true;
}