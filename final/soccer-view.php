<?php

session_start();

include('config.php');

// if the user does not login correctly they will be directed to the login page?

if(!isset($_SESSION['username'])) {
    $_SESSION['msg'] = 'You must login first';
    header('Location:login.php');
}

if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location:login.php');
}

include('includes/header.php');



if(isset($_SESSION['success'])) :?>

<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);
?>
</h3>
</div>  <!-- end div success -->
<?php endif ; 

if(isset($_SESSION['username'])) : ?>

<div class="welcome-logout">
<h3>Hello
<?php echo $_SESSION['username']; ?>
</h3>
<p class="outlog"><a href="index.php?logout='1' ">Logout</a></p>
</div> <!-- end welcome-logout div -->
<?php endif ;

// if id has been set!
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: project.php');
}

// we have to select from the table and make sure that soccer=$id

$sql = 'SELECT * FROM soccer_players WHERE player_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    // before we copy and paste our while loop, we cannot out anything here
    while ($row = mysqli_fetch_assoc($result)) {
        $player_name = stripslashes($row['player_name']);
        $born = stripslashes($row['born']);
        $country = stripslashes($row['country']);
        $height = stripslashes($row['height']);
        $position = stripslashes($row['position']);
        $details = stripslashes($row['details']);
        $feedback = '';
    } // closing the while loop

} else { // closing if mysql_num_rows
    $feedback = 'Houston, we have a problem!';
} // closing else

// we will 



?>
<div id="wrapper">
<main>
    <h1>Welcome to our<br>Soccer Player View Page!</h1>
    <h2>Welcome to <?php echo $player_name ;?>'s Page</h2>
    <ul>
        <?php 
            echo '
                <li><b>Player:</b> '.$player_name.'</li>
                <li><b>Born:</b> '.$born.'</li>
                <li><b>Country:</b> '.$country.'</li>
                <li><b>Height:</b> '.$height.'</li>
                <li><b>Position:</b> '.$position.'</li>
                <li><p>'.$details.'</p></li>
            ';
        ?>
    </ul>
    <p><a href="soccer.php">Return to the soccer.php page!</a></p>
</main>

<aside>
    <h3>player's image</h3>
    <figure>
        <image class="soccer_img" src="images/player<?php echo $id ;?>.jpg" alt="<?php echo $player_name ;?>">
        <figcaption><?php echo ''.$player_name.' '.$born.', '.$country.'';?></figcaption>
    </figure>
</aside>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');