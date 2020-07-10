<?php

require __DIR__ . "/../lib_ext/autoload.php";

use Notification\Email;

$novoEmail = new Email(2, "mail.server.me", "sender@mail.com", "root@123", "tls", "587", "sender@server.me",
    "Mail Team");
$novoEmail->sendMail(
    "Subject",
    "<p>E-mail teste curso <b>Composer</b>.</p>",
    "sender@server.me",
    "Sender",
    "mail@server.me",
    "Name"
);

var_dump($novoEmail);
