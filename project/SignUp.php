<?php
include_once "database.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  <?php include("header.php"); ?>
  <main>
    <h1>Sign Up</h1>
    <form action="" method="post">

      <fieldset>
      <label>First Name:</label><br>
      <input type="text" name="FName"><br>


      <label>Last Name:</label><br>
      <input type="text" name="LName"><br>

      <label>Email:</label><br>
      <input type="email" name="Email"><br>

      <label>Password:</label><br>
      <input type="Password" name="Password"><br>


      <label>PhoneNumber:</label><br>
      <input type="number" name="PhoneNumber"><br>

      <label>Address:</label><br>
      <input type="text" name="Address"><br>

      <label>Title:</label><br>
      <input type="radio" id="sales" name="radio">
    <label for="html">Sales</label><br>
    <input type="radio" id="user" name="radio">
    <label for="html">User</label><br>



      <input type="submit" value="Submit" name="Submit">
      <input type="reset">
      </fieldset>

    </form>
    <?php
    //grap data from user if form was submitted 

    if ($_SERVER["REQUEST_METHOD"] == "POST") { //check if form was submitted
      $Fname = htmlspecialchars($_POST["FName"]);
      $Lname = htmlspecialchars($_POST["LName"]);
      $Email = htmlspecialchars($_POST["Email"]);
      $Password = htmlspecialchars($_POST["Password"]);
      $PhoneNumber = htmlspecialchars($_POST["PhoneNumber"]);
      $Address = htmlspecialchars($_POST["Address"]);

      //insert it to database 
      $sql = "insert into users(ID,FirstName,LastName,Email,Password,PhoneNumber,Address) 
	values(NULL,'$Fname','$Lname','$Email','$Password','$PhoneNumber','$Address')";
      $result = mysqli_query($conn, $sql);

      //redirect the user back to index.php 
      if ($result) {
        header("Location:index.php");
      }
    }

    ?>
  </main>
  <?php include("footer.php"); ?>
</body>

</html>