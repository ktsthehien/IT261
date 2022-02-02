<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form.php</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <form action="" method="post">
        <label>Name</label>
        <input type="text" name="name">
        <label>Phone</label>
        <input type="tel" name="tel">
        <label>How many Lattes?</label>
        <input type="number" name="lattes">
        <label>How many Capucinos?</label>
        <input type="number" name="capucinos">
        <label>How many Americanos?</label>
        <input type="number" name="americanos">
        <label>Special Requests</label>
        <textarea name="comments"></textarea>
        <input type="submit" value="Place my order">
    </form>
    <p><a href="">Reset</a></p>
    
    <?php
    // name, tel, lattes, capucinos, americanos, comments
    date_default_timezone_set('America/Los_Angeles');
    $our_time = date('H:i');

    if(isset($_POST['name'],
             $_POST['tel'],
             $_POST['lattes'],
             $_POST['capucinos'],
             $_POST['americanos'],
             $_POST['comments'])) {
        if(empty($_POST['name'] &&
                 $_POST['tel'] &&
                 $_POST['lattes'] &&
                 $_POST['capucinos'] &&
                 $_POST['americanos'] &&
                 $_POST['comments'])) {
            
            echo 'Please fill out all of the fields!';
        } else {
            // we are difining the variables!!!
            $name = $_POST['name'];
            $tel = $_POST['tel'];
            $lattes = $_POST['lattes'];
            $capucinos = $_POST['capucinos'];
            $americanos = $_POST['americanos'];
            $comments = $_POST['comments'];
            $total = $lattes + $capucinos + $americanos;

            // add an if elseif regarding time!
            if ($our_time <= 11) {
                echo '<h2>Good Morning, '.$name.'</h2>';
            } else if ($our_time <= 17) {
                echo '<h2>Good Afternoon, '.$name.'</h2>';
            } else {
                echo '<h2>Good Evening, '.$name.'</h2>';
            } // end else re time

            echo '
            <p>Thank you for your order, we will be texting you at '.$tel.' </p>
            <p>You have ordered the following:</p>
            <div class="box">
                <ul>
                    <li><b>Lattes: </b>'.$lattes.'</li>
                    <li><b>Capucinos: </b>'.$capucinos.'</li>
                    <li><b>Americanos: </b>'.$americanos.'</li>
                    <li><b>For a total of: </b>'.$total.' beverages</li>
                </ul>
            </div>
            ';

            // echo $tel;
            // echo '<br>';
            // echo $lattes;
            // echo '<br>';
            // echo $capucinos;
            // echo '<br>';
            // echo $americanos;
            // echo '<br>';
            // echo $comments;
            // echo '<br>';
            // echo $total;
            // echo '<br>';
        } // end else
    } // end isset

    ?>
</body>
</html>