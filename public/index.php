<?php

require "../vendor/autoload.php";
require "../vendor/phpmailer/phpmailer/PHPMailerAutoload.php";
require "../vendor/phpmailer/phpmailer/function.php";



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
	if($name == '' || $email == '' || $site == '' || $inquiry == ''){
		$app->redirect("index.php");	
	} 
	else{	
		$dbquery = $db->prepare("INSERT INTO inquiry(name,email,website,inquiry) VALUES(:name,:email,:site,:inquiry)");
		$dbquery->execute(array(":name"=>$name,":email"=>$email,":site"=>$site,":inquiry"=>$inquiry)); 	
	}
		$app->redirect("index.php");
});

$app->get('/send_email', function() use($app){
	send_email();
});

$app->run();

	