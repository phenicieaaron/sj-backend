<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
<h2>reading from the database and returning to console log:</h2>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "recipes";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM items";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
               echo " - Dish: " . $row['dish'] . "<br>"." - Protein: " . $row["protein"] . "<br>" . " - Difficulty: " . $row['difficulty'] . "<br>" . " - Link: " . $row["link"] . "<br><br>";
               $data = $row;
               echo "<script>console.log('" . json_encode($data) . "' );</script>";

            
                
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>

        <br>
        <a href="user_profile.php">Return to profile</a>
    </body>
</html>
