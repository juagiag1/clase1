<?php
if (!isset($_POST['conditions'])) {
	header("Location:index.php?envia=error_cond");
}else{
	$email_to = "carlos@carlosgimeno.es";
// Aquí se deberían validar los datos ingresados por el usuario
	if($_POST['name'] == "" ||
	$_POST['phone'] == "" ||
	$_POST['email']== "" ||
	$_POST['message'] == "") {
		header("Location:index.php?envia=error");
	}else{
		$email_from = $_POST['email'];
		$email_subject = "Consulta de mi Web";
		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: " . $_POST['name'] . "\n";
		$email_message .= "E-mail: " . $_POST['email'] . "\n";
		$email_message .= "Teléfono: " . $_POST['phone'] . "\n";
		$email_message .= "Consulta: " . $_POST['message'] . "\n\n";
		// Ahora se envía el e-mail usando la función mail() de PHP
		$headers = 'From: '.$email_from."\r\n".
		'Reply-To: '.$email_from."\r\n" .
		'X-Mailer: PHP/' . phpversion();
		mail($email_to, $email_subject, $email_message, $headers);
		header("Location:index.php?envia=ok");
	}
}
?>