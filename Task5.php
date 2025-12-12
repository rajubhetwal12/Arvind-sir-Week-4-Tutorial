<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Enter a sentence: <input type="text" name="text">
    <button type="submit">Count</button>
</form>

<?php
if (isset($_POST['text'])) {
    $str = strtolower($_POST['text']);
    $vowels = ['a','e','i','o','u'];
    $count = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $count++;
        }
    }

    echo "Total Vowels: $count";
}
?>

</body>
</html>
