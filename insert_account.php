<?php

session_start();

$newUser = $_POST['uname'];
$newPass = $_POST['pwd'];
$newEmail = $_POST['email'];

$_SESSION['uname'] = $newUser;
$_SESSION['pwd'] = $newPass;
$_SESSION['email'] = $newEmail;

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

$sql = "INSERT INTO users (username, password, email, favorite_recipe)
VALUES ('$newUser', '$newPass', '$newEmail', 'NULL')";

if ($conn->query($sql) === TRUE) {
    $data = $newEmail;
    echo "New record created successfully";
    echo "<br>";
    echo '<a href="user_profile.php">Continue to website.</a>';
    echo "<script>console.log('User: " . json_encode($data) . "added.' );</script>";

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
