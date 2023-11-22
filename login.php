<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Realizar la consulta a la base de datos para verificar las credenciales
    // Aquí deberás comparar las credenciales ingresadas con las almacenadas en tu base de datos

    // Si las credenciales son válidas, redirigir al usuario a su página de inicio
    if (/* credenciales válidas */) {
        $_SESSION['correo'] = $correo; // Almacenar el correo en la sesión para mantener al usuario conectado
        header("location: inicio.php"); // Redirigir a la página de inicio
    } else {
        $error = "Correo o contraseña incorrectos";
    }
}
?>
