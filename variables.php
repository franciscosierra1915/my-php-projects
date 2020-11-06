<?php

$output = 'Hello World';


$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
$string1 = 'Hello';
$string2 = 'World';
$greeting = $string1 .' '. $string2. '!';
$greeting2 = "$string1 $string2";

echo $sum;

echo $greeting;

echo $greeting2;

$string3 = "They\"re here!";

echo $string3;

$float1 = 4.4;
$bool1 = true;

define('GOODBYE', "Im leaving the party");

echo GOODBYE;

$people = array('Keving', 'Jeremy', 'Sara');
$numbers = array(1,2,3);

echo $numbers[0];
echo $people[1];
echo $people[0];
print_r($numbers);
var_dump($people);

$newpeople = array('Brad' => 35, 'Jose' => 32, 'William' => 37);
echo $newpeople['Brad'];