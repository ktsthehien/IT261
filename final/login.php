<?php // login.php page
// input fields for username and password

include('server.php'); // the server.php is connected to the config page which is connected to the credentials page
include('includes/header-no-nav.php');
?>
<div id="wrapper">
<h1 class="center">Login</h1>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);    ?>" method="post">

<fieldset>
        <label>Username</label>
        <input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

        <label>Password</label>
        <input type="password" name="password">
        
        <button type="submit" class="btn" name="login_user">Login</button>

        <button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>'">Resset</button>
    
        <?php
            include('errors.php');
        ;?>
    </fieldset>

</form>

<h3 class="center">Not a member?</h3>
<span class="center"><a href="register.php">Register here!</a></span>

</div> <!-- close wrapper -->
</body>
</html>
