<?php
/**
 * Send emails
 */
if(!isset($_SESSION)){
    session_start();
    var_dump('hello');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $body = $_POST['content'];
    $name = $_POST['sender-name'];
    $mail = $_POST['mail'];
    $tel = $_POST['phone-number'];

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
        $_SESSION['true']['mailTrue'] = $mail;==
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

    $email_header = "From: $name <" . $mail . ">\n";
    $email_header .= "Reply-To: " . $_POST["mail"] . "\n";
    $email_header .= "Content-transfer-encoding: 7bit\n";
    $email_header .= "Content-type: text/plain; charset=\"iso-2022-jp\"\n\n";

    if (mail('lysander.hans@hotmail.com', 'Mail from CV', $message, $email_header)) {
        $_SESSION['message'] = 'Votre mail à été envoyé.';
    } else {
        $_SESSION['message'] = 'Votre mail n’à pas été envoyé.';
    }
    header('Location: /#contact-form');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    header('Location: /');
    exit();
}
