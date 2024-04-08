<?php
include "server.php";
if (isset($_POST["email"])) {


    $to_email = $_POST["email"];
    $subject = "Hello, from Dimitar!";
    $body = "Sto ke imam za proektnava?";
    $headers = "From: acovretoski@gmail.com";

    if (mail($to_email, $subject, $body, $headers)) {
        array_push($errors, "Mail sent!");
    } else {

        array_push($errors, " Email sending failed...!");
    }
} else {
    echo "no data sent";
}
header("Location: index.php#comments");
