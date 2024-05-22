<?php
$email = "";
$message = "";
$messageClass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST["email"]);

    if (empty($email)) {
        $message = "Inserire un indirizzo email.";
        $messageClass = "error";
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "L'indirizzo email non è valido.";
        $messageClass = "error";
    } else {
        $message = "L'indirizzo email è valido.";
        $messageClass = "success";
    }
}

if (!empty($message)) {
    echo "<p class='$messageClass'>$message</p>";
}
