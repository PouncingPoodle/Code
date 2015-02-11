<!-- rddebtcounselling.co.za REVIEW FORM -->
<!-- USE SESSION -->

<?php
$mysqli = mysqli_connect("localhost", "rddebpwa_mar", "Pa55word?", "rddebpwa_counsellingd_db");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
};

session_start();
$personID = $_SESSION['personID'];

$date = date("Y/m/d");

$debtcom1 = $_POST['debtcom1'];
$debtcom1 = mysqli_real_escape_string($mysqli, $debtcom1);
$debtcom1 = $mysqli->real_escape_string($debtcom1);

$bank1 = $_POST['bank1'];
$bank1 = mysqli_real_escape_string($mysqli, $bank1);
$bank1 = $mysqli->real_escape_string($bank1);

$repayment1 = $_POST['repayment1'];
$repayment1 = mysqli_real_escape_string($mysqli, $repayment1);
$repayment1 = $mysqli->real_escape_string($repayment1);

$outstanding1 = $_POST['outstanding1'];
$outstanding1 = mysqli_real_escape_string($mysqli, $outstanding1);
$outstanding1 = $mysqli->real_escape_string($outstanding1);

$debtcom2 = $_POST['debtcom2'];
$debtcom2 = mysqli_real_escape_string($mysqli, $debtcom2);
$debtcom2 = $mysqli->real_escape_string($debtcom2);

$bank2 = $_POST['bank2'];
$bank2 = mysqli_real_escape_string($mysqli, $bank2);
$bank2 = $mysqli->real_escape_string($bank2);

$repayment2 = $_POST['repayment2'];
$repayment2 = mysqli_real_escape_string($mysqli, $repayment2);
$repayment2 = $mysqli->real_escape_string($repayment2);

$outstanding2 = $_POST['outstanding2'];
$outstanding2 = mysqli_real_escape_string($mysqli, $outstanding2);
$outstanding2 = $mysqli->real_escape_string($outstanding2);


$vehicle1 = $_POST['vehicle1'];
$vehicle1 = mysqli_real_escape_string($mysqli, $vehicle1);
$vehicle1 = $mysqli->real_escape_string($vehicle1);

$vbank1 = $_POST['vbank1'];
$vbank1 = mysqli_real_escape_string($mysqli, $vbank1);
$vbank1 = $mysqli->real_escape_string($vbank1);

$vrepayment1 = $_POST['vrepayment1'];
$vrepayment1 = mysqli_real_escape_string($mysqli, $vrepayment1);
$vrepayment1 = $mysqli->real_escape_string($vrepayment1);

$voutstanding1 = $_POST['voutstanding1'];
$voutstanding1 = mysqli_real_escape_string($mysqli, $voutstanding1);
$voutstanding1 = $mysqli->real_escape_string($voutstanding1);

$vehicle2 = $_POST['vehicle2'];
$vehicle2 = mysqli_real_escape_string($mysqli, $vehicle2);
$vehicle2 = $mysqli->real_escape_string($vehicle2);

$vbank2 = $_POST['vbank2'];
$vbank2 = mysqli_real_escape_string($mysqli, $vbank2);
$vbank2 = $mysqli->real_escape_string($vbank2);

$vrepayment2 = $_POST['vrepayment2'];
$vrepayment2 = mysqli_real_escape_string($mysqli, $vrepayment2);
$vrepayment2 = $mysqli->real_escape_string($vrepayment2);

$voutstanding2 = $_POST['voutstanding2'];
$voutstanding2 = mysqli_real_escape_string($mysqli, $voutstanding2);
$voutstanding2 = $mysqli->real_escape_string($voutstanding2);

$vehicle3 = $_POST['vehicle3'];
$vehicle3 = mysqli_real_escape_string($mysqli, $vehicle3);
$vehicle3 = $mysqli->real_escape_string($vehicle3);

$vbank3 = $_POST['vbank3'];
$vbank3 = mysqli_real_escape_string($mysqli, $vbank3);
$vbank3 = $mysqli->real_escape_string($vbank3);

$vrepayment3 = $_POST['vrepayment3'];
$vrepayment3 = mysqli_real_escape_string($mysqli, $vrepayment3);
$vrepayment3 = $mysqli->real_escape_string($vrepayment3);

$voutstanding3 = $_POST['voutstanding3'];
$voutstanding3 = mysqli_real_escape_string($mysqli, $voutstanding3);
$voutstanding3 = $mysqli->real_escape_string($voutstanding3);


