<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Full Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    <button type="submit">Check</button>
</form>

<?php
if ($_POST) {
    if (empty($_POST['name']) || empty($_POST['email'])) {
        echo "<p style='color:red;'>Both fields are required!</p>";
    } else {
        echo "<p style='color:green;'>All good!</p>";
    }
}
?>

</body>
</html>
