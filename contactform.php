<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailfrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "bilal.suleiman@outlook.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have received an email from ".$name.".\n\n".$message;

    mail($mailTo, $headers, $txt);
}
