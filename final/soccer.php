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
<?php endif ; ?>
</header>


<div id="wrapper">

<main> 

    <h1>Welcome to my Soccer page</h1>

    <?php
    $sql = 'SELECT * FROM soccer_players';
    // then we are going to connect to the database!!!

    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    // we are asking if the number of rows is greater than zero, then we will be able to see the table...

    if(mysqli_num_rows($result) > 0) {
        // think about our one row being an array - an associative array $row['first_name']
        while($row = mysqli_fetch_assoc($result)) {
            echo '
                <h2>Information about '.$row['player_name'].'</h2>
                <ul>
                    <li><b>Player:</b>'.$row['player_name'].'</li>
                    <li><b>Born:</b>'.$row['born'].'</li>
                    <li><b>Country:</b>'.$row['country'].'</li>
                </ul>
                <p>For more information about '.$row['player_name'].' click <a href="soccer-view.php?id='.$row['player_id'].'">here</a></p>
            ';
        } // close while loop

    } // close if statement

    ?>

</main>

<aside>
    <h3>Who is number 1 soccer player in the world?
</h3>
    <?php echo random_images($photos) ;?>
</aside>

</div>
<!-- end wrapper -->
<?php
include ('includes/footer.php')
?>