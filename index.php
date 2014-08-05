<!DOCTYPE html>
<html>
<head></head>

<body>
  // Used for the contact form
	<?php
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $comments = $_POST['comments'];
	    $from = 'From: Portfolio of Malia Thornton'; 
	    $to = 'maliathornton@gmail.com'; 
	    $subject = 'Hello!';
	    $human = $_POST['human'];
				
	    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
					
	    if ($_POST['submit']) {				 
	        if (mail ($to, $subject, $body, $from)) { 
		    print '<p>Your message has been sent!</p>';
		} else { 
		    print '<p>Something went wrong, go back and try again!</p>'; 
		} 
	    } 
	?>

</body>
</html>
