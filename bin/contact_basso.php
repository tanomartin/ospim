<?php
// check if fields passed are empty
if (empty ( $_POST ['name'] ) || empty ( $_POST ['message'] )) {
	echo "No se enviaron los datos!";
	return false;
}

$name = $_POST ['name'];
$email_address = $_POST ['email'];
$message = $_POST ['message'];
// create email body and send it
$to = 'revistaelmaderero@usimra.com.ar';
$email_subject = "Formulario de mensaje pagina Antonio Basso de:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Mesaje recibo de la pagina ospim.com.ar.\n\n" . "Nombre: $name\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@your-domain.com\n";
if ($email_address != "") {
	$headers .= "Reply-To: $email_address";
}
mail ( $to, $email_subject, $email_body, $headers );
return true;
?>