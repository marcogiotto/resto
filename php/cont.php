<?php
$name = $_POST['name1'];
$email = $_POST['email1'];
$telefono = $_POST['telefono'];
$fecha = $_POST['fecha'];
$horario = $_POST['horario'];
$local = $_POST['local'];
$comensales = $_POST['comensales'];
$message = $_POST['message1'];
$to = "blossom.consultas@gmail.com";
//$to = "sbenassi@gmail.com";
$email = filter_var($email, FILTER_SANITIZE_EMAIL); // Sanitizing E-mail.
// After sanitization Validation is performed
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$subject = "Contacto desde blossom resto";
	// To send HTML mail, the Content-type header must be set.
	//$headers = 'MIME-Version: 1.0' . "\r\n";
	//$headers .= 'Content-type: text/plain; charset=UTF-8' . "\r\n";
	$headers .= 'From:blossom.consultas@gmail.com'. "\r\n"; // Sender's Email
	//$headers .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender
	$template = 'Hola Edy,'. "\n"
	. "\n"
	. 'Nombre: ' . $name . "\n"
	. 'Email: ' . $email . "\n"
	. 'telefono: ' . $telefono . "\n"
	. 'fecha: ' . $fecha . "\n"
	. 'horario: ' . $horario . "\n" 
	. 'Telefono: ' . $telefono . "\n"
	. 'local: ' . $local . "\n"
	. 'comensales: ' . $comensales . "\n"
	. 'Mensaje: ' . $message . "\n"
	. "\r\n";
	/*
	$template = '<div style="padding:50px; ">Hola Alex,<br/>'
	. '<br/>'
	. 'Nombre:' . $name . '<br/>'
	. 'Email:' . $email . '<br/>'
	. 'Teléfono:' . $contact . '<br/>'
	. 'Mensaje:' . $message . '<br/><br/>'
	. 'te anda buscando.'
	. '<br/>';
	*/
	//$sendmessage = "<div style=\"color:#000000;\">" . $template . "</div>";
	$sendmessage = $template;
	// Message lines should not exceed 70 characters (PHP rule), so wrap it.
	$sendmessage = wordwrap($sendmessage, 70);
	// Send mail by PHP Mail Function.
	$retval = mail($to, $subject, $sendmessage, $headers);
	/* EN SERIO?
	switch ($retval) {
		case true:
			$rta = 'se ha enviado el mail correctamente';
			break;
		case false :
			$rta = 'no se ha enviado el email';
	}*/
	if ($retval) {
		echo  '<span style="color:green;">se ha enviado el mail correctamente</span>';
	} else {
		echo  '<span style="color:red;">no se ha enviado el email </span>';
	}
}else {
	echo'<span style="color:red;">campo de email invalido</span>';
}
?>


