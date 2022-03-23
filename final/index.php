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
<h3 class="hello">Hello
<?php echo $_SESSION['username']; ?>
</h3>
<p class="outlog"><a href="index.php?logout='1' ">Logout</a></p>
</div> <!-- end welcome-logout div -->
<main>
<?php endif ; ?>
</header>
<div id="wrapper">
<h1>Welcome to my website for IT261 - Winter 2022</h1>
<h2>Top 10 Greatest Soccer Players Of All Time</h2>

<img id="image-soccer" src="images/soccer.jpg" alt="soccer">
</main>
<aside>
    <p>As the most beautiful game, Soccer has seen some of the greatest soccer players of all time. Football unites people from across the countries. We have not seen any game with such influence and it is one of the best sports in the world. </p>
</aside>

</div> <!-- end div wrapper-->
<?php
include('includes/footer.php');


