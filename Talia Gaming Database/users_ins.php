<?php

include "config.php";

if (isset($_POST['utag'])) {

$utag = $_POST['utag'];
$uid = $_POST['uid'];
$uloc = $_POST['uloc'];
$utier = $_POST['utier'];
$uage = $_POST['uage'];
$urating = $_POST['urating'];

echo $utag . " " . $uid . " " . $uloc . " ". $utier . " "  . $uage .  " "  . $urating . " " . "<br>";

$sql_statement = "INSERT INTO users(utag,uid,uloc,utier,uage,urating) 
					VALUES 
					('$utag', '$uid', '$uloc', '$utier', '$uage','$urating')";

$result = mysqli_query($db, $sql_statement);

echo "Result:" .  $result . "<br>";
}

else {
	echo "The form is not set.";
}



?>