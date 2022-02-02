<?php
// introduction to our variables
// as well as syntax!!!
// What is a varible ?? a variable is a container


$name = 'Hien';
// the inforamtion between the single quotes is a string
echo $name;
echo '<br>';
$name = 'Anthony';
echo $name;
echo '<br>';
echo 'My first name is $name';
echo '<br>';
echo "My first name is $name";
echo '<br>';
// I like single quotes because later on we will be placing php inside our html values  <a href=""
echo 'My first name is '.$name.' ';
echo '<br>';
$temp = 45;
// another data type is integers
echo ' The temperature today was '.$temp.' degree ';
echo '<br>';

$body_temp = 98.6;
//anything with a decimal is called a float 
echo $body_temp;

// another data type is boolean = true or false
// another data type is NULL
// <select><option value ="" NULL>Select one </option>    </select>

$vehicle = 'truck';
echo '<br>';
$x = 20;
$y = 30;
$z = $x * $y;
echo $z;

// circumference of a circle 2 pie r
echo '<br>';
$pie = 3.14;
$radius = 10;
$circumference = (2 * $pie) * $radius;
echo $circumference;

echo '<br>';

$celcius = 4;
$far = ($celcius * 9/5) + 32;
$friendly_far = floor($far);
// ceil is a function that will round up
// floor is a function that will round down
// echo $friendly_far;


$celcius = 4;
$far = ($celcius * 9/5) + 32;

// ceil is a function that will round up
// floor is a function that will round down
echo ceil($far);
echo '<br>';
$money = 100;
$divide = 7;
$amount = $money / $divide;
echo 'I now have <b>$'.number_format($amount, 2).' </b> ';
//number_format($amount, 2)
echo '<br>';
$friendly_amount = number_format($amount, 2);
echo '<p>I now have <b>$'.$friendly_amount.'</b> dollars!</p>';

?>

<h1>Now we will be playing with the concatenation operator </h1>

<?php

$first_name = 'Hien';
$last_name= 'Nguyen';
echo '<br>';
echo $first_name;
echo '<br>';
echo $last_name;
echo '<br>';

$name = 'Hien';
$name .= ' Nguyen';
echo $name;
echo '<br>';

$x = 30;
$y = 3;
$z = $x / $y;
echo $z;
echo '<br>';
$x = 30;
$x /=3;
echo $x;


