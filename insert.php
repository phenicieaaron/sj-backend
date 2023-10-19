<?php session_start() ?>
<?php
    if (isset($_SESSION['uname'])) {
        $username = $_SESSION['uname'];
    } else {
        header("location:login.php");
    }
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        Welcome, <?= $username ?>
        <p />
        <form action="do_insert.php" method="post">
            Dish Name: <input type="text" name="dish"><br/>
            Protein: <input type="text" name="protein"><br/>
            Difficulty: <input type="text" name="difficulty"><br />
            External Link: <input type="text" name="link"><br />
                       
            <br/>
            <input type="submit"/>
        </form>
    </body>
</html>
