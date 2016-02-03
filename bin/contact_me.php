<?php
// check if fields passed are empty
if (empty ( $_POST ['name'] ) || empty ( $_POST ['phone'] ) || empty ( $_POST ['email'] ) || empty ( $_POST ['message'] ) || ! filter_var ( $_POST ['email'], FILTER_VALIDATE_EMAIL )) {
	echo "No se enviaron los datos!";
	return false;
}

$name = $_POST ['name'];
$phone = $_POST ['phone'];
$email_address = $_POST ['email'];
$message = $_POST ['message'];

// create email body and send it
$to = 'mmzucchiatti@usimra.com.ar'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Formulario de contacto de OSPIM.COM.AR de:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Mesaje recibo de la pagina ospim.com.ar.\n\n" . "Detalle:\n\nNombre: $name\n\nTelefono: $phone\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@your-domain.com\n";
$headers .= "Reply-To: $email_address";
mail ( $to, $email_subject, $email_body, $headers );
return true;
?>