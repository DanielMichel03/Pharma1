<?php

session_start();

// include connection
include_once "database.php";


$sql = "delete from users where ID =" . $_SESSION['ID'];
$result = mysqli_query($conn, $sql);
if ($result) {
	session_destroy();
	header("Location:index.php");
} else {
	echo $sql;
}

?>