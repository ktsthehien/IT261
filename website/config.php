<?php
ob_start();

define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

date_default_timezone_set('America/Los_Angeles');
if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}


//switch

switch($today) {
case 'Wednesday' :
    $movie ='Wednesday Movie - The Batman';
    $pic ='batman.jpg';
    $color='orange';
    $atl ='batman';
    $content='In his second year of fighting crime, Batman uncovers corruption in Gotham City that connects to his own family while facing a serial killer known as the Riddler.';
    break;

    case 'Thursday' :
        $movie ='Thursday Movie - Eternal';
        $pic ='eternal.jpg';
        $color='green';
        $atl ='eternal';
        $content= 'The saga of the Eternals, a race of immortal beings who lived on Earth and shaped its history and civilizations.';
        break;

        case 'Friday' :
            $movie ='Friday Movie - The Euphoria';
            $pic ='euphoria.jpg';
            $color='grey';
            $atl ='euphoria';
            $content=  'A look at life for a group of high school students as they grapple with issues of drugs, sex, and violence.';
            break;

            case 'Saturday' :
                $movie ='Saturday Movie - Archive 81';
                $pic ='archive81.jpg';
                $color='yellow';
                $atl ='archive81';
                $content=  'An archivist hired to restore a collection of tapes finds himself reconstructing the work of a filmmaker and her investigation into a dangerous cult.';
                break;

                case 'Sunday' :
                    $movie ='Sunday Movie - Peacemaker';
                    $pic ='peacemaker.jpg';
                    $color='blue';
                    $atl ='pacemaker';
                    $content=  'Picking up where The Suicide Squad (2021) left off, Peacemaker returns home after recovering from his encounter with Bloodsport - only to discover that his freedom comes at a price.';
                    break;

                    case 'Monday' :
                        $movie ='Monday Movie - Scream';
                        $pic ='scream.jpg';
                        $color='purple';
                        $atl ='scream';
                        $content=  'Twenty-five years after the original series of murders in Woodsboro, a new Ghostface emerges, and Sidney Prescott must return to uncover the truth.';
                        break;

                        case 'Tuesday' :
                            $movie ='Tuesday Movie - After Life';
                            $pic ='afterlife.jpg';
                            $color='brown';
                            $atl ='afterlife';
                            $content= 'After Tony\'s wife dies, his nice-guy persona is altered into an impulsive, devil-may-care attitude; taking his old world by storm.';
                            break;

}


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
break;
case 'contact.php':
    $title ='Our Contact Page';
    $body ='contact inner';
    $headline='Welcome to Contact Page';
break;
case 'contact.php':
    $title ='Our Contact Page';
    $body ='contact inner';
    $headline='Welcome to Contact Page';
break;
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
        if(THIS_PAGE == $key) {
            $my_return .= '<li><a class="current" href=" '.$key.' "> '.$value.'</a></li>';
        } else {
            $my_return .= '<li><a href=" '.$key.' "> '.$value.'</a></li>';
        }
    } // end foreach
    return $my_return;
} // end function


// start FORM


ob_start();

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$phone = '';
$movies = '';
$country = '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$movies_err = '';
$country_err = '';
$comments_err = '';
$privacy_err = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (empty($_POST['first_name'])) {
        $first_name_err = 'Please enter your first name';
    } else {
        $first_name = $_POST['first_name'];
    }

    if (empty($_POST['last_name'])) {
        $last_name_err = 'Please enter your last name';
    } else {
        $last_name = $_POST['last_name'];
    }

    if (empty($_POST['email'])) {
        $email_err = 'Please enter your email';
    } else {
        $email = $_POST['email'];
    }

    if (empty($_POST['gender'])) {
        $gender_err = 'Please choose your gender';
    } else {
        $gender = $_POST['gender'];
    }

    //if (empty($_POST['phone'])) {
    //$phone_err = 'Please enter your phone number';
    // } else {
    //$phone = $_POST['phone'];
    // }

    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        } // end else
    } // end main if

    if (empty($_POST['movies'])) {
        $movies_err = 'What... no movies genre...????';
    } else {
        $movies = $_POST['movies'];
    }

    if ($_POST['country'] == NULL) {
        $country_err = 'Please select your country';
    } else {
        $country = $_POST['country'];
    }

    if (empty($_POST['comments'])) {
        $comments_err = 'Your comments, please!';
    } else {
        $comments = $_POST['comments'];
    }

    if (empty($_POST['privacy'])) {
        $privacy_err = 'You cannot pass go!';
    } else {
        $privacy = $_POST['privacy'];
    }

    // our lines functions
    function my_movies($movies) {
        $my_return = '';
        if(!empty($_POST['movies'])) {
            $my_return = implode(', ',$_POST['movies']);
        } else {
            $movies_err = 'Please check your movies';
        }
        return $my_return;
    }
 // end movie functions

    if(isset($_POST['first_name'],
             $_POST['last_name'],
             $_POST['email'],
             $_POST['gender'],
             $_POST['phone'],
             $_POST['movies'],
             $_POST['country'],
             $_POST['comments'],
             $_POST['privacy'])) {
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email'.date('m/d/y, h i A');
        $body = '
            First name : '.$first_name.' '.PHP_EOL.'
            Last name : '.$last_name.' '.PHP_EOL.'
            Email : '.$email.' '.PHP_EOL.'
            Gender : '.$gender.' '.PHP_EOL.'
            Phone number : '.$phone.' '.PHP_EOL.'
            country : '.$country.' '.PHP_EOL.'
            movies : '.my_movies($movies).' '.PHP_EOL.'
            Comments : '.$comments.' '.PHP_EOL.'
        ';

        if(!empty($first_name &&
                  $last_name &&
                  $email &&
                  $gender &&
                  $phone &&
                  $movies &&
                  $country &&
                  $comments &&
                  $privacy) &&
                  preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {

            $headers = array(
                'From' => 'noreply@hiendesign.cu.ma',
                'Reply to:' => ''.$email.''
            );

            mail($to, $subject, $body);
            header('Location:thx.php');

        } 
// close if not empty statement

        } 
// close isset

}  // end form

// Start Gallery php

$people['Scream'] = 'scream_December 2005_scream2.';
$people['After_Life'] = 'afterl_August 2020_afterl2.';
$people['The_Batman'] = 'batman_May 2018_batman2.';
$people['Eternal'] = 'eterna_June 2021_eterna2.';
$people['The_Euphoria'] = 'euphor_Octorber 1990_euphor2.';


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
    $my_return = '<img class="movie_img" src="images/movie'.$i.'.jpg" alt="movie'.$i.'">';
    return $my_return;
}


?>


