<?php
echo "Raju Bhetwal<br>";

echo "Today's Date: " . date("Y-m-d") . "<br>";

$hour = date("H");

if ($hour < 12) {
    echo "Good Morning!";
} elseif ($hour < 18) {
    echo "Good Afternoon!";
} else {
    echo "Good Evening!";
}
?>
