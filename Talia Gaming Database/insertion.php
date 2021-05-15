<!DOCTYPE html>
<html>
<head>
	<title>TALIA INSERTION PAGE</title>
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
		<h2><b>Welcome to Talia Insertion Page!</b></h2>
		
		<br>

		
	<button class="accordion"><p style="color:blue">
			Category
		</p></button>
	<div class="panel">
		<form action="ctgr_ins.php" method="POST">
			<label for="cid">Enter <b>cid</b> of the category:</label><br>
			<input type="number" name="cid" placeholder="Category ID"><br><br>
			<label for="genre">Enter <b>genre</b> of the category:</label><br>
			<input type="text" name="genre" placeholder="Genre"><br><br>
			<label for="nofg">Enter <b>number of games</b> in category: </label><br>
			<input type="number" name="nofg" placeholder="Number of games"><br><br>
			<label for="nofpl">Enter <b>number of players</b> in category:</label><br>
			<input type="number" name="nofpl" placeholder="Number of players"><br><br>
			<label for="age_avg">Enter <b>age average</b> of players in category:</label><br>
			<input type="number" name="age_avg" placeholder="Age average"><br><br>
			<button type="submit"> INSERT  </button>

		</form>
	</div>
	<button class="accordion"><p style="color:blue">
			Games
		</p></button>
	<div class="panel">
		<form action="games_ins.php" method="POST">
			<label for="gid">Enter the <b>gid</b> of the game:</label><br>
			<input type="number" name="gid" placeholder="Game ID"><br><br>
			<label for="gname">Enter the <b>name</b> of the game:</label><br>
			<input type="text" name="gname" placeholder="Game name"><br><br>
			<label for="age_rest">Enter <b>age restriction</b> of the game: <br> <i>(ex: "16" means the game is restricted for gamers under the age of 16)</i> </label><br>
			<input type="number" name="age_rest" placeholder="Age restriction"><br><br>
			<label for="grate">Enter <b>the rating </b> of the game :</label><br>
			<input type="number" name="grate" placeholder="Game rating"><br><br>
			<label for="gprice">Enter <b>the price</b> of the game: <br> <i>(in TL)</i> </label><br>
			<input type="number" name="gprice" placeholder="Game price"><br><br>
			<button type="submit"> INSERT  </button>
		</form>
	</div>
	<button class="accordion"><p style="color:blue">
			Users
		</p></button>
	<div class="panel">
		<form action="users_ins.php" method="POST">
			<label for="utag">Enter the <b>tag</b> of the user:</label><br>
			<input type="number" name="utag" placeholder="User tag"><br><br>
			<label for="uid">Enter the <b>nickname (ID)</b> of the user:</label><br>
			<input type="text" name="uid" placeholder="User nickname"><br><br>
			<label for="uloc">Enter <b>the location</b> of the user:</label><br>
			<input type="text" name="uloc" placeholder="User location"><br><br>
			<label for="utier">Enter <b>the tier </b> of the user: <br> <i>(1: 300+, 2: 100-300, 3: 50-100, 4: 10-50, 5: 10-)</i></label><br>
			<input type="number" name="utier" placeholder="User tier"><br><br>
			<label for="uage">Enter <b>the age</b> of the user:</label><br>
			<input type="number" name="uage" placeholder="User age"><br><br>
			<label for="urating">Enter <b>the rating</b> of the user: <br> <i>(1-100%)</i></label><br>
			<input type="number" name="urating" placeholder="User rating"><br><br>
			<button type="submit"> INSERT  </button>
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