<?php

$book = ' The Handmaid\'s Tale';
$author = 'Margaret Atwood';
$actor = 'Elizabeth Moss';
$character = 'June';




$content = '<p>My favorite book is <b> '.$book.'</b>, written by'.$author.' , and is presently a miniseries on HULU. Hulu\'s viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award-winning "Handmaid\'s Tale!"</p>

<p>$actor\'s rendition as '.$charater.' is right on! I liked the show\'s first 2 seasons!</p>';

echo $content;


$new_content = <<<HAND
<p>My favorite book is $book, written by $author, and is presently a miniseries on HULU. Hulu's viewing audience is extremely excited about the miniseries and looks forward to the 5th season of the award-winning "Handmaid's Tale!"</p>

<p>$actor's rendition as $character is right on! I liked the show's first 2 seasons!</p>
HAND;

echo $new_content;
