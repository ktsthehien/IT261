<?php

echo '<h2>What will be the answer??? A is not null, the answer is no</h2>';
$a = 0;
echo 'a is '.is_null($a).'';

echo '<h2>What will be the answer? B is NULL, because 1 is yes</h2>';
$b = null;
echo 'b is '.is_null($b).'';

echo '<h2>What is the answer?C is not Null</h2>';
$c = "null";
echo 'c is '.is_null($c).'';

echo '<h2>D is NULL, because we see the number 1</h2>';
$d = NULL;
echo 'd is '.is_null($d).'';

echo '<h2>E is not NULL!!!</h2>';
$e = "";
echo 'e is '.is_null($e).'';
