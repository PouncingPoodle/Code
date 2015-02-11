<!-- rddebtcounselling.co.za CONTACT FORM (sidebar) -->
<!-- Adds to database, alert message and email info -->

<?php
$mysqli = mysqli_connect("localhost", "root", "", "rddebpwa_counsellingd_db");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$firstname = $_POST['firstname'];
$firstname = mysqli_real_escape_string($mysqli, $firstname);

$lastname = $_POST['lastname'];
$lastname = mysqli_real_escape_string($mysqli, $lastname);

$email = $_POST['email'];
$email = mysqli_real_escape_string($mysqli, $email);

$phone = $_POST['phone'];
$phone = mysqli_real_escape_string($mysqli, $phone);

$time = $_POST['time'];
$time = mysqli_real_escape_string($mysqli, $time);

$message = $_POST['message'];
$message = mysqli_real_escape_string($mysqli, $message);

$checkbox = $_POST['checkbox'];
$checkbox = mysqli_real_escape_string($mysqli, $checkbox);

$firstname = $mysqli->real_escape_string($firstname);
$lastname = $mysqli->real_escape_string($lastname);
$email = $mysqli->real_escape_string($email);
$phone = $mysqli->real_escape_string($phone);
$time = $mysqli->real_escape_string($time);
$message = $mysqli->real_escape_string($message);
$checkbox = $mysqli->real_escape_string($checkbox);

$date = date("Y/m/d");

if ($checkbox != 1 ) {
	$check = "No";
} else {
	$check = "Yes";
};

if ($mysqli->query("INSERT into contact_tbl (date, firstname, lastname, email, phone, time, message, checkbox) VALUES ('$date', '$firstname', '$lastname', '$email', '$phone', '$time', '$message', '$check')")) {
    echo "<script type='text/javascript'>
	alert('Thank you, we will contact you as soon as possible'); 
	window.history.go(-1);
	</script>";
    	// send mail
		$email_message = 	"The following message is from the rddebtcounselling.co.za contact form" . "\n" .
						"Date: " . $date . "\n" . 
						"Firstname: " . $firstname . "\n" .
						"Lastname: " . $lastname . "\n" .
						"Email address: " . $email . "\n" .
						"Phone number: " . $phone . "\n" .
						"Best contact time: " . $time . "\n" .
						"Message: " . $message . "\n" .
						"Allow email sending: " . $check . "\n" 
						;
	$subject = "A message from the rddebtcounselling.co.za contact form";
    mail("130002@virtualwindow.co.za",$subject,$email_message,"From: contactform@rddebtcounselling.co.za");

};

$mysqli->close();
?>