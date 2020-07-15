<?php 

if (isset($_Post['submit'])) {
	$name = $_Post['name'];
	$subject = $_Post['subject'];
	$mailFrom = $_Post['mail'];
	$message = $_Post['message'];

	$mailTo ="Radu.intuneric@ryerson.ca";
	$headers = "From: ".$mailFrom;
	$txt = "You have a recived a new email from ".$name.".\n\n".$message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsend");
}



?>