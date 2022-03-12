<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

function myError($myFile, $myLine, $errorMsg){
    if(defined('DEBUG') && DEBUG){
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    }  else {
        echo ' Houston, we have a problem!';
        die();
    }
}

function random_images($photos) {
    $my_return = '';
    $i = rand(1,6);
    $my_return = '<img class="img" src="images/people'.$i.'.jpg" alt="people'.$i.'">';
    return $my_return;
}