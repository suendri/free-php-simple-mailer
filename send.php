<?php 

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Send
{
	public function __construct($email_address, $email_subject, $email_message) {

		session_start();

		try {
			
			$mail = new PHPMailer(true);

			//$mail->SMTPDebug = 4;				// Debug
			$mail->isSMTP();
			$mail->SMTPAuth   = true;
			$mail->SMTPSecure = 'tls'; 				// ssl/tls
			$mail->Host       = 'smtp.mailtrap.io'; // hostname
			$mail->Port       = '2525';				// port
			$mail->Username   = '<isi>';			// username email
			$mail->Password   = '<isi>';			// passrword email

			//Recipients
			$mail->setFrom('suendri@gosoftware.web.id', 'Mailer Gosoftware Media');
			$mail->addAddress($email_address);

			// Content
			$mail->isHTML(true);
			$mail->Subject = $email_subject;
			$mail->Body    = $email_message;

			if ($mail->send()) {
				$_SESSION['email_sent'] = "Email Sent!";
			}
		} catch (Exception $e) {
				$_SESSION['email_fail'] =  "Message could not be sent! Mailer Error: {$mail->ErrorInfo}";
		}
	}
}
