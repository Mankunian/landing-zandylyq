<?php
	if (isset($_POST['submit'])) {
		# code...
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$msg=$_POST['msg']

		$to='dias.07.04@gmail.com';
		$subject='Form Submission';
		$message="Name: ".$name."\n". "Wrote the following: "."\n\n".$msg;
		$headers="From: ".$email;


		if (mail($to, $subject, $message, $headers)) {
			# code...
			echo "<h1>Sent successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		} else {
			# code...
			echo "Something went wrong!"
		}

	
}
?>