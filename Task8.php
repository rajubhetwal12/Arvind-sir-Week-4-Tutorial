<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Enter Email: <input type="text" name="email">
    <button type="submit">Check</button>
</form>

<?php
if (isset($_POST['email'])) {
    $email = $_POST['email'];

    if (strpos($email, "@") === false ||
        strpos($email, ".") === false ||
        strpos($email, "@") == 0) {

        echo "Email format incorrect (basic check).";
    } else {
        echo "Email looks fine!";
    }
}
?>

</body>
</html>
