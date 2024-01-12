<?php
// concat

echo "<h1>Variables and Data Types</h1><br>";
echo '
$firstName = "John";<br>
$lastName = "Smith";<br>
';

$firstName = "John";
$lastName = "Smith";
echo "<br>";


echo "<h2>In PHP, we use dot '.' to concatenate strings instead of '+'.</h2><br>";
// In PHP, we use dot '.' to concatenate strings instead of '+'.
$fullName = $firstName . " " . $lastName;
echo '<h4>$fullName = $firstName . " " . $lastName;</h4><br>';
echo $fullName;
echo "<br>";

//exit;

echo $firstName;
echo "<br>";

// unset "erases" the variable
//unset($firstName);

// isset() checks if variable exists
if (isset($firstName)) {
	echo $firstName;
} else {
	echo "Variable does not exist";
}

/*
IN PHP, WE HAVE 4 BASIC DATA TYPES:
	Integer
	Float
	String
	Boolean

2 TYPES OF COMPOSITE TYPES:
	ARRAY
	OBJECTS

2 SPECIAL TYPES
	RESOURCE
	NULL

*/

?>

<h2>Example 2</h2>

<?php 
//String
$name = "Pablo";
$homePage = 'www.pablo.com';
echo "<p style='font-weight:bold; font-size:22px;'>Name: $name</p><br>";
echo "<p>Home Page: $homePage</p>";

//Integer
$year = 1990;
echo "<p>Year of birth: $year</p>";

// Float
$payment = 5500.99;
echo "<p>Payment: $payment</p>";

// Boolean
$locked = false;
if ($locked) {
	echo "<p>Status: LOCKED</p><br>";
} else {
	echo "<p>Status: Unlocked</p><br>";
}

// Array
echo "<h4>Array</h4>";
$fruits = array("Pineappe", "Orange", "Mango");
echo "
	Index 0: $fruits[0]<br>
	Index 1: $fruits[1]<br>
	Index 2: $fruits[2]<br>
	var_dump($fruits);<br>
	";

// Object
echo "<h4>Object</h4>";
$currentTime = new DateTime();
var_dump($currentTime);
?>

