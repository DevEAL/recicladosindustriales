<?php
	$email = '';
	if(isset($_POST['email2'])) 		$email = $_POST['email2'];
	$headers = "From: " . $email;
	$to = 'comercial.planta@recicladosindustriales.co';
	mail($to, $subject, ' Se a suscrito: '.$email);
?>