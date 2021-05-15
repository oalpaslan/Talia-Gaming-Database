<?php

$db = mysqli_connect('localhost','root','','talia');
if($db->connect_errno > 0){
	die('Unable to connect the database! [' . $db->connect_error . ']');
}

?>