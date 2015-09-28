<?php 
include "class.phpmailer.php";

function send_email(){
	
	$name = "Rodrigo";
	$s_email = "rmoreiradematos@gmail.com";
	$d_email = "rmoreiradematos@gmail.com";
	$assunto = "BLA";
	$titulo = "TESTE";
	$message = "ASDFASFDASFASDFA";
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "ssl";
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 465;

	$mail->Username = "rmoreiradematos@gmail.com";
	$mail->Password = "twytwytwy1";	

	$mail->From = $s_email;
	$mail->FromName = $name;
	$mail->Subject = $assunto;

	$html = "teste para mim mesmo";
	$texto = "$titulo $message";

	$mail->Body = $html;
	$mail->AltBody =$texto;

	$mail->AddAddress($d_email);

	if(!$mail->Send()){
		echo "não foi";
	}
	else{
		echo "foi";
	}	
}
