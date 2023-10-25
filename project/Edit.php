
<?php

session_start();

// Include connection
include_once "database.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
<?php include("header.php");?>
<main>
<h1>Edit Profile</h1>

<form action='' method='post'>
	<fieldset>
	First Name:<br>
	<input type='text' value="<?=$_SESSION['FName']?>" name='FName'><br>
	Last Name:<br>
	<input type='text' value="<?=$_SESSION['LName']?>" name='LName'><br>
	Email:<br>
	<input type='email' value="<?=$_SESSION['Email']?>" name='Email'><br>
	Password:<br>
	<input type='password' value="<?=$_SESSION['Password']?>" name='Password'><br>
	Phone Number:<br>
	<input type='number' value="<?=$_SESSION['PhoneNumber']?>" name='PhoneNumber'><br>
	Address:<br>
	<input type='text' value="<?=$_SESSION['Address']?>" name='Address'><br>
	<input type='submit' value='Submit' name='Submit'>
	</fieldset>
</form>


<?php
if($_SERVER['REQUEST_METHOD']== "POST"){ //check if form was submitted
	$Fname=$_POST["FName"];
	$Lname=$_POST["LName"];
	$Email=$_POST["Email"];
	$Password=$_POST["Password"];
	$PhoneNumber=$_POST["PhoneNumber"];

	$sql="update  users set FirstName='$Fname', LastName='$Lname', Email='$Email', Password='$Password', PhoneNumber='$PhoneNumber', Address='$Address'
	where ID =".$_SESSION['ID'];

	$result=mysqli_query($conn,$sql);
	if($result)	{
		$_SESSION["FName"]=$Fname;
		$_SESSION["LName"]=$Lname;
		$_SESSION["Email"]=$Email;
		$_SESSION["Password"]=$Password;
		$_SESSION["PhoneNumber"]=$PhoneNumber;
		$_SESSION["Address"]=$Address;
		header("Location:index.php");
	}
	else {
		echo $sql;
	}
}
?>
    </main>
	<?php include("footer.php");?>
</body>
</html>
