<?php
include_once "database.php";
?>
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
  <h1>Add Product</h1>
    <form action="" method="post">

      <fieldset>
      <label>Product Name:</label><br>
      <input type="text" name="Name"><br>

      <label>Company:</label><br>
      <input type="text" name="Company"><br>

      <label>Expiry Date:</label><br>
      <input type="Date" name="Expiry"><br>


      <label>Price:</label><br>
      <input type="number" name="Price"><br>

      <label>Quantity:</label><br>
      <input type="number" name="Quantity"><br>

      <input type="submit" value="Submit" name="Submit">
      <input type="reset">
      </fieldset>
  </main>
  <?php
    //grap data from user if form was submitted 

    if ($_SERVER["REQUEST_METHOD"] == "POST") { //check if form was submitted
      $Name = htmlspecialchars($_POST["Name"]);
      $Company = htmlspecialchars($_POST["Company"]);
      $Expiry = htmlspecialchars($_POST["Expiry"]);
      $Price = htmlspecialchars($_POST["Price"]);
      $Quantity = htmlspecialchars($_POST["Quantity"]);



      //insert it to database 
      $sql = "insert into medicine(Name,Company,Expiry,Price,Quantity) 
	values('$Name','$Company','$Expiry','$Price','$Quantity')";
      $result = mysqli_query($conn, $sql);

      //redirect the user back to index.php 
      if ($result) {
        header("Location:index.php");
      }
    }

    ?>