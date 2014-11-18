<?php
if($_POST)
{
	//check if its an ajax request, exit if not
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
        die();
    } 
	//$to_Email   	= "info@perceptionmm.com"; //Replace with recipient email address	
	$to_Email   	= "info@oneillhc.com"; //Replace with recipient email address


	$subject        = 'New Website Contact Form Request'; //Subject line for emails
	
	//check $_POST vars are set, exit if any missing
	if(!isset($_POST["userName"]) || !isset($_POST["userEmail"]) || !isset($_POST["userPhone"]) || !isset($_POST["userMessage"]))
	{
		die();
	}

	//Sanitize input data using PHP filter_var().

	$user_Name        = filter_var($_POST["userName"], FILTER_SANITIZE_STRING);
	$user_Email       = filter_var($_POST["userEmail"], FILTER_SANITIZE_EMAIL);
	$user_Phone       = filter_var($_POST["userPhone"], FILTER_SANITIZE_STRING);
	$user_Message     = filter_var($_POST["userMessage"], FILTER_SANITIZE_STRING);
	
	//additional php validation
	if(strlen($user_Name)<2) // If length is less than 3 it will throw an HTTP error.
	{
		header('HTTP/1.1 500 Name is too short or empty!');
		exit();
	}
	
	if(!filter_var($user_Email, FILTER_VALIDATE_EMAIL)) //email validation
	{
		header('HTTP/1.1 500 Please enter a valid email!');
		exit();
	}
	if(!is_numeric($user_Phone)) //check entered data is numbers
	{
		header('HTTP/1.1 500 Only numbers allowed in phone field');
		exit();
	}
	if(strlen($user_Message)<2) //check emtpy message
	{
		header('HTTP/1.1 500 Too short message! Please enter something.');
		exit();
	}
	
	//proceed with PHP email.
	$headers = 'From: '.$user_Email;

	$formcontent="
		From: $user_Name \n
		Email: $user_Email \n
		Phone: $user_Phone \n
		Message: $user_Message \n"; 
	
	@$sentMail = mail($to_Email, $subject, $formcontent, $headers);
	
	if(!$sentMail)
	{
		header('HTTP/1.1 500 Could not send mail! Sorry..');
		exit();
	}else{
		echo 'Hi '.$user_Name .', Thank you for reaching out to us. ';
		echo 'Our office will contact you as soon as possible.  If you need immediate assistance, please call us at 440.808.5500';
	}
}
?>