<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Username: <input type="text" name="user"><br>
    Password: <input type="password" name="pass"><br>
    <button type="submit">Login</button>
</form>

<?php
if ($_POST) {
    if ($_POST['user'] == "admin" && $_POST['pass'] == "1234@admin") {
        echo "<h3>Welcome Admin</h3>";
    } else {
        echo "<p style='color:red;'>Invalid credentials</p>";
    }
}
?>

</body>
</html>
