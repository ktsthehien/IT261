<?php // our config file

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');


define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav ['index.php'] = 'Home';
$nav ['about.php'] = 'About';
$nav ['daily.php'] = 'Daily';
$nav ['soccer.php'] = 'Soccer';
$nav ['contact.php'] = 'Contact';




// create a function for our navigation, so the function is called out on our header.php page

function my_nav($nav) {
$my_return = '';
foreach($nav as $key => $value) {
if(THIS_PAGE == $key) {
$my_return .='<li><a href=" '.$key.' " class="current">'.$value.'</a></li>';
} else {
    $my_return .='<li><a href=" '.$key.' ">'.$value.'</a></li>';
} // end else
} // end foreach
return $my_return;
} //end function

switch(THIS_PAGE) {
    case 'index.php':
  $title = 'Home of my IT261 Final';
  $body = 'home';
  $headline = 'Welcome to my Home page!';
  break;
    case 'about.php':
  $title = 'About page of my IT261 Final';
  $body = 'about inner';
  $headline = 'Welcome to my About page!';
  break;
    case 'daily.php':
  $title = 'Daily page of my IT261 Final';
  $body = 'daily inner';
  $headline = 'Welcome to my Daily page!';
  break;
    case 'soccer.php':
  $title = 'Best Soccer Players';
  $body = 'project inner';
  $headline = 'Welcome to my Best Soccer Players page!';
  break;
    case 'contact.php':
    $title = 'Contact page of my IT261 Final';
    $body = 'contact inner';
    $headline = 'Welcome to my Contact page!';
  break;
    case 'soccer-view.php':
    $title = 'Soccer View Page';
    $body = 'soccer-view inner';
    $headline = 'Welcome to View Page!';
  break;
    case 'login.php':
  $title = 'Login Page';
  $body = 'login inner';
  $headline = 'Welcome to my Login Page!';
  break;
  case 'register.php':
    $title = 'Register Page';
    $body = 'register inner';
    $headline = 'Welcome to the register Page!';
    break;
    case 'thx.php':
        $title = 'Thank You';
        $body = 'thx inner';
        $headline = 'Thank you Page!';
        break;


}
// initialize/define our variables
 $first_name = '';
 $last_name = '';
 $email = '';
 $username = '';
 $password = '';
 $success = 'You have successfully logged on';
 $errors = array();

  
  
  // start FORM


