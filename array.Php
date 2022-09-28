<!DOCTYPE html>
<html>
<head>
    <title>For Loop</title>
</head>
<body>
<?php

$cities = array("Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London" );
foreach($cities as $c) {
    echo "$c, ";
}

sort($cities);

echo "<ul>";
foreach($cities as $c){
    echo "$c  <br>";
}
echo "</ul>";

array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");

echo "<ul";
foreach($cities as $c){
    echo "$c  <br>";
}
echo "</ul>";
?>
</body>
</html>