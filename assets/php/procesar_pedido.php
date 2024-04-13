<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pedido = $_POST['pedido'];
    
    // Dirección de correo electrónico donde quieres recibir los pedidos
    $to = "tizianosilvestri123@gmail.com";
    
    // Asunto del correo electrónico
    $subject = "Nuevo pedido de ".$nombre;
    
    // Cuerpo del correo electrónico con la información del pedido
    $message = "Nombre: ".$nombre."\r\n";
    $message .= "Email: ".$email."\r\n";
    $message .= "Pedido: ".$pedido."\r\n";
    
    // Envía el correo electrónico
    mail($to, $subject, $message);
    
    // Devuelve una respuesta al cliente (opcional)
    http_response_code(200);
} else {
    // Si no es una solicitud POST, devuelve un error
    http_response_code(400);
}
?>
