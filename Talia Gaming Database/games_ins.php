<?php

include "config.php";

if (isset($_POST['gid'])) {

$gid = $_POST['gid'];
$gname = $_POST['gname'];
$age_rest = $_POST['age_rest'];
$grate = $_POST['grate'];
$gprice = $_POST['gprice'];

echo $gid . " " . $gname . " " . $age_rest . " ". $grate . " "  . $gprice . "<br>";

$sql_statement = "INSERT INTO games(gid,gname,age_rest,grate,gprice) 
					VALUES 
					('$gid', '$gname', '$age_rest', '$grate', '$gprice')";

$result = mysqli_query($db, $sql_statement);

echo "Result:" .  $result . "<br>";
}

else {
	echo "The form is not set.";
}



?>