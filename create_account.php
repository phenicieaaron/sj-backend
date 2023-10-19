<?php session_start();
?>
<!DOCTYPE html>
<html>
    <form action="insert_account.php" method="post">
            User: <input type="text" name="uname"><br>
            Password: <input type="password" name="pwd"><br>
            Email: <input type="email" name="email"><br>
            <input type="submit">
        </form>
</html>
