<?php
/**
 * Send emails
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $body = $_POST['content'];
    $name = $_POST['sender-name'];
    $mail = $_POST['mail'];
    $tel = $_POST['phone-number'];
    $copy = $_POST['copy'];

    if (!isset($body)) {
        $_SESSION['error']['contentErr'] = 'Veuillez remplir le champ "message"';
    } else {
        $_SESSION['true']['contentTrue'] = $body;
    }
    if (!isset($mail) || $mail == '') {
        $_SESSION['error']['mailErr'] = 'Veuillez remplir le champ "mail"';
    }
    if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error']['mailErr'] = 'Veuillez donner une adresse mail correct example@mail.com';
    } else {
        $_SESSION['true']['mailTrue'] = $mail;
    }
    if (!isset($tel) || $tel == '') {
        $_SESSION['error']['telErr'] = 'Veuillez remplir le champ numéro de téléphone "+32 471 55 33 04"';
    } else {
        $_SESSION['true']['telTrue'] = $tel;
    }
    if (!isset($name) || $name == '') {
        $_SESSION['error']['nameErr'] = 'Veuillez remplir le champ avec votre nom "Max Mustermann"';
    } else {
        $_SESSION['true']['nameTrue'] = $tel;
    }

    $message = 'Un nouveau message est arrivé :' . PHP_EOL;
    $message .= 'Nom : ' . $name . PHP_EOL;
    $message .= 'Tel : ' . $tel . PHP_EOL;
    $message .= 'Message :' . PHP_EOL;
    $message .= $body;

    $email_header = "From: contact@lysander-hans.com" . "\r\n" . "Reply-To: $mail" . "\r\n";

    if (mail('lysander.hans@hotmail.com', 'Mail from CV', $message, $email_header)) {
        $_SESSION['message'] = 'Votre mail à été envoyé.';
        $_SESSION['true'] = [];
        $_SESSION['error'] = [];
    } else {
        $_SESSION['message'] = 'Votre mail n’à pas été envoyé.';
    }
    if (isset($copy)){
        mail($mail, 'Mail from CV', $message, $email_header);
    }
}

