<?php

session_start();

if(!isset($_SESSION['fname'])) {
    header("Location: login.php");
}
$img=$_SESSION['profileImage']
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['fname'] . "</h1>"; ?>
    <img src="<?php echo $_SESSION['profileImage']; ?>">
  
    <a href="logout.php">Logout</a>
</body>
</html>