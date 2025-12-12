<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Name: <input type="text" name="name"><br>
    Age: <input type="number" name="age"><br>
    Favorite Programming Language: <input type="text" name="lang"><br>
    <button type="submit">Preview</button>
</form>

<?php
if ($_POST) {
    if (empty($_POST['name']) || empty($_POST['age']) || empty($_POST['lang'])) {
        echo "<p style='color:red;'>All fields are required!</p>";
    } else {
        echo "<h3>Preview:</h3>";
        echo "Name: " . $_POST['name'] . "<br>";
        echo "Age: " . $_POST['age'] . "<br>";
        echo "Favorite Language: " . $_POST['lang'];
    }
}
?>

</body>
</html>
