<!-- VARIABLES --> 

<?php

$name = "Learning PHP";
echo "<h1>" . $name . "</h1>";

// Variables are declared using a dollar sign '$' plus name - $my_variable
$numerOfVisitors = 237;
echo "<br><hr>";
echo "<p>There was around " . $numerOfVisitors . "visitors</p>";

echo "<br>";

// var_dump() shows the type of the variable and its value aswell
var_dump($numerOfVisitors);

?>
