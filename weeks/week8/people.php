<?php

include('config.php');
include('./includes/header.php');

?>

<main>

    <h1>Welcome to my people page</h1>

    <?php
    $sql = 'SELECT * FROM people';
    // then we are going to connect to the database!!!

    $iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

    $result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

    // we are asking if the number of rows is greater than zero, then we will be able to see the table...

    if(mysqli_num_rows($result) > 0) {
        // think about our one row being an array - an associative array $row['first_name']
        while($row = mysqli_fetch_assoc($result)) {
            echo '
                <h2>Information about '.$row['first_name'].'</h2>
                <ul>
                    <li><b>First Name:</b>'.$row['first_name'].'</li>
                    <li><b>Last Name:</b>'.$row['last_name'].'</li>
                    <li><b>Birthdate:</b>'.$row['birthdate'].'</li>
                </ul>
                <p>For more information about '.$row['first_name'].' click <a href="people-view.php?id='.$row['people_id'].'">here</a></p>
            ';
        } // close while loop

    } // close if statement

    ?>

</main>

<aside>
    <h3>This is my aside that will be describe random images!</h3>
    <?php echo random_images($photos) ;?>
</aside>

</div>
<!-- end wrapper -->

<?php

include('./includes/footer.php');