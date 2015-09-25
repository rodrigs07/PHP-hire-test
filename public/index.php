<?php

 require "../vendor/autoload.php";
 $app = new \Slim\Slim();
 $app->config(array(
 	'debug' => true,
 	'templates.path' => '../views',
 	));

$db= new PDO("mysql:host=localhost;dbname=projeto","root","root");

$app->get('/', function() use($app){
	$app->render("index.php");
});

$app->get('/novo/nome', function() use ($app,$db){
	$app->render('novo.php');
});

 
$app->post('/', function() use($app,$db){

	$request = $app->request;
	$name = $request->post('name');
	$email = $request->post('email');
	$site = $request->post('site');
	$inquiry = $request->post('inquiry');
	$dbquery = $db->prepare("INSERT INTO inquiry(name,email,website,inquiry) VALUES(:name,:email,:site,:inquiry)");
	$dbquery->execute(array(":name"=>$name,":email"=>$email,":site"=>$site,":inquiry"=>$inquiry)); 	
	$app->redirect("index.php");
});

//testando
$app->get('/email',function() use($app){
	require 'PHPMailerAutoload.php';
	$mail =  new PHPMailer;
	$mail->isSMTP();
	$mail->Host = 'smtp.dominio.net';                   

	$mail->From('rmoreiradematos@gmail.com');
	$mail->FromNome('Rodrigo');
	$mail->AddAddress('rmopreiradematos@gmail.com', 'Rodrigo Matos');
	$mail->AddAddress('ciclano@site.net')

	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Here is the subject';
	$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	$enviado = $mail->Send();
	// Limpa os destinatários e os anexos
	$mail->ClearAllRecipients();
	$mail->ClearAttachments();
	// Exibe uma mensagem de resultado
	if ($enviado) {
	  echo "E-mail enviado com sucesso!";
	} else {
	  echo "Não foi possível enviar o e-mail.";
	  echo "<b>Informações do erro:</b> " . $mail->ErrorInfo;
	}
		}
});
$app->run();

	