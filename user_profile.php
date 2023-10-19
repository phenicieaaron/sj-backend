<?php 

session_start();

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
    }
} else {
    echo "0 results";
}
$conn->close();



if (isset($_SESSION['uname']) && $_SESSION['uname'] === $validUser && $_SESSION['pwd'] === $validPass) {
    echo "";
}
else {
    echo "Invalid credentials, please login first.<br>";
    
    echo "<a href='login.php'>Login</a>";
    exit;
}     


?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?= $validUser ?>'s page:
        <ul>
            <li><a href="insert.php">Upload new recipe:</a></li>
            <li><a href="select.php">Read all recipes:</a></li>
<!--            <li><a href="update.php">Update</a></li>-->
<!--            <li><a href="delete.php">Delete</a></li>-->
            <li><a href="logout.php">Logout</a></li>
        </ul>
          
    </body>
</html>
