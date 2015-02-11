<!-- rddebtcounselling.co.za CALL BACK FORM (footer) -->
<!-- Adds to database, alert message and email info -->

<?php
$mysqli = mysqli_connect("localhost", "root", "", "rddebpwa_counsellingd_db");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$namesurname = $_POST['namesurname'];
$namesurname = mysqli_real_escape_string($mysqli, $namesurname);

$email = $_POST['email'];
$email = mysqli_real_escape_string($mysqli, $email);

$phone = $_POST['phone'];
$phone = mysqli_real_escape_string($mysqli, $phone);

$namesurname = $mysqli->real_escape_string($namesurname);
$email = $mysqli->real_escape_string($email);
$phone = $mysqli->real_escape_string($phone);

$date = date("Y/m/d");

if ($mysqli->query("INSERT into callback_tbl (date, namesurname, email, phone) VALUES ('$date', '$namesurname', '$email', '$phone')")) {
	echo "<script type='text/javascript'>
	alert('Thank you, we will contact you as soon as possible'); 
	window.history.go(-1);
	</script>";
	
	$email_message = 	"The following message is from the rddebtcounselling.co.za callback form" . "\n" .
						"Date: " . $date . "\n" . 
						"Name and Surname: " . $namesurname . "\n" .
						"Email: " . $email . "\n" .
						"Phone: " . $phone
						;
	
	$subject = "A message from the rddebtcounselling.co.za callback form";
	
    // send mail
    mail("130002@virtualwindow.co.za",$subject,$email_message,"From: callbackform@rddebtcounselling.co.za");

	};

$mysqli->close();
?>