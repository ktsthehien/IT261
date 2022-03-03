<?php

//if id has been set
include('config.php');

if (isset($_GET['id'])){
    $id=(int)$_GET['id'];
} else {
    header('Location:people.php');
}

//we have to select from the table and make sure that peple_id = $id

$sql='SELECT * FROM people WHERE people_id = '.$id.'';

//we will place all of the php here before we call out ther hearder.php



include('./includes/header.php');
?>
<main>

<h1>Welcome to our People View Page!
</main>


<aside>
<h3> We will display the image of the politician that we see on this page!

</aside>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');