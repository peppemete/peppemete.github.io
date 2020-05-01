<?php
$myEmail = 'mete46@hotmail.it';
$userEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$userMessage = "
<!DOCTYPE html>
  <html>
    <head>
      <title>Thanks for contacting me.</title>
    </head>
    <body>
        <p>Hi {$_POST['name']},</p>
        <p>thanks for contacting me.</p>
        <p>Your message is:</p>
        <p>{$_POST['subject']}</p>
        <p>{$_POST['message']}</p>
        <p>I will try to answer as soon as possible <p>
      <p>Giuseppe Mete</p>
    </body>
  </html>
";
$adminMessage = "
<!DOCTYPE html>
  <html>
    <head>
      <title>Messagio dal portfolio</title>
    </head>
    <body>
      <h1>Contatto:</h1>
      <ul>
        <li>Nome: {$_POST['name']}</li>
        <li>Oggetto: {$_POST['subject']}</li>
        <li>Messaggio: {$_POST['message']}</li>
      </ul>
    </body>
  </html>
";
$mail_header  = NULL;
    $mail_header .= "MIME-Version: 1.0<br>\n";
    $mail_header .= "Content-type: text/html; charset=iso-8859-1<br>\n";
    $mail_header .= 'From: "GIEMME graphics" <mete46@hotmail.it>'. "\n";
    $mail_header .= 'Reply-To: "GIEMME graphics" <mete46@hotmail.it>' . "\n";
    $mail_header .= 'Return-Path: "GIEMME graphics" <mete46@hotmail.it>';
    $mail_header .= "\n";


mail($myEmail, "Mail from portfolio", $adminMessage, $mail_header,"-f '" . "mete46@hotmail.it" . "'");
if ( mail($userEmail, "Thanks for contacting me.", $userMessage,  $mail_header,"-f '" . "mete46@hotmail.it" . "'") ) {
    echo "Message sended successfully";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
} else {
    echo "ERROR Message not sended";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit();
    
}

?>