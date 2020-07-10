<?php

require __DIR__ . "/lib_ext/autoload.php";

use Notification\Email;

$novoEmail = new Email;
$novoEmail->sendMail(
    "Subject",
    "<p>E-mail teste curso <b>Composer</b>.</p>",
    "sender@server.me",
    "Sender",
    "mail@server.me",
    "Name"
);

var_dump($novoEmail);
