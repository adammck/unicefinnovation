<?php
	$tab="about";
	require "includes/header.php";

	# was the form submitted?
	if(isset($_POST['submit'])) {

		$to = "support@mepemepe.com";
		$subject = "Mail from UNICEF Innovation";
		$name_field = $_POST['name'];
		$email_field = $_POST['email'];
		$message = $_POST['message'];
		 
		$body = "From: $name_field\n E-Mail: $email_field\n Message:\n $message";
		mail($to, $subject, $body);
?>
<div id="content">
	<div class="nest">
		Your message was sent
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
