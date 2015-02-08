<!DOCTYPE html PUBLIC "_//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Marvin A Contact Form</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="styles.css">
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
			<form name="contact" action"<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
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
