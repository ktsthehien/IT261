<?php
// our str_replace and substr functions!
// substr(string,start,length)

$statement = 'Presently, I am reading the LoomingTower';
echo $statement;
echo '<br>';
echo substr($statement, 0);
echo '<br>';
echo substr($statement, 1);
echo '<br>';
echo substr($statement, 10);
echo '<h2>Now, I would like to display just the words - I am reading</h2>';
echo '<br>';
echo substr($statement, 11, 12);
echo '<h2>What if I would like to display Looming?</h2>';
echo substr($statement, -13);
echo '<br>';
echo substr($statement, 4, 12);
echo '<br>';
echo substr($statement, -20, 2);

echo '<h2>Now for the str_replace function!</h2>';
$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named the Looming Tower!';

echo $statement2;
echo '<br>';
echo str_replace('the','The', $statement2);