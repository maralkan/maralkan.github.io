<?php
if($_POST['submit']) {
	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['comments'])) {
		$error = true;
	} else {
		$to = "marveen1520@gmail.com";

		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$comments = trim($_POST['comments']);

		$subject = "Contact Form";

		$messages = "Name: $name \r\n Email: $email \r\n Comments: $comments";
		$headers = "From" . $name;
		$mailsent = mail($to, $subject, $messages, $headers);

		if($mailsent) {
			$sent = true;
		}
	}
}
?>
<!DOCTYPE html PUBLIC "_//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Contact Form - Marvin Alcantara</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="css/c_styles.css">
</head>
<body>
	<div id="wrapper">
		<h1>Marvin's Contact Form</h1>
		<?php if($error == true) { ?>
		<p class="error">There was a missing field on the form. Please make sure you enter your details and comments in all the boxes provided. </p>
		<?php } if($sent == true) { ?>
		<p class="sent">Thank you. Your email has been sent successfully. We will do our best to reply within 24 hours!</p>
		<?php } ?>
		<div id="contactform">
			<form name="contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<label for="name">Name:</label>
				<input type="text" name="name" />
				<label for="email">Email:</label>
				<input type="email" name="email" />
				<label for="comments">Comments:</label>
				<textarea name="comments" cols="15" rows="10"></textarea>
				<input type="submit" name="submit" class="submit" value="Submit" />
			</form>
			<div style="clear:both;"></div>
		</div>
	</div>
</body>
</html>