$oaccounts1 = $_POST['oaccounts1'];
$oaccounts1 = mysqli_real_escape_string($mysqli, $oaccounts1);
$oaccounts1 = $mysqli->real_escape_string($oaccounts1);

$obank1 = $_POST['obank1'];
$obank1 = mysqli_real_escape_string($mysqli, $obank1);
$obank1 = $mysqli->real_escape_string($obank1);

$orepayments1 = $_POST['orepayments1'];
$orepayments1 = mysqli_real_escape_string($mysqli, $orepayments1);
$orepayments1 = $mysqli->real_escape_string($orepayments1);

$ooutstanding1 = $_POST['ooutstanding1'];
$ooutstanding1 = mysqli_real_escape_string($mysqli, $ooutstanding1);
$ooutstanding1 = $mysqli->real_escape_string($ooutstanding1);

$oaccounts2 = $_POST['oaccounts2'];
$oaccounts2 = mysqli_real_escape_string($mysqli, $oaccounts2);
$oaccounts2 = $mysqli->real_escape_string($oaccounts2);

$obank2 = $_POST['obank2'];
$obank2 = mysqli_real_escape_string($mysqli, $obank2);
$obank2 = $mysqli->real_escape_string($obank2);

$orepayments2 = $_POST['orepayments2'];
$orepayments2 = mysqli_real_escape_string($mysqli, $orepayments2);
$orepayments2 = $mysqli->real_escape_string($orepayments2);

$ooutstanding2 = $_POST['ooutstanding2'];
$ooutstanding2 = mysqli_real_escape_string($mysqli, $ooutstanding2);
$ooutstanding2 = $mysqli->real_escape_string($ooutstanding2);

$oaccounts3 = $_POST['oaccounts3'];
$oaccounts3 = mysqli_real_escape_string($mysqli, $oaccounts3);
$oaccounts3 = $mysqli->real_escape_string($oaccounts3);

$obank3 = $_POST['obank3'];
$obank3 = mysqli_real_escape_string($mysqli, $obank3);
$obank3 = $mysqli->real_escape_string($obank3);

$orepayments3 = $_POST['orepayments3'];
$orepayments3 = mysqli_real_escape_string($mysqli, $orepayments3);
$orepayments3 = $mysqli->real_escape_string($orepayments3);

$ooutstanding3 = $_POST['ooutstanding3'];
$ooutstanding3 = mysqli_real_escape_string($mysqli, $ooutstanding3);
$ooutstanding3 = $mysqli->real_escape_string($ooutstanding3);

$oaccounts4 = $_POST['oaccounts4'];
$oaccounts4 = mysqli_real_escape_string($mysqli, $oaccounts4);
$oaccounts4 = $mysqli->real_escape_string($oaccounts4);

$obank4 = $_POST['obank4'];
$obank4 = mysqli_real_escape_string($mysqli, $obank4);
$obank4 = $mysqli->real_escape_string($obank4);

$orepayments4 = $_POST['orepayments4'];
$orepayments4 = mysqli_real_escape_string($mysqli, $orepayments4);
$orepayments4 = $mysqli->real_escape_string($orepayments4);

$ooutstanding4 = $_POST['ooutstanding4'];
$ooutstanding4 = mysqli_real_escape_string($mysqli, $ooutstanding4);
$ooutstanding4 = $mysqli->real_escape_string($ooutstanding4);

$oaccounts5 = $_POST['oaccounts5'];
$oaccounts5 = mysqli_real_escape_string($mysqli, $oaccounts5);
$oaccounts5 = $mysqli->real_escape_string($oaccounts5);

$obank5 = $_POST['obank5'];
$obank5 = mysqli_real_escape_string($mysqli, $obank5);
$obank5 = $mysqli->real_escape_string($obank5);

$orepayments5 = $_POST['orepayments5'];
$orepayments5 = mysqli_real_escape_string($mysqli, $orepayments5);
$orepayments5 = $mysqli->real_escape_string($orepayments5);

$ooutstanding5 = $_POST['ooutstanding5'];
$ooutstanding5 = mysqli_real_escape_string($mysqli, $ooutstanding5);
$ooutstanding5 = $mysqli->real_escape_string($ooutstanding5);

$oaccounts6 = $_POST['oaccounts6'];
$oaccounts6 = mysqli_real_escape_string($mysqli, $oaccounts6);
$oaccounts6 = $mysqli->real_escape_string($oaccounts6);

