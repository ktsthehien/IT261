<?php

// movie-view.php
include('config.php');
include('./includes/header.php');

// if id has been set!
if(isset($_GET['id'])) {
    $id = (int)$_GET['id'];
} else {
    header('Location: project.php');
}

// we have to select from the table and make sure that movie=$id

$sql = 'SELECT * FROM movie WHERE movie_id = '.$id.'';

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__, __LINE__, mysqli_connect_error()));

$result = mysqli_query($iConn, $sql) or die(myError(__FILE__, __LINE__, mysqli_error($iConn)));

if (mysqli_num_rows($result) > 0) {
    // before we copy and paste our while loop, we cannot out anything here
    while ($row = mysqli_fetch_assoc($result)) {
        $movie_name = stripslashes($row['movie_name']);
        $director = stripslashes($row['director']);
        $country = stripslashes($row['country']);
        $year = stripslashes($row['year']);
        $type = stripslashes($row['type']);
        $content = stripslashes($row['content']);
        $feedback = '';
    } // closing the while loop

} else { // closing if mysql_num_rows
    $feedback = 'Houston, we have a problem!';
} // closing else

// we will 


include('header.php');

?>
<div id="wrapper">
<main>
    <h1>Welcome to our<br>Movie View Page!</h1>
    <h2>Welcome to <?php echo $movie_name ;?>'s Page</h2>
    <ul>
        <?php 
            echo '
                <li><b>Movie:</b> '.$movie_name.'</li>
                <li><b>Director:</b> '.$director.'</li>
                <li><b>Year:</b> '.$year.'</li>
                <li><b>Country:</b> '.$country.'</li>
                <li><b>Type:</b> '.$type.'</li>
                <li><p>'.$content.'</p></li>
            ';
        ?>
    </ul>
    <p><a href="project.php">Return to the project.php page!</a></p>
</main>

<aside>
    <h3>movie's image</h3>
    <figure>
        <image class="movie_img" src="images/movie<?php echo $id ;?>.jpg" alt="<?php echo $movie_name ;?>">
        <figcaption><?php echo ''.$movie_name.' '.$director.', '.$type.'';?></figcaption>
    </figure>
</aside>

</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php');