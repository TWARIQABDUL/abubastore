<?php

		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$from = 'Contact Form'; 
		$to = 'bograhost@gmail.com'; 
		$subject = $_POST['subject']; 
		$headers = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();			
		
		$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";
	
    if($email!==NUL){
    	mail($to, $subject, $body, $headers);
    
    	header("location:thank-you.html");
	
    }
	
?>