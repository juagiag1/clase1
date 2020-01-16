
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
if (isset($_POST['conditions'])) {
	$conditions = $_POST['conditions'];
	if ($name!=="" && $email!=="" && $phone!=="" && $message!=="") {
		$email_to = "example@mail.com";
		$email_subject = "Consulta de mi web";
		$email_message = "Detalles del formulario de contacto:\n\n";
		$email_message .= "Nombre: ".$name."\n";
		$email_message .= "Email: ".$email."\n";
		$email_message .= "Telefono: ".$phone."\n";
		$email_message .= "Consulta: ".$message."\n";

		$headers = "From: ".$email."\r\n";
		$headers.= "Reply-To".$email."\r\n";
		$headers.= "X-Mailer: PHP/ ".phpversion();

		mail($email_to, $email_subject, $email_message, $headers);

		echo "Tu consulta se ha enviado con exito";
		header("Location:index.php?envia=ok");
	}else{
		echo "Completa todos los campos";
		header("Location:index.php?envia=error");
	}
}else{
	echo "debes aceptar las condiciones";
	header("Location:index.php?envia=error_cond");
}

?>