<!DOCTYPE html>
<html>
<head>
	<title>Games Deletion Page</title>
</head>
<body>



<?php


include "config.php";

if (isset($_POST['gids'])) {

$gid = $_POST['gids'];

echo "Deleted: " . $gid . "<br>";

$sql_statement = "DELETE FROM games WHERE gid = '$gid';";
$del_result = mysqli_query($db, $sql_statement);

}

else {
	echo "The form is not set.";
}

?>
	

</body>
</html>