$obank6 = $_POST['obank6'];
$obank6 = mysqli_real_escape_string($mysqli, $obank6);
$obank6 = $mysqli->real_escape_string($obank6);

$orepayments6 = $_POST['orepayments6'];
$orepayments6 = mysqli_real_escape_string($mysqli, $orepayments6);
$orepayments6 = $mysqli->real_escape_string($orepayments6);

$ooutstanding6 = $_POST['ooutstanding6'];
$ooutstanding6 = mysqli_real_escape_string($mysqli, $ooutstanding6);
$ooutstanding6 = $mysqli->real_escape_string($ooutstanding6);

$oaccounts7 = $_POST['oaccounts7'];
$oaccounts7 = mysqli_real_escape_string($mysqli, $oaccounts7);
$oaccounts7 = $mysqli->real_escape_string($oaccounts7);

$obank7 = $_POST['obank7'];
$obank7 = mysqli_real_escape_string($mysqli, $obank7);
$obank7 = $mysqli->real_escape_string($obank7);

$orepayments7 = $_POST['orepayments7'];
$orepayments7 = mysqli_real_escape_string($mysqli, $orepayments7);
$orepayments7 = $mysqli->real_escape_string($orepayments7);

$ooutstanding7 = $_POST['ooutstanding7'];
$ooutstanding7 = mysqli_real_escape_string($mysqli, $ooutstanding7);
$ooutstanding7 = $mysqli->real_escape_string($ooutstanding7);

$oaccounts8 = $_POST['oaccounts8'];
$oaccounts8 = mysqli_real_escape_string($mysqli, $oaccounts8);
$oaccounts8 = $mysqli->real_escape_string($oaccounts8);

$obank8 = $_POST['obank8'];
$obank8 = mysqli_real_escape_string($mysqli, $obank8);
$obank8 = $mysqli->real_escape_string($obank8);

$orepayments8 = $_POST['orepayments8'];
$orepayments8 = mysqli_real_escape_string($mysqli, $orepayments8);
$orepayments8 = $mysqli->real_escape_string($orepayments8);

$ooutstanding8 = $_POST['ooutstanding8'];
$ooutstanding8 = mysqli_real_escape_string($mysqli, $ooutstanding8);
$ooutstanding8 = $mysqli->real_escape_string($ooutstanding8);

$oaccounts9 = $_POST['oaccounts9'];
$oaccounts9 = mysqli_real_escape_string($mysqli, $oaccounts9);
$oaccounts9 = $mysqli->real_escape_string($oaccounts9);

$obank9 = $_POST['obank9'];
$obank9 = mysqli_real_escape_string($mysqli, $obank9);
$obank9 = $mysqli->real_escape_string($obank9);

$orepayments9 = $_POST['orepayments9'];
$orepayments9 = mysqli_real_escape_string($mysqli, $orepayments9);
$orepayments9 = $mysqli->real_escape_string($orepayments9);

$ooutstanding9 = $_POST['ooutstanding9'];
$ooutstanding9 = mysqli_real_escape_string($mysqli, $ooutstanding9);
$ooutstanding9 = $mysqli->real_escape_string($ooutstanding9);

$oaccounts10 = $_POST['oaccounts10'];
$oaccounts10 = mysqli_real_escape_string($mysqli, $oaccounts10);
$oaccounts10 = $mysqli->real_escape_string($oaccounts10);

$obank10 = $_POST['obank10'];
$obank10 = mysqli_real_escape_string($mysqli, $obank10);
$obank10 = $mysqli->real_escape_string($obank10);

$orepayments10 = $_POST['orepayments10'];
$orepayments10 = mysqli_real_escape_string($mysqli, $orepayments10);
$orepayments10 = $mysqli->real_escape_string($orepayments10);

$ooutstanding10 = $_POST['ooutstanding10'];
$ooutstanding10 = mysqli_real_escape_string($mysqli, $ooutstanding10);
$ooutstanding10 = $mysqli->real_escape_string($ooutstanding10);

$oaccounts11 = $_POST['oaccounts11'];
$oaccounts11 = mysqli_real_escape_string($mysqli, $oaccounts11);
$oaccounts11 = $mysqli->real_escape_string($oaccounts11);

$obank11 = $_POST['obank11'];
$obank11 = mysqli_real_escape_string($mysqli, $obank11);
$obank11 = $mysqli->real_escape_string($obank11);

