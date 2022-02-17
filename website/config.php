<?php
ob_start();

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

?>
