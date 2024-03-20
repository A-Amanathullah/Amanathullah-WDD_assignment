<?php require_once("header.php");?>
<?php session_start();?>

<?php
if (isset($_SESSION["localuser"])) {
	?>
		<section class="services">
		<br><br><br><br><br><br>
		<h1 class="heading">our <span>services</span></h1>
		<div class="box-container">
		<?php 
			$query = "SELECT * FROM doctors";
			$result = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_assoc($result)) 
			{ 
				?>
					<div class="box">
						<h3><?php print $row['doctor_name']; ?></h3>
						<p><?php print $row['specialization']; ?></p>
						<p><?php print $row['date']; ?></p>
						<a href="#this function is not work" class="btn">Book Now</a>
					</div>
					<?php
			} 
			?>
					</div>
			</section>
			<?php require_once("footer.php");
}
elseif (isset($_SESSION["adminuser"])) {
	?>
		<section class="services">
		<br><br><br><br><br><br>
		<h1 class="heading">our <span>services</span></h1>
		<a href="insert.php" class="btn">Insert</a><br>	<br><br><br>
		<div class="box-container">
		<?php 
			$query = "SELECT * FROM doctors";
			$result = mysqli_query($connection, $query);
			while ($row = mysqli_fetch_assoc($result)) 
			{ 
				?>
					<div class="box">
						<h3><?php print $row['doctor_name']; ?></h3>
						<p><?php print $row['specialization']; ?></p>
						<p><?php print $row['date']; ?></p>
						<a href="updateform.php?id=<?php print $row['id']?>&dname=<?php print $row['doctor_name']?>
									&spec=<?php print $row['specialization']?>&date=<?php print $row['date']?>" class="btn">Update</a>
						<a href="delete.php?id=<?php print $row['id']?>" class="btn">Delete</a>
					</div>
					<?php
			} 
			?>
					</div>
			</section>
			<?php require_once("footer.php");
}
else {
	require_once("login.php");
}
?>
