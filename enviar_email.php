<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);

    // Configurar el correo
    $to = "juandavidmr2912@gmail.com";
    $subject = "Nuevo registro desde el formulario";
    $message = "Nombre: $nombre\n";
    $message .= "Email: $email\n";
    $message .= "Teléfono: $telefono\n";
    
    // Encabezados del correo
    $headers = "From: noreply@tu-dominio.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        // Redirigir a la página de confirmación
        header("Location:Index.html");
        exit();
    } else {
        echo "Error al enviar el correo.";
    }
} else {
    echo "Método de solicitud no soportado.";
}
?>

