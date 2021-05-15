<!DOCTYPE html>
<html>
<head>
	<title>TALIA SELECTION PAGE</title>
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
	<h2>Welcome to Talia Selection Page!</h2><br>

	<button class="accordion"><p style="color:blue">
			Category
		</p></button>

	<div class="panel">	
	<form action="select_ctgr.php" method="POST">
		<label for="ctgr_sql">SQL statement for Category:<br> </label>
		<input type="text" name="ctgr_sql" > <br>

		<button type="submit"> 
		<b>Show</b>
		</button>
	</form>
	</div>
	<button class="accordion"><p style="color:blue">
			Games
		</p></button>

	<div class="panel">	
	<form action="select_games.php" method="POST">
		<label for="games_sql">SQL statement for Games:<br> </label>
		<input type="text" name="games_sql"><br>

		<button type="submit"> 
		<b>Show</b>
		</button>
	</form>
	</div>
	<button class="accordion"><p style="color:blue">
			Users
		</p></button>

	<div class="panel">	
	<form action="select_users.php" method="POST">
		<label for="users_sql">SQL statement for Users:<br> </label>
		<input type="text" name="users_sql"><br>

		<button> 
		<b>Show</b>
		</button>
	</form>
	</div>
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