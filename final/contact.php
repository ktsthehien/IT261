<?php // index.php

// this index page is the home page of your website
// also after creating this  index.php page you wil not be able to access it unless you login as a user, or register first, then login!

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
        <h2>Contact Hien</h2>
        
        <?php include('includes/form.php') ;?>
        
    </main>
    <aside>
        <h3>Soccer Match to Watch</h3>
        <img class="match_img" src="images/match1.jpg" alt="match1">
        <img class="match_img" src="images/match2.jpg" alt="match2">
        <img class="match_img" src="images/match3.jpg" alt="match3">
        <img class="match_img" src="images/match4.jpg" alt="match4">

    </aside>
</div> <!--end wrapper -->

<?php
include('includes/footer.php');


