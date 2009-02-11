<?php
	$tab="about";
	require "includes/header.php";
	require "includes/smtp.php";
	
	# was the form submitted?
	if(isset($_POST['submit'])) {

		include("Mail.php");
		$mail = Mail::factory("smtp", array(
			"host"     => $smtp_host,
			"username" => $smtp_user,
			"password" => $smtp_pass,
			"auth"     => true,
		));
		
		$to = $smtp_to;
		$subject = "Mail from UNICEF Innovation";
		$name_field = $_POST["name"];
		$email_field = $_POST["email"];
		$message = $_POST["message"];
		
		$body = "From: $name_field\nE-Mail: $email_field\n\n$message";
		$mail->send($to, array("From" => $smtp_from, "Subject" => $subject), $body);
?>
<div id="content">
	<div class="nest">
<?
		if (PEAR::isError($mail)) { echo("<p>".$mail->getMessage()."</p>"); }
		else { echo("<p>Message successfully sent!</p>"); }
?>
	</div>
</div>
<?php
 } else {
?>
<div id="content">
	<div class="nest">
		<h2>Contact Us</h2>
		<form action="" method="post">
			<div>
				<label for="fm-name">Your Name</label>
				<input type="text" id="fm-name" name="name" />
			</div>
			<div>
				<label for="fm-email">Your Email</label>
				<input type="text" id="fm-email" name="email" />
			</div>
			<div>
				<label for="fm-message">Message</label>
				<textarea id="fm-message" name="message"></textarea>
			</div>
			<input type="submit" class="submit" name="submit" value="Submit" />
		</form>
	</div>
</div>
<?php
	}
	
	require "includes/footer.php"
?>
