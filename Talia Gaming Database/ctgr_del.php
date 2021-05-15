<!DOCTYPE html>
<html>
<head>
	<title>Category Deletion Page</title>
</head>
<body>



<?php


include "config.php";

if (isset($_POST['cids'])) {

$cid = $_POST['cids'];

echo "Deleted: " . $cid . "<br>";

$sql_statement = "DELETE FROM category WHERE cid = '$cid';";
$del_result = mysqli_query($db, $sql_statement);

}

else {
	echo "The form is not set.";
}

?>
	

</body>
</html>