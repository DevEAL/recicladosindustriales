<?php
	$name = '';
	$email = '';
	$message = '';
	$phone = '';

	if(isset($_POST['name'])) 		$name = $_POST['name'];
	if(isset($_POST['email'])) 		$email = $_POST['email'];
	if(isset($_POST['phone'])) 	    $phone = $_POST['phone'];	
	if(isset($_POST['message'])) 	$message = $_POST['message'];

	$headers = "From: " . $email;
	$to = 'comercial.planta@recicladosindustriales.co';
	mail($to, $subject,  'Nombre: '.$name. ' Mensaje: '.$message. ' Teléfono: '.$phone. ' Email: '.$email);
?>