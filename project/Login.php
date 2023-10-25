<!DOCTYPE html>
<html>

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
<?php include("header.php");?>
   <main>
      <h1>Login</h1>
      <form action="" method="post">
         <fieldset>
         <label>Email:</label><br>
         <input type="email" name="Email"> <br>
         <label>Password:</label><br>
         <input type="Password" name="Password"><br>
         <input type="submit" value="Submit" name="Submit">
         <input type="reset">
         </fieldset>
      </form>
      <?php
      session_start();
      include_once "database.php";
      //grab data from user and see if it exists in database
      if ($_SERVER["REQUEST_METHOD"] == "POST") {

         $Email = $_POST["Email"];
         $Password = $_POST["Password"];
         $sql = "Select * from users where Email ='$Email' and Password='$Password'";
         $result = mysqli_query($conn, $sql);
         if ($row = mysqli_fetch_array($result)) {
            $_SESSION["ID"] = $row[0];
            $_SESSION["FName"] = $row["FirstName"];
            $_SESSION["LName"] = $row["LastName"];
            $_SESSION["Email"] = $row["Email"];
            $_SESSION["Password"] = $row["Password"];
            $_SESSION["PhoneNumber"] = $row["PhoneNumber"];
            $_SESSION["Address"] = $row["Address"];
            header("Location:index.php?login=success");
         } else {
            echo "Inalid Email or Password";
         }
      }

      ?>

   </main>
   <?php include("footer.php");?>

</body>

</html>