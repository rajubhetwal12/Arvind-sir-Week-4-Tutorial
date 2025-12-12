<?php
$json = file_get_contents("products.json");
$data = json_decode($json, true);

foreach ($data as $p) {
    echo "Name: " . $p["name"] . " - Price: " . $p["price"] . "<br>";
}
?>
