<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pharma</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>
	<?php include("header.php");?>
	<main>
		<?php
		session_start();
		
		if (!empty($_SESSION['ID'])) {

			echo "<h1>Welcome " . $_SESSION['FName'] . "</h1>";		
			echo "<a href='store.php'>Add Product</a>";	
			echo "<a href='View.php'>View Profile</a><br><br>";
			echo "<a href='Edit.php'>Edit Profile</a><br><br>";
			echo "<a href='SignOut.php'>SignOut Here</a>";
		} else {
			echo "<h1>Welcome to Pharma</h1>";
			echo "<a href='Login.php'>Login</a>";
			echo "<br>";
			echo "Dont have an Account? <a href='SignUp.php'> Sign up Here</a> ";
		}
		?>
	</main>
	<?php include("footer.php");?>
</body>

</html>