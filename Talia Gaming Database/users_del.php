<!DOCTYPE html>
<html>
<head>
	<title>Users Deletion Page</title>
</head>
<body>



<?php


include "config.php";

if (isset($_POST['utags'])) {

$utag = $_POST['utags'];

echo "Deleted: " . $utag . "<br>";

$sql_statement = "DELETE FROM users WHERE utag = '$utag';";
$del_result = mysqli_query($db, $sql_statement);

}

else {
	echo "The form is not set.";
}

?>
	

</body>
</html>