<nav>
	<ol>
<?php
if(basename($_SERVER['PHP_SELF'])=="home.php"){
	print '<li class="activePage">Home</li>';
} else {
	print '<li><a href="home.php">Home</a></li>';
}
if(basename($_SERVER['PHP_SELF'])=="trainers.php"){
	print '<li class="activePage">Trainers</li>';
} else {
	print '<li><a href="trainers.php">Trainers</a></li>';
}
if(basename($_SERVER['PHP_SELF'])=="gymLeaders.php"){
	print '<li class="activePage">Gym Leaders</li>';
} else {
	print '<li><a href="gymLeaders.php">GymLeaders</a></li>';
}


?>

	</ol>
</nav>
