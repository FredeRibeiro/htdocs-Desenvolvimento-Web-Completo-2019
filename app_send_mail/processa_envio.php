<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require 'bibliotecas/PHPMailer/Exception.php';
require 'bibliotecas/PHPMailer/OAuth.php';
require 'bibliotecas/PHPMailer/PHPMailer.php';
require 'bibliotecas/PHPMailer/POP3.php';
require 'bibliotecas/PHPMailer/SMTP.php';

class Mensagem {
	private $para = null;
	private $assunto = null;
	private $mensagem = null;

	//-------------Get an Setter--------//
	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		return $this->$atributo = $valor;
	}

	//---------------------------------//

	public function mensagemValida() {
		if (empty($this->para) || empty($this->assunto) || empty($this->mensagem)) {
			return false;
		}

		return true;
	}

}

$mensagem = new Mensagem();

$mensagem->__set('para', $_POST['para']);
$mensagem->__set('assunto', $_POST['assunto']);
$mensagem->__set('mensagem', $_POST['mensagem']);

//print_r($mensagem);
//
if (!$mensagem->mensagemValida()) {
	echo 'Mensagem Válida';
	die();
}
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
	//Server settings
	$mail->SMTPDebug = 2; // Enable verbose debug output
	$mail->isSMTP(); // Set mailer to use SMTP
	$mail->Host = 'smtp1.example.com;smtp2.example.com'; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'fredericolimaribeiro@gmail.com'; // SMTP username
	$mail->Password = '30frede1089'; // SMTP password
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption, `PHPMailer::ENCRYPTION_SMTPS` also accepted
	$mail->Port = 587; // TCP port to connect to

	//Recipients
	$mail->setFrom('from@example.com', 'Mailer');
	$mail->addAddress('joe@example.net', 'Joe User'); // Add a recipient
	$mail->addAddress('ellen@example.com'); // Name is optional
	$mail->addReplyTo('info@example.com', 'Information');
	$mail->addCC('cc@example.com');
	$mail->addBCC('bcc@example.com');

	// Attachments
	$mail->addAttachment('/var/tmp/file.tar.gz'); // Add attachments
	$mail->addAttachment('/tmp/image.jpg', 'new.jpg'); // Optional name

	// Content
	$mail->isHTML(true); // Set email format to HTML
	$mail->Subject = 'Here is the subject';
	$mail->Body = 'This is the HTML message body <b>in bold!</b>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	$mail->send();
	echo 'Message has been sent';
} catch (Exception $e) {
	echo "Não foi possivel enviar este e-mail! Por favor tente novamente mais tarde!<br>";
	echo "Detalhes do erro: {$mail->ErrorInfo}";
}
?>