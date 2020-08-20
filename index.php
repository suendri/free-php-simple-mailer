<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="keywords" content="sistem,crud,php,mailer,phpbego,gosoftware">
	<meta name="description" content="FREE SIMPLE MAILER">
	<meta name="author" content="Suendri">

	<title>PHP SIMPLE MAILER</title>
	<link href="assets/images/favicon.ico" rel="shortcut icon">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2 class="my-3 pb-3 border-bottom">PHP SIMPLE MAILER</h2>

		<div class="alert alert-info">
			<?php 
			session_start();

			if (isset($_SESSION['email_sent']) AND !empty($_SESSION['email_sent'])) {
				echo $_SESSION['email_sent'];
			}

			if (isset($_SESSION['email_fail']) AND !empty($_SESSION['email_fail'])) {
				echo $_SESSION['email_fail'];
			}

			session_destroy();
			?>
		</div>

		<form action="process.php" method="POST">
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" name="email_address" required="">
			</div>
			<div class="form-group">
				<label for="">Subject</label>
				<input type="text" class="form-control" name="email_subject" required="">
			</div>
			<div class="form-group">
				<label for="">Message</label>
				<textarea class="form-control" name="email_message" cols="30" rows="10" required=""></textarea>
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" name="send">
			</div>
		</form>
	</div>
	
	<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>