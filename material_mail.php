<?php
	
	// $name = '';
	// $email = '';
	// $message = '';
	// $phone = '';
	// $material = '';
	// $cantidad = '';

	if(isset($_POST['name'])) 			$name = $_POST['name'];
	if(isset($_POST['email'])) 		$email = $_POST['email'];
	if(isset($_POST['phone'])) 	    $phone = $_POST['phone'];	
	if(isset($_POST['message'])) 		$message = $_POST['message'];
	if(isset($_POST['select']))		$material = $_POST['select'];
	if(isset($_POST['cantidad']))		$cantidad = $_POST['cantidad'];

	$subject = "From: " . $email;

	$to = 'desarrollo@enalgunlugarestudio.com';

	$content = 'Nombre: '.$name. ' Mensaje: '.$message. ' Teléfono: '.$phone. ' Email: '.$email. 'Material:' .$material. 'Cantidad' .$cantidad;

	mail($to, $subject, $content);
?>