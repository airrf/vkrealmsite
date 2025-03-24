<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $message = $_POST['message'];

    // Defina o e-mail para o qual a mensagem será enviada
    $to = "vikingrealmentertainment@vkrealm.xyz";
    $subject = "New BasementCP Support Ticket ";

    // Montando o corpo do e-mail
    $body = "You have received an basementcp support ticket:\n\n";
    $body .= "E-mail: $email\n";
    $body .= "Nickname: $nickname\n";
    $body .= "Message:\n$message\n";

    // Cabeçalhos do e-mail
    $headers = "From: $email";

    // Envia o e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for sending this message. we'll help you fast as possible";
    } else {
        echo "An error ocurred while sending your message. Please try again later.";
    }
}
?>
