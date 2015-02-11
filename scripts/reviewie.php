<!-- rddebtcounselling.co.za REVIEW FORM -->
<!-- USE SESSION -->

<?php
$mysqli = mysqli_connect("localhost", "rddebpwa_mar", "Pa55word?", "rddebpwa_counsellingd_db");
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

session_start();
$personID = $_SESSION['personID'];

$date = date("Y/m/d");

$iclient1 = $_POST['iclient1'];
$iclient1 = mysqli_real_escape_string($mysqli, $iclient1);
$iclient1 = $mysqli->real_escape_string($iclient1);

$ispouse1 = $_POST['ispouse1'];
$ispouse1 = mysqli_real_escape_string($mysqli, $ispouse1);
$ispouse1 = $mysqli->real_escape_string($ispouse1);

$iclient2 = $_POST['iclient2'];
$iclient2 = mysqli_real_escape_string($mysqli, $iclient2);
$iclient2 = $mysqli->real_escape_string($iclient2);

$ispouse2 = $_POST['ispouse2'];
$ispouse2 = mysqli_real_escape_string($mysqli, $ispouse2);
$ispouse2 = $mysqli->real_escape_string($ispouse2);

$iclient3 = $_POST['iclient3'];
$iclient3 = mysqli_real_escape_string($mysqli, $iclient3);
$iclient3 = $mysqli->real_escape_string($iclient3);

$ispouse3 = $_POST['ispouse3'];
$ispouse3 = mysqli_real_escape_string($mysqli, $ispouse3);
$ispouse3 = $mysqli->real_escape_string($ispouse3);


$eclient1 = $_POST['eclient1'];
$eclient1 = mysqli_real_escape_string($mysqli, $eclient1);
$eclient1 = $mysqli->real_escape_string($eclient1);

$espouse1 = $_POST['espouse1'];
$espouse1 = mysqli_real_escape_string($mysqli, $espouse1);
$espouse1 = $mysqli->real_escape_string($espouse1);

$eclient2 = $_POST['eclient2'];
$eclient2 = mysqli_real_escape_string($mysqli, $eclient2);
$eclient2 = $mysqli->real_escape_string($eclient2);

$espouse2 = $_POST['espouse2'];
$espouse2 = mysqli_real_escape_string($mysqli, $espouse2);
$espouse2 = $mysqli->real_escape_string($espouse2);

$eclient3 = $_POST['eclient3'];
$eclient3 = mysqli_real_escape_string($mysqli, $eclient3);
$eclient3 = $mysqli->real_escape_string($eclient3);

$espouse3 = $_POST['espouse3'];
$espouse3 = mysqli_real_escape_string($mysqli, $espouse3);
$espouse3 = $mysqli->real_escape_string($espouse3);

$eclient4 = $_POST['eclient4'];
$eclient4 = mysqli_real_escape_string($mysqli, $eclient4);
$eclient4 = $mysqli->real_escape_string($eclient4);

$espouse4 = $_POST['espouse4'];
$espouse4 = mysqli_real_escape_string($mysqli, $espouse4);
$espouse4 = $mysqli->real_escape_string($espouse4);

$eclient5 = $_POST['eclient5'];
$eclient5 = mysqli_real_escape_string($mysqli, $eclient5);
$eclient5 = $mysqli->real_escape_string($eclient5);

$espouse5 = $_POST['espouse5'];
$espouse5 = mysqli_real_escape_string($mysqli, $espouse5);
$espouse5 = $mysqli->real_escape_string($espouse5);

$eclient6 = $_POST['eclient6'];
$eclient6 = mysqli_real_escape_string($mysqli, $eclient6);
$eclient6 = $mysqli->real_escape_string($eclient6);

$espouse6 = $_POST['espouse6'];
$espouse6 = mysqli_real_escape_string($mysqli, $espouse6);
$espouse6 = $mysqli->real_escape_string($espouse6);

$eclient7 = $_POST['eclient7'];
$eclient7 = mysqli_real_escape_string($mysqli, $eclient7);
$eclient7 = $mysqli->real_escape_string($eclient7);

$espouse7 = $_POST['espouse7'];
$espouse7 = mysqli_real_escape_string($mysqli, $espouse7);
$espouse7 = $mysqli->real_escape_string($espouse7);

$eclient8 = $_POST['eclient8'];
$eclient8 = mysqli_real_escape_string($mysqli, $eclient8);
$eclient8 = $mysqli->real_escape_string($eclient8);

$espouse8 = $_POST['espouse8'];
$espouse8 = mysqli_real_escape_string($mysqli, $espouse8);
$espouse8 = $mysqli->real_escape_string($espouse8);

$eclient9 = $_POST['eclient9'];
$eclient9 = mysqli_real_escape_string($mysqli, $eclient9);
$eclient9 = $mysqli->real_escape_string($eclient9);

$espouse9 = $_POST['espouse9'];
$espouse9 = mysqli_real_escape_string($mysqli, $espouse9);
$espouse9 = $mysqli->real_escape_string($espouse9);

$eclient10 = $_POST['eclient10'];
$eclient10 = mysqli_real_escape_string($mysqli, $eclient10);
$eclient10 = $mysqli->real_escape_string($eclient10);

$espouse10 = $_POST['espouse10'];
$espouse10 = mysqli_real_escape_string($mysqli, $espouse10);
$espouse10 = $mysqli->real_escape_string($espouse10);

$eclient11 = $_POST['eclient11'];
$eclient11 = mysqli_real_escape_string($mysqli, $eclient11);
$eclient11 = $mysqli->real_escape_string($eclient11);

