<!DOCTYPE html>
<html>
<head>
	<title>Games Selection Page</title>
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
    <th><u>gid</u></th>
    <th>gname</th>
    <th>age_rest</th>
    <th>grate</th>
    <th>gprice</th>
  </tr>

<?php

include "config.php";

if (isset($_POST['games_sql'])){
$games_sql = $_POST['games_sql'];

$sql_statement = $games_sql;

$result = mysqli_query($db, $sql_statement);


while ($row = mysqli_fetch_assoc($result)) {
	

	$show_gid = $row['gid'];
	$show_gname = $row['gname'];
	$show_agerest = $row['age_rest'];
	$show_grate = $row['grate'];
	$show_gprice = $row['gprice'];

	echo "<tr>" . "<td>" . $show_gid . "</td>" .  "<td>" . $show_gname . "</td>" . "<td>" . $show_agerest . "</td>" . "<td>" . $show_grate . "</td>" . "<td>" . $show_gprice . "</td>" ."</tr>" ;

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