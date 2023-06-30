<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'mterechtchenko@edu.cdv.pl'; // Замените на вашу почту
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $subject = 'Сообщение с контактной формы';
    $body = "Имя: $name\nТелефон: $phone\nEmail: $email\nСообщение: $message";

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['success' => true]);
        exit;
    } else {
        echo json_encode(['success' => false, 'error' => 'Failed to send email']);
        exit;
    }
}

?>