$espouse11 = $_POST['espouse11'];
$espouse11 = mysqli_real_escape_string($mysqli, $espouse11);
$espouse11 = $mysqli->real_escape_string($espouse11);

$eclient12 = $_POST['eclient12'];
$eclient12 = mysqli_real_escape_string($mysqli, $eclient12);
$eclient12 = $mysqli->real_escape_string($eclient12);

$espouse12 = $_POST['espouse12'];
$espouse12 = mysqli_real_escape_string($mysqli, $espouse12);
$espouse12 = $mysqli->real_escape_string($espouse12);

$eclient13 = $_POST['eclient13'];
$eclient13 = mysqli_real_escape_string($mysqli, $eclient13);
$eclient13 = $mysqli->real_escape_string($eclient13);

$espouse13 = $_POST['espouse13'];
$espouse13 = mysqli_real_escape_string($mysqli, $espouse13);
$espouse13 = $mysqli->real_escape_string($espouse13);

$eclient14 = $_POST['eclient14'];
$eclient14 = mysqli_real_escape_string($mysqli, $eclient14);
$eclient14 = $mysqli->real_escape_string($eclient14);

$espouse14 = $_POST['espouse14'];
$espouse14 = mysqli_real_escape_string($mysqli, $espouse14);
$espouse14 = $mysqli->real_escape_string($espouse14);

$eclient15 = $_POST['eclient15'];
$eclient15 = mysqli_real_escape_string($mysqli, $eclient15);
$eclient15 = $mysqli->real_escape_string($eclient15);

$espouse15 = $_POST['espouse15'];
$espouse15 = mysqli_real_escape_string($mysqli, $espouse15);
$espouse15 = $mysqli->real_escape_string($espouse15);

$eclient16 = $_POST['eclient16'];
$eclient16 = mysqli_real_escape_string($mysqli, $eclient16);
$eclient16 = $mysqli->real_escape_string($eclient16);

$espouse16 = $_POST['espouse16'];
$espouse16 = mysqli_real_escape_string($mysqli, $espouse16);
$espouse16 = $mysqli->real_escape_string($espouse16);

$eclient17 = $_POST['eclient17'];
$eclient17 = mysqli_real_escape_string($mysqli, $eclient17);
$eclient17 = $mysqli->real_escape_string($eclient17);

$espouse17 = $_POST['espouse17'];
$espouse17 = mysqli_real_escape_string($mysqli, $espouse17);
$espouse17 = $mysqli->real_escape_string($espouse17);

$eclient18 = $_POST['eclient18'];
$eclient18 = mysqli_real_escape_string($mysqli, $eclient18);
$eclient18 = $mysqli->real_escape_string($eclient18);

$espouse18 = $_POST['espouse18'];
$espouse18 = mysqli_real_escape_string($mysqli, $espouse18);
$espouse18 = $mysqli->real_escape_string($espouse18);

$eclient19 = $_POST['eclient19'];
$eclient19 = mysqli_real_escape_string($mysqli, $eclient19);
$eclient19 = $mysqli->real_escape_string($eclient19);

$espouse19 = $_POST['espouse19'];
$espouse19 = mysqli_real_escape_string($mysqli, $espouse19);
$espouse19 = $mysqli->real_escape_string($espouse19);

$eclient20 = $_POST['eclient20'];
$eclient20 = mysqli_real_escape_string($mysqli, $eclient20);
$eclient20 = $mysqli->real_escape_string($eclient20);

$espouse20 = $_POST['espouse20'];
$espouse20 = mysqli_real_escape_string($mysqli, $espouse20);
$espouse20 = $mysqli->real_escape_string($espouse20);

if ($mysqli->query("INSERT into reviewie ( personID , date, 
iclient1, ispouse1, 
iclient2, ispouse2, 
iclient3, ispouse3, 
eclient1, espouse1, 
eclient2, espouse2, 
eclient3, espouse3, 
eclient4, espouse4, 
eclient5, espouse5, 
eclient6, espouse6, 
eclient7, espouse7, 
eclient8, espouse8, 
eclient9, espouse9, 
eclient10, espouse10, 
eclient11, espouse11, 
eclient12, espouse12, 
eclient13, espouse13, 
eclient14, espouse14, 
eclient15, espouse15, 
eclient16, espouse16, 
eclient17, espouse17, 
eclient18, espouse18, 
eclient19, espouse19, 
eclient20, espouse20 
) VALUES ( '{$_SESSION['personID']}' , '$date', 
'$iclient1', '$ispouse1', 
'$iclient2', '$ispouse2', 
'$iclient3', '$ispouse3', 
'$eclient1', '$espouse1', 
'$eclient2', '$espouse2', 
'$eclient3', '$espouse3', 
'$eclient4', '$espouse4', 
'$eclient5', '$espouse5', 
'$eclient6', '$espouse6', 
'$eclient7', '$espouse7', 
'$eclient8', '$espouse8', 
'$eclient9', '$espouse9', 
'$eclient10', '$espouse10', 
'$eclient11', '$espouse11', 
'$eclient12', '$espouse12', 
'$eclient13', '$espouse13', 
'$eclient14', '$espouse14', 
'$eclient15', '$espouse15', 
'$eclient16', '$espouse16', 
'$eclient17', '$espouse17', 
'$eclient18', '$espouse18', 
'$eclient19', '$espouse19', 
'$eclient20', '$espouse20' 
)")) {
	echo "<script type='text/javascript'>
	window.history.go(-1);
	alert('Completed successfully, we will contact you as soon as the information has been processed.');
	</script>";
	};

$mysqli->close();
?>