<?php
	
	$name = '';
	$email = '';
	$message = '';
	$phone = '';
	$material = '';

	if(isset($_POST['name2'])) 		$name = $_POST['name2'];
	if(isset($_POST['email2'])) 		$email = $_POST['email2'];
	if(isset($_POST['phone2'])) 	    $phone = $_POST['phone2'];	
	if(isset($_POST['message2'])) 	$message = $_POST['message2'];
	if(isset($_POST['select2']))		$material = $_POST['select2'];

	$headers = "From: " . $email;

	$to = 'comercial.planta@recicladosindustriales.co';

	mail($to, $subject,  'Nombre: '.$name. ' Mensaje: '.$message. ' Teléfono: '.$phone. ' Email: '.$email. 'Material:' .$material);

?>