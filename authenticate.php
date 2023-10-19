<?php session_start();

$user = $_POST['uname'];
$pass = $_POST['pwd'];

$_SESSION['uname'] = $user;
$_SESSION['pwd'] = $pass;

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

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $validUser = $row["username"];
        $validPass = $row["password"];
            if ($user === $validUser && $pass === $validPass) {
            header('Location: user_profile.php');
}
    }
} else {
    unset($_SESSION['uname']);
    unset($_SESSION['pwd']);
    echo "";
}
$conn->close();


?>
<!DOCTYPE html>
<html>
    <body>
        Invalid username and/or password.
        <br>
        <a href="index.php">Homepage</a>
    </body>
</html>