<?php


// Start the session
session_start();
if (isset($_SESSION["udid"])){
	$udid=$_SESSION["udid"];
	}
if (isset($_SESSION["quality"])){
	$quality=$_SESSION["quality"];
	$total_price=$_SESSION["total_price"];
}

$cardno=$_POST['cardno'];
$cardname=$_POST['cardname'];
$bankname=$_POST['bankname'];
$exp=$_POST['exp'];
$cvv=$_POST['cvv'];
$ticketid=$_POST['ticketid'];
require_once('connect.php');
echo $ticketid;
 $q= "INSERT INTO payment (user_id,ticket_id,ticket_status,total_price,card_number,card_expdate,card_cvv,bank_name,nameoncard) VALUES('$udid','$ticketid','Available','$total_price','$cardno','$exp','$cvv','$bankname','$cardname')";

$result = $mysqli->query($q);

if(!$result){
	die('ERROR:' .$q." ".$mysqli->error);
}

header("Location: user-my_ticket.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
	

<body>
</body>
</html>
