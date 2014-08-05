<!DOCTYPE html>
<html>
<head></head>

<body>
  <!-- PHP used to make the form functional -->
	<?php
	    $name = $_POST['name'];
	    $email = $_POST['email'];
	    $comments = $_POST['comments'];
	    $from = 'From: TangledDemo'; 
	    $to = 'contact@tangledindesign.com'; 
	    $subject = 'Hello';
	    $human = $_POST['human'];
				
	    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
					
	    if ($_POST['submit'] && $human == '4') {				 
	        if (mail ($to, $subject, $body, $from)) { 
		    print '<p>Your message has been sent!</p>';
		} else { 
		    print '<p>Something went wrong, go back and try again!</p>'; 
		} 
	    } 
	?>

</body>
</html>
