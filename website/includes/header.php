<?php
//we need to define the page that we are on as the page

define ('THIS_PAGE',basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
case 'index.php':
    $title ='Our Home Page';
    $body='home';
    $headline='Welcome to our Home Page';
break;
case 'daily.php':
    $title ='Our Daily Page';
    $body ='daily inner';
    $headline='Welcome to Daily Page';
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ;?></title>
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@800&display=swap" rel="stylesheet">

<body class="<?php echo $body;?>">
<header>
        <div id="inner-header">
            <a id="logo_text" href="index.php">
                <img id="logo" src="images/logo.png" alt="logo">Hien's Website
            </a>

            <!-- <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="daily.php">Daily</a></li>
                    <li><a href="project.php">Project</a></li>
                    <li><a href="contact.php">Contact</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                </ul>
            </nav> -->

            <nav>
    <ul>
        <?php


        foreach($nav as $key => $value) {
            if(THIS_PAGE == $key) {
                echo '<li><a class="current" href=" '.$key.' "> '.$value.'</a></li>';
            } else {
                echo '<li><a href=" '.$key.' "> '.$value.'</a></li>';
            }
        } // end foreach

    


        ?>
    </ul>
</nav>

        </div><!-- end inner header -->
    </header>