<?php

// Installation steps using XAMPP
echo "How to install PHP using XAMPP:\n";
echo "1. Go to https://www.apachefriends.org\n";
echo "2. Download XAMPP for your operating system (Windows/Linux/Mac)\n";
echo "3. Install XAMPP and open the Control Panel\n";
echo "4. Start the 'Apache' server from the control panel\n";
echo "5. Go to the XAMPP folder (usually C:/xampp/htdocs)\n";
echo "6. Save your PHP file (e.g. test1.php) inside htdocs\n";
echo "7. Open your browser and go to: http://localhost/test1.php\n\n";

// Define variables with different data types
$myInteger = 10;
$myFloat = 3.14;
$myString = "Learning PHP with XAMPP";
$myBoolean = true;
$myArray = array("PHP", "HTML", "CSS");
$myNull = null;

// Print the variables
echo "Integer: " . $myInteger . "<br>";
echo "Float: " . $myFloat . "<br>";
echo "String: " . $myString . "<br>";
echo "Boolean: " . ($myBoolean ? "true" : "false") . "<br>";
echo "Array: ";
print_r($myArray);
echo "<br>Null: ";
var_dump($myNull);

?>