$orepayments11 = $_POST['orepayments11'];
$orepayments11 = mysqli_real_escape_string($mysqli, $orepayments11);
$orepayments11 = $mysqli->real_escape_string($orepayments11);

$ooutstanding11 = $_POST['ooutstanding11'];
$ooutstanding11 = mysqli_real_escape_string($mysqli, $ooutstanding11);
$ooutstanding11 = $mysqli->real_escape_string($ooutstanding11);

$oaccounts12 = $_POST['oaccounts12'];
$oaccounts12 = mysqli_real_escape_string($mysqli, $oaccounts12);
$oaccounts12 = $mysqli->real_escape_string($oaccounts12);

$obank12 = $_POST['obank12'];
$obank12 = mysqli_real_escape_string($mysqli, $obank12);
$obank12 = $mysqli->real_escape_string($obank12);

$orepayments12 = $_POST['orepayments12'];
$orepayments12 = mysqli_real_escape_string($mysqli, $orepayments12);
$orepayments12 = $mysqli->real_escape_string($orepayments12);

$ooutstanding12 = $_POST['ooutstanding12'];
$ooutstanding12 = mysqli_real_escape_string($mysqli, $ooutstanding12);
$ooutstanding12 = $mysqli->real_escape_string($ooutstanding12);


if ($mysqli->query("INSERT into reviewdc ( 
personID , date , 
debtcom1 , bank1 , repayment1 , outstanding1 , 
debtcom2 , bank2 , repayment2 , outstanding2 , 
vehicle1 , vbank1 , vrepayment1 , voutstanding1 , 
vehicle2 , vbank2 , vrepayment2 , voutstanding2 , 
vehicle3 , vbank3 , vrepayment3 , voutstanding3 , 
oaccounts1 , obank1 , orepayments1 , ooutstanding1 , 
oaccounts2 , obank2 , orepayments2 , ooutstanding2 , 
oaccounts3 , obank3 , orepayments3 , ooutstanding3 , 
oaccounts4 , obank4 , orepayments4 , ooutstanding4 , 
oaccounts5 , obank5 , orepayments5 , ooutstanding5 , 
oaccounts6 , obank6 , orepayments6 , ooutstanding6 , 
oaccounts7 , obank7 , orepayments7 , ooutstanding7 , 
oaccounts8 , obank8 , orepayments8 , ooutstanding8 , 
oaccounts9 , obank9 , orepayments9 ,  ooutstanding9 , 
oaccounts10 , obank10 , orepayments10 , ooutstanding10 , 
oaccounts11 , obank11 , orepayments11 , ooutstanding11 , 
oaccounts12 , obank12 , orepayments12 , ooutstanding12
) VALUES (
'{$_SESSION['personID']}' , '$date' , 
'$debtcom1' , '$bank1' , '$repayment1' , '$outstanding1' , 
'$debtcom2' , '$bank2' , '$repayment2' , '$outstanding2' , 
'$vehicle1' , '$vbank1' , '$vrepayment1' , '$voutstanding1' , 
'$vehicle2' , '$vbank2' , '$vrepayment2' , '$voutstanding2' , 
'$vehicle3' , '$vbank3' , '$vrepayment3' , '$voutstanding3' , 
'$oaccounts1' , '$obank1' , '$orepayments1' , '$ooutstanding1' , 
'$oaccounts2' , '$obank2' , '$orepayments2' , '$ooutstanding2' , 
'$oaccounts3' , '$obank3' , '$orepayments3' , '$ooutstanding3' , 
'$oaccounts4' , '$obank4' , '$orepayments4' , '$ooutstanding4' , 
'$oaccounts5' , '$obank5' , '$orepayments5' , '$ooutstanding5' , 
'$oaccounts6' , '$obank6' , '$orepayments6' , '$ooutstanding6' , 
'$oaccounts7' , '$obank7' , '$orepayments7' , '$ooutstanding7' , 
'$oaccounts8' , '$obank8' , '$orepayments8' , '$ooutstanding8' , 
'$oaccounts9' , '$obank9' , '$orepayments9' ,  '$ooutstanding9' , 
'$oaccounts10' , '$obank10' , '$orepayments10' , '$ooutstanding10' , 
'$oaccounts11' , '$obank11' , '$orepayments11' , '$ooutstanding11' , 
'$oaccounts12' , '$obank12' , '$orepayments12' , '$ooutstanding12'
)")) {
	echo "<script type='text/javascript'>
	window.history.go(-1);
	</script>";
	};

$mysqli->close();

?>