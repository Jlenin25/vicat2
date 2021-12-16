<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['enviar'])) {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {

        require "phpmailer/src/Exception.php";
    require "phpmailer/src/PHPMailer.php";
    require "phpmailer/src/SMTP.php";

    $mail = new PHPMailer(true);

        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $header = "De: noreply@example.com"."\r\n";
        $header.= "Para: jlenin25mv@gmail.com"."\r\n";
        $header.= "X-Mailer: PHP/".phpversion();
        $mail = @mail($email,$subject,$message,$header);
        if($mail) {
            echo "¡Mensaje enviado exitosamente!";
        }
    }
}

// $destino = "jlenin25mv@gmail.com";
// $name = $_POST['name'];
// $email = $_POST['email'];
// $subject = $_POST['subject'];
// $message = $_POST['message'];

// $header = "Mensaje desde Vicat-WEB";
// $mensajecompleto = "\n Nombre:".$name."\n Correo Electrónico:".$email."\n Asunto:".$subject."\n Mensaje:".$message;
// mail($destino,$subject,$mensajecompleto,$header);
// header('Location: contactanos.php');


try {
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = "cloud.onxen.com";
    $mail->SMTPAuth = true;
    $mail->Username = "informes@vicatconstruccion.com";
    $mail->Password = "_vnkw7WLqFe6";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;

    $mail->setFrom("informes@vicatconstruccion.com", "Vicat");
    $mail->AddAddress("jlenin25mv@gmail.com");

    $mail->isHTML(true);
    $mail->Subject = "Mensaje de Vicat - Web";
    $mail->Body = "Segundo correo de prueba";

    $mail->send();
    echo "El mensaje se envió correctamente";
} catch(Exception $e) {
    echo "Hubo un error al enviar el mensaje: ", $mail->ErrorInfo;
}