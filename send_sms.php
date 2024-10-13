<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recibir los datos del formulario
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validar los datos del formulario (opcional, pero recomendado)
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Aquí podrías enviar los datos por correo electrónico o guardarlos en una base de datos

        // Ejemplo para enviar un correo
        $to = "tucorreo@ejemplo.com"; // Cambia esto por tu correo
        $subject = "Nuevo mensaje de contacto";
        $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
        $headers = "From: $email";

        // Enviar el correo
        if (mail($to, $subject, $body, $headers)) {
            // Redirigir a una página de agradecimiento si el correo se envía correctamente
            header("Location: gracias.php");
            exit;
        } else {
            echo "Hubo un error al enviar tu mensaje. Inténtalo de nuevo.";
        }
    } else {
        echo "Por favor, completa todos los campos.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>
