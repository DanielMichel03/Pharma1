<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <main>
        <?php
        session_start();
        echo "<h1>Your Profile</h1>";
        echo "First Name: " .   $_SESSION["FName"] . "<br>";
        echo "Last Name: "  .    $_SESSION["LName"] . "<br>";
        echo "Email: "      .    $_SESSION["Email"] . "<br>";
        echo "Phone Number: "      .    $_SESSION["PhoneNumber"] . "<br>";
        echo "Address: "      .    $_SESSION["Address"] . "<br><br>";

        echo "<a href='index.php'>Back</a>" . "<br>";
        echo "<a href='Delete.php'>Delete Account</a><br><br>";

        ?>
    </main>
    <?php include("footer.php"); ?>
</body>

</html>