<?php
session_start();

unset($_SESSION['uname']);
unset($_SESSION['pwd']);
session_unset();
echo "You have successfully been logged out.";
?>

<br><a href="index.php">Main Menu</a>