<?php
session_start();
if (!isset($_SESSION['nID']))

$errors = '';

$myemail = 'berni365@hotmail.com';

    if(empty($_POST["nombre__contact"]) || empty($_POST["email__contact"]) || empty($_POST["message"])){
    $errors .= '\n Error: all fields are required';
    }

    $name = $_POST["nombre__contact"];
    $email_address = $_POST["email__contact"];
    $message = $_POST['message'];

    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", $email_address)){

    $errors .= '\n Error: Invalid email address';
    }

    if( empty($errors)){

    $to = $myemail;
    $email_subject = 'Contact form submission: $name';
    $email_body = 'You have received a new message. '.' Here are the details:\n Name: $name \n '.'Email: $email_address\n Message \n $message';

    $headers = 'From: $myemail\n';
    $headers .= 'Reply-To: $email_address';

    mail($to,$email_subject,$email_body,$headers);

    //redirect to the ‘thank you''" page
    echo"<div style='text-align:center; color:green; font-size:18px; font-weight:bold'>Gracias por enviar su mensaje, contactaré con usted en breves.</div>";

    header('Location: ../contacto.php');

    }

    ?>