<!DOCTYPE html>
<html>
<head>
	<title>Category Selection Page</title>
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
    <th><u>cid</u></th>
    <th>genre</th>
    <th>nofg</th>
    <th>nofpl</th>
    <th>age_avg</th>
  </tr>

<?php

include "config.php";

if (isset($_POST['ctgr_sql'])){
$ctgr_sql = $_POST['ctgr_sql'];

$sql_statement = $ctgr_sql;

$result = mysqli_query($db, $sql_statement);


while ($row = mysqli_fetch_assoc($result)) {
	

	$show_cid = $row['cid'];
	$show_genre = $row['genre'];
	$show_nofg = $row['nofg'];
	$show_nofpl = $row['nofpl'];
	$show_ageavg = $row['age_avg'];

	echo "<tr>" . "<td>" . $show_cid . "</td>" .  "<td>" . $show_genre . "</td>" . "<td>" . $show_nofg . "</td>" . "<td>" . $show_nofpl . "</td>" . "<td>" . $show_ageavg . "</td>" ."</tr>" ;

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