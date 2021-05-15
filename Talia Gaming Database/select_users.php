<!DOCTYPE html>
<html>
<head>
	<title>Users Selection Page</title>
	<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<table>
  <tr>
    <th><u>utag</u></th>
    <th>uid</th>
    <th>uloc</th>
    <th>utier</th>
    <th>uage</th>
    <th>urating</th>
  </tr>

<?php

include "config.php";

if (isset($_POST['users_sql'])){
$users_sql = $_POST['users_sql'];

$sql_statement = $users_sql;

$result = mysqli_query($db, $sql_statement);


while ($row = mysqli_fetch_assoc($result)) {
	

	$show_utag = $row['utag'];
	$show_uid = $row['uid'];
	$show_uloc = $row['uloc'];
  $show_utier = $row['utier'];
	$show_uage = $row['uage'];
	$show_urating = $row['urating'];

	echo "<tr>" . "<td>" . $show_utag . "</td>" .  "<td>" . $show_uid . "</td>" . "<td>" . $show_uloc . "</td>" . "<td>" . $show_utier . "</td>" . "<td>" . $show_uage . "</td>" . "<td>" . $show_urating . "</td>" . "</tr>" ;

}
}
else
{
	echo "Error.";
}

?>

</table>

</body>
</html>