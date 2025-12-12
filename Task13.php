<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Password: <input type="password" name="pass"><br>
    Confirm Password: <input type="password" name="cpass"><br>
    <button type="submit">Submit</button>
</form>

<?php
if ($_POST) {

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['pass']) || empty($_POST['cpass'])) {
        echo "<p style='color:red;'>All fields are required!</p>";
    } elseif ($_POST['pass'] !== $_POST['cpass']) {
        echo "<p style='color:red;'>Passwords do not match!</p>";
    } else {
        $strength = strlen($_POST['pass']) >= 8 ? "Strong" : "Weak";

        echo "<h3>Registration Preview:</h3>";
        echo "Name: " . $_POST['name'] . "<br>";
        echo "Email: " . $_POST['email'] . "<br>";
        echo "Password Strength: " . $strength;
    }
}
?>

</body>
</html>
