

<?php
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swirch Classwork Exercise</title>
    <style>
        #wrapper{
            width:940px;
            margin:20px auto;}

        #photo{
            float:left;
        margin:20px 20px;
        width: 600px;
        
        }
    </style>
    </head>
  

<body>
    <div id="wrapper">
        <h1>My Wonderful Switch Classwork Exercise!</h1>
        <h2><?php
         echo $movie;
        ?></h2>
        <p><?php echo $content;?></p>
        <img id="photo" src="images/<?php echo $pic; ?>" alt="<?php echo $alt;?>">
        

        <h2>
            Daily Movie
        </h2>
        
        <ul>
        <li><a href="switch.php?today=Monday">Monday</a></li>
        <li><a href="switch.php?today=Tuesday">Tuesday</a></li>
        <li><a href="switch.php?today=Wednesday">Wednesday</a></li>
        <li><a href="switch.php?today=Thursday">Thursday</a></li>
        <li><a href="switch.php?today=Friday">Friday</a></li>
        <li><a href="switch.php?today=Saturday">Saturday</a></li>
        <li><a href="switch.php?today=Sunday">Sunday</a></li>
        </ul>
        
 


    </div> <!-- end wrapper -->
    </body>
    </html>

    
   