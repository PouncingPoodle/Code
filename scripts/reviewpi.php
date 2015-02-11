<!-- rddebtcounselling.co.za REVIEW FORM -->
<!-- START SESSION -->

<?php
$mysqli = mysqli_connect("localhost", "rddebpwa_mar", "Pa55word?", "rddebpwa_counsellingd_db");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$firstname = $_POST['firstname'];
$firstname = mysqli_real_escape_string($mysqli, $firstname);
$firstname = $mysqli->real_escape_string($firstname);

$lastname = $_POST['lastname'];
$lastname = mysqli_real_escape_string($mysqli, $lastname);
$lastname = $mysqli->real_escape_string($lastname);

$cellphone = $_POST['cellphone'];
$cellphone = mysqli_real_escape_string($mysqli, $cellphone);
$cellphone = $mysqli->real_escape_string($cellphone);

$landline = $_POST['landline'];
$landline = mysqli_real_escape_string($mysqli, $landline);
$landline = $mysqli->real_escape_string($landline);

$email = $_POST['email'];
$email = mysqli_real_escape_string($mysqli, $email);
$email = $mysqli->real_escape_string($email);

$marital = $_POST['marital'];
$marital = mysqli_real_escape_string($mysqli, $marital);
$marital = $mysqli->real_escape_string($marital);

$kids = $_POST['kids'];
$kids = mysqli_real_escape_string($mysqli, $kids);
$kids = $mysqli->real_escape_string($kids);

$date = date("Y/m/d");

session_start(); 
$calculate = substr($lastname,0,2).substr($cellphone,4,7).substr($date,2,2).substr($firstname,0,1).substr($date,5,2).substr($date,8,2);
$_SESSION['personID'] = $calculate;

if ($mysqli->query("INSERT into reviewpi ( personID , date, 
firstname, lastname, cellphone, landline, email, marital, kids
) VALUES ( '{$_SESSION['personID']}' , '$date', 
'$firstname', '$lastname', '$cellphone', '$landline', '$email', '$marital', '$kids'
)")) {
	echo "<script type='text/javascript'>
	window.history.go(-1);
	</script>";
	};

$mysqli->close();
?>