<?php
// SYNTAX ERROR HERE $headers .= 'Access-Control-Allow-Methods', 'GET, POST, OPTIONS'

$receiver = $_POST['receiver'];          //PROVIDE YOUR EMAIL ADDRESS IN HTML CONTACT FORM SECTION CHANGE value="admin@mail.com"
$subject = $_POST['subject'];            //PROVIDE THE SUBJECT OF THE EMAIL IN HTML CONTACT FORM SECTION CHANGE value="contactform"



$name = $_POST['name'];
$email = $_POST['email'];
$mail_message = $_POST['message'];


$message = "<br/>Name: " . $name .
	"<br/>Email: " . $email ;

/* GIVES DATE NOT SAFE WARNING

$message .= "<br/>Message: " . $mail_message .
	"<br/><br/><br/>Date: " . date("Y-m-d h:i:s");
*/

$message .= "<br/>Message: " . $mail_message .
            	"<br/><br/><br/>";
$siteEmail = $receiver;
$emailTitle = $subject;
$thankYouMessage = "Thank you for contacting us, we'll get back to you shortly.";  
$err_msg =  'Our human error. It happens, please try again.';


$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .='From: ' . $name . ' <' . $email . '>';

echo "success";

/* BUG IN HERE SOMEWHERE

if($_POST['website_url'] == '')
{
	if(mail('chantel@humanpaste.com', 'test', 'test', $headers))
		{ echo 'success'; }
	else { echo 'error'; }
}
else
{
	echo 'error';
}
*/

?>
