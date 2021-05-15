<!DOCTYPE html>
<html>
<head>
	<title>TALIA DELETION PAGE</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.accordion {
	  background-color: #eee;
	  color: #444;
	  cursor: pointer;
	  padding: 18px;
	  width: 100%;
	  border: none;
	  text-align: left;
	  outline: none;
	  font-size: 15px;
	  transition: 0.4s;
	}

	.active, .accordion:hover {
	  background-color: #ccc; 
	}

	.panel {
	  padding: 0 18px;
	  display: none;
	  background-color: white;
	  overflow: hidden;
	}
	</style>
</head>
<body>
<div align="center">
	<h2>Welcome to Talia Deletion Page!</h2><br>
<?php
include "config.php";
?>	
<form action="ctgr_del.php" method="POST">
  <label for="cids">Choose <b>cid</b> of a category to delete:</label>
  <select name="cids">
  	<?php

  	$sql_command = "SELECT cid FROM category";
  	$myresult = mysqli_query($db,$sql_command);
  	while ($cid_rows= mysqli_fetch_assoc($myresult)) {
  		$cid = $cid_rows['cid'];
  		echo "<option value='$cid'>".$cid."</option>";
  	}
    
	?>


 </select>

<input type="submit" value="DELETE"> </input>
</form>
<br>
<form action="games_del.php" method="POST">
  <label for="gids">Choose <b>gid</b> of a game to delete:</label>
  <select name="gids">
  	<?php

  	$sql_command = "SELECT gid FROM games";
  	$myresult = mysqli_query($db,$sql_command);
  	while ($gid_rows= mysqli_fetch_assoc($myresult)) {
  		$gid = $gid_rows['gid'];
  		echo "<option value='$gid'>".$gid."</option>";
  	}
    
	?>


 </select>

<input type="submit" value="DELETE"> </input>
</form>
<br>
<form action="users_del.php" method="POST">
  <label for="utags">Choose <b>utag</b> of a user to delete:</label>
  <select name="utags">
  	<?php

  	$sql_command = "SELECT utag FROM users";
  	$myresult = mysqli_query($db,$sql_command);
  	while ($utag_rows= mysqli_fetch_assoc($myresult)) {
  		$utag = $utag_rows['utag'];
  		echo "<option value='$utag'>".$utag."</option>";
  	}
    
	?>


 </select>

<input type="submit" value="DELETE"> </input>
</form>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>

</body>
</html>