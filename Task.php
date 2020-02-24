<!DOCTYPE html>
<html>
<head>
	<title>Assigment</title>
</head>
<body>
<?php
echo"<h1>Functions</h1>";
echo strlen("Pubg");
echo"<br>";
echo str_word_count("Erangle");
echo"<br>";
echo strrev("Aptech");
echo"<br>";
echo strpos("Hello World","World");
echo"<br>";
echo str_replace("World","Sir","Hello World");
echo"<br>";
define("Greeting","Welcome");
echo Greeting;
echo"<br>";echo"<br>";echo"<br>";

echo"<h1>Operators</h1>";
echo"<br>";

$a = 10;
$b = 20;
$c = $a+$b;

echo"<br>";
echo"$c";
echo"<br>";

$a = 10;
$b = 20;
$c = $a-$b;

echo"<br>";
echo"$c";
echo"<br>";

$a = 10;
$b = 20;
$c = $a/$b;

echo"<br>";
echo"$c";
echo "<br>";

$a = 10;
$b = 20;
$c = $a*$b;

echo"<br>";
echo"$c";
echo"<br>";
echo"<br>";echo"<br>";echo"<br>";
echo"<h1>Comparision Operators</h1>";

$x = 10;
$y = 20;
var_dump($x == $y);
echo"<br>";
var_dump($x != $y);
echo"<br>";
var_dump($x > $y);
echo"<br>";
var_dump($x < $y);
echo"<br>";
var_dump($x >= $y);
echo"<br>";
var_Dump($x <= $y);
echo"<br>";echo"<br>";echo"<br>";
echo"<h1>Logical Operators</h1>";

$p = 10;
$u = 10;
$b = 20;

var_dump($p == $u AND $u == $b);
echo"<br>";

var_dump($p == $u OR $u == $b);
echo"<br>";

var_dump($p == $u XOR $u == $b);
echo"<br>";


?>
</body>
</html>