<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Password: <input type="password" name="pass">
    <button type="submit">Validate</button>
</form>

<?php
if (isset($_POST['pass'])) {
    $p = $_POST['pass'];

    if (strlen($p) < 8) {
        echo "Password must be at least 8 characters.<br>";
    }
    if (!preg_match("/[0-9]/", $p)) {
        echo "Password must include at least one number.<br>";
    }
    if (!preg_match("/[\W]/", $p)) {
        echo "Password must include at least one special character.<br>";
    }
}
?>

</body>
</html>
