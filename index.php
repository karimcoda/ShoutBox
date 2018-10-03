<?php include 'database.php' ;?>
<?php
//Create Select Query...
$query = "SELECT * FROM shouts";
$shouts = mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shout It...</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="container">
		<header>
			<h1>SHOUT IT!!</h1>
		</header>
		<div id="shouts">
			<ul>
				<?php
				while ($row = mysqli_fetch_assoc($shouts)) : 
				?>
				<li class="shout"><span><?php echo $row['time'] ?> - </span><strong><?php echo $row['user'] ?> :</strong> <?php echo $row['message'] ?></li>
			<?php endwhile; ?>
				 
			</ul>
		</div>
		<div id="input">
			<?php if(isset($_GET['error'])) : ?>
				<div class="error"><?php echo $_GET['error']; ?></div>

		<?php endif;?>
			<form action="process.php" method="post">
				<input type="text" name="user" placeholder="Enter Your Name.">
				<input type="text" name="message" placeholder="Enter A Message...">
				<br>
				<input type="submit" name="submit" value="Shout It Out" class="shout-btn">
			</form>
		</div>
	</div>
</body>
</html>