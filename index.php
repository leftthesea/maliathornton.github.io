<!DOCTYPE html>
<html>
<head></head>

<body>
  // Used for the contact form
	<?php
		if(isset($_POST['submit'])) {
		$to = "maliathornton@gmail.com";
		$subject = "Hello!";
		 
		// data the visitor provided
		$name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
		$comments = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
		 
		//constructing the message
		$body = " From: $name\n\n E-Mail: $email\n\n Message:\n\n $comment";
		 
		// ...and away we go!
		mail($to, $subject, $body);
		 
		// redirect to confirmation
		header('Location: contact.htm');
		print "Thank you! Your message has been sent.";
		} else {
		print "There was an error somewhere. Please try again.";
		}
	?>

</body>
</html>
