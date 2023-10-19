<?php

session_start();

$newDish = $_POST['dish'];
$newProtein = $_POST['protein'];
$newDiff = $_POST['difficulty'];
$newLink = $_POST['link'];

$_SESSION['dish'] = $newDish;
$_SESSION['protein'] = $newProtein;
$_SESSION['difficulty'] = $newDiff;
$_SESSION['link'] = $newLink;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO items (dish, protein, difficulty, link)
VALUES ('$newDish', '$newProtein', '$newDiff', '$newLink')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo "<br>";
    echo '<a href="user_profile.php">Return to user profile</a>';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