ob_start();

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$phone = '';
$sport = '';
$team = '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err = '';
$sport_err = '';
$team_err = '';
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


    if(empty($_POST['phone'])) { // if empty, type in your number
        $phone_err = 'Your phone number please!';
    } elseif (array_key_exists('phone', $_POST)) {
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])){ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
            $phone_err = 'Invalid format!';
        } else {
            $phone = $_POST['phone'];
        } // end else
    } // end main if

    if (empty($_POST['sport'])) {
        $sport_err = 'What... no favorite sport...????';
    } else {
        $sport = $_POST['sport'];
    }

    if ($_POST['team'] == NULL) {
        $team_err = 'Please select your favorite team';
    } else {
        $team = $_POST['team'];
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
    function my_sport($sport) {
        $my_return = '';
        if(!empty($_POST['sport'])) {
            $my_return = implode(', ',$_POST['sport']);
        } else {
            $sport_err = 'Please check your sport';
        }
        return $my_return;
    }
 // end sport functions

    if(isset($_POST['first_name'],
             $_POST['last_name'],
             $_POST['email'],
             $_POST['gender'],
             $_POST['phone'],
             $_POST['sport'],
             $_POST['team'],
             $_POST['comments'],
             $_POST['privacy'])) {
        //$to = 'szemeo@mystudentswa.com';
        $to = 'szemeo@mystudentswa.com';
        $subject = 'Test email'.date('m/d/y, h i A');
        $body = '
            First name : '.$first_name.' '.PHP_EOL.'
            Last name : '.$last_name.' '.PHP_EOL.'
            Email : '.$email.' '.PHP_EOL.'
            Gender : '.$gender.' '.PHP_EOL.'
            Phone number : '.$phone.' '.PHP_EOL.'
            team : '.$team.' '.PHP_EOL.'
            sport : '.my_sport($sport).' '.PHP_EOL.'
            Comments : '.$comments.' '.PHP_EOL.'
        ';

        if(!empty($first_name &&
                  $last_name &&
                  $email &&
                  $gender &&
                  $phone &&
                  $sport &&
                  $team &&
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

  function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
    echo 'Error message: <b> '.$errorMsg.'</b>';
    die();
}  else {
    echo ' Houston, we have a problem!';
    die();
}
  
  
}

if(isset($_GET['today'])) {
    $today = $_GET['today'];
    } else {
    $today = date('l');
    }
    
      //switch page
        
      switch($today) {
        case 'Saturday' :
        $match = 'Saturday Match - Manchester United vs Bayern Munich 1999';
        $pic = 'match1.jpg';
        $color='orange';
        $alt = 'match1';
        $content = 'This game was the UEFA Champions League Final and is one of the most memorable games in history because of Manchester United\'s late in the game comeback. Down 1-0 against Bayern, Teddy Sheringham and Ole Gunnar Solskjær managed to score two goals during injury time, making them UEFA League Champions, and also sealing Manchester United’s treble-winning season. Earlier in that season, both contests between the teams had ended in a draw, and the hard play and sheer skill on both sides of the ball make this an incredible match to watch.';
        break;
        
        case 'Sunday' :
            $match = 'Sunday Match - Barcelona vs Real Madrid 2010';
            $pic = 'match2.jpg';
            $color='green';
            $alt = 'match2';
            $content = 'Unlike the last game mentioned, this isn\'t a match you watch because it was close, but rather because it was a good old-fashioned thrashing. It was November 29, 2019, and in an El Classico match Barcelona beat Real Madrid 5-0. What makes this one particularly interesting is that it was billed as “Ronaldo vs. Messi”, but it was Lionel Messi who really showed up in this game, making two assists.';
            break;
        
            case 'Monday' :
                $match = 'Monday Match - Brazil vs Netherlands 1998';
                $pic = 'match3.jpg';
                $color='blue';
                $alt = 'match3';
                $content = 'In the 98 World Cup Semi Finals, Brazil and the Netherlands went head-to-head in another epic overtime match. Each team scored only one goal in regular time; a goal from Ronaldo and a goal from Kluivert. This was a tough fought, defensive match that was only won out in penalty kicks.';
                break;
        
                case 'Tuesday' :
                    $match = 'Tuesday Match - Liverpool vs A.C. Milan 2005';
                    $pic = 'match4.jpg';
                    $color='purple';
                    $alt = 'match4';
                    $content = 'This was another UEFA Champions League Final that had fans on the edge of their seats. Milan was up by three goals at halftime, making prospects look bleak for Liverpool. But Liverpool would not give up and managed to tie the game in the second half, and the game went into extra time before ultimately ending in penalty shootout. This was a fantastic game.';
                    break;
        
                    case 'Wednesday' :
                        $match = 'Wednesday Match - Germany vs Brazil 2014';
                        $pic = 'match5.jpg';
                        $color='grey';
                        $alt = 'match5';
                        $content = ' Despite the absence of these players, a close match was expected, given both teams were traditional FIFA World Cup forces, sharing eight tournaments won and having previously met in the 2002 FIFA World Cup Final, where Brazil won 2-0 and earned their fifth title. This match, however, ended in a shocking loss for Brazil; Germany led 5-0 at half time, with four goals scored within six minutes, and subsequently brought the score up to 7-0 in the second half. Brazil scored a consolation goal in the last minute, ending the match 7-1. Germany\'s Toni Kroos was selected as the man of the match.';
                        break;
        
                        case 'Thursday' :
                            $match = 'Thursday Match - Argentina vs England 1986';
                            $pic = 'match6.jpg';
                            $color='yellow';
                            $alt = 'match6';
                            $content = 'There are many classic matches and legendary players that aspiring soccer stars should be studying. But the 1986 FIFA world cup certainly stands out as an epic game. Tensions were high in this rivalry, and Diego Maradona scored the two goals that allowed Argentina to win the game over England, one of which was the infamous “Hand of God goal” in which Maradona used his hand but was not caught by the officials.';
                            break;
        
                            case 'Friday' :
                                $match = 'Friday Match - Germany vs England 1990';
                                $pic = 'match7.jpg';
                                $color='brown';
                                $alt = 'match7';
                                $content = 'David Platt made it 3-2 while Paul Gascoigne looked on from the centre-circle with tears watering his eyes. Riedle brought the scores level again before Stuart Pearce took aim and fired the first blank. He was inconsolable as his low-driven spot-kick cannoned off Illgner\'s shins. Olaf Thon netted Germany\'s next penalty, meaning that Chris Waddle had to hit the target to keep alive England\'s hopes of reaching the final.  He had never taken a spot-kick in a major match in his career, and he produced a novice-like effort as he blazed the ball high over the bar. Germany were through to the final, but England went out with honour in a match that was a credit to the World Cup and to football in general.';
                                break;
        
        }

        // end switch

        
        function random_images($photos) {
          $my_return = '';
          $i = rand(1,6);
          $my_return = '<img class="soccer_img" src="images/player'.$i.'.jpg" alt="player'.$i.'">';
          return $my_return;
      }
 

 

 

 

 

 

 
