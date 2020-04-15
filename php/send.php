<?php
$myEmail = 'mete46@hotmail.it';
$userEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$userMessage = "
  <html>
    <head>
      <title>Grazie per averci contattato</title>
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
$headers[] = 'MIME-Version: 1.0';
$headers[] = 'Content-type: text/html; charset=utf-8';
mail($userEmail, 'Richiesta di contatto effettuata con successo', $userMessage, implode("\r\n", $headers));
mail($adminEmail, 'Richiesta di contatto dal sito web', $adminMessage, implode("\r\n", $headers));
echo "Mail sended successfully";
?> 