<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>



<?php


include "config.php";

if (isset($_POST['cid'])) {

$cid = $_POST['cid'];
$genre = $_POST['genre'];
$nofg = $_POST['nofg'];
$nofpl = $_POST['nofpl'];
$age_avg = $_POST['age_avg'];

echo "Inserted: " . $cid . " " . $genre . " " . $nofg . " ". $nofpl . " "  . $age_avg . "<br>";

$sql_statement = "INSERT INTO category(cid,genre,nofg,nofpl,age_avg) 
					VALUES 
					('$cid', '$genre', '$nofg', '$nofpl', '$age_avg')";

$result = mysqli_query($db, $sql_statement);

echo "Result:" .  $result . "<br>";



}

else {
	echo "The form is not set.";
}


?>
	

</body>
</html>