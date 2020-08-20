<?php 

require_once 'send.php';

if (isset($_POST['send'])) {

	$email_address = $_POST['email_address'];
	$email_subject = $_POST['email_subject'];
	$email_message = $_POST['email_message'];

	$send = new Send($email_address, $email_subject, $email_message);
	header("location:index.php");
}