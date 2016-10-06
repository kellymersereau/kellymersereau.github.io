<?php
	if(isset($_POST["submit"])){
		$to = "kelly.mersereau@gmail.com";
		$from = $_POST['email']
		$first_name = $_POST['first-name'];
		$last_name = $_POST['last-name']

		$headers = "From:" . $from;
		$subject = "Contact Form Submission from Portfolio Site";
		$message = 'You received a message from ' .$first-name . " " . $last-name . "\n\n" . "Sender e-mail: " . $from . "\n\n" . "Message: " . "\n\n" . $_POST['message'];

		// message to be sent to person who sent message
		$headers2 = "From:" . $to;
		$subject2 = "Thank you for your email!";
		$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

		mail($to,$subject,$message,$headers);
		mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender

		//check if name has been entered
		
	}
