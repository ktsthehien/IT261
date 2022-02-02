<?php
// arrays reminds me of a category , a category of fruits, names,
//naviation

$fruits = array(
    'bananas',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pineapple'
);

$fruits =[
    'bananas',
    'strawberries',
    'blueberries',
    'oranges',
    'apples',
    'pineapple'
];
// index array
$fruits[0] = 'bananas';
$fruits[1] = 'strawberries';
$fruits[2] = 'blueberries';
$fruits[3] = 'oranges';
$fruits[4] = 'apples';
$fruits[5] = 'pineapple';

// we cannot echo an array

//echo $fruits;

echo $fruits[2];
echo '<br>';

print_r($fruits);
echo '<br>';
var_dump($fruits);
echo '<br>';
echo'<pre>';
var_dump($fruits);
echo'</pre>';


$title = 'The Handmaid\'s Tale';
$author= 'Margaret Atwood';
$character = 'June';
$actor = 'Elizabeth Moss';

$book = array(
    'title' => 'The Handmaid\'s Tale',
    'author' => 'Margaret Atwood',
    'character' => 'June',
    'actor' => 'Elizabeth Moss',
);
// associative array
// $nav  $key         value
$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

// you can echo an associative array by using a for each loop
echo '<br>';

foreach($nav as $key => $value) {
echo ' Link  '.$key.' Visual   '.$value.'<br>';

}

echo '<br>';

foreach($nav as $key => $value) {
echo ' <a href="'.$key.'"> '.$value.'</a><br>';

}

?>

<nav>
    <ul>
        <?php
        foreach($nav as $key => $value) {
            echo '<li style="list-style-type:none;"><a style="text-decoration:none; color:red;" href="'.$key.'"> '.$value.'</a> </li> ';
        }
        ?>
    </ul>
</nav>