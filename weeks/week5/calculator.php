<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link href="css/calculator_styles.css" type="text/css" rel="stylesheet">
</head>

<body>
    <h1>My Travel Caluculator</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    
        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ; ?>">
        <label>Total miles driving?</label>
        <input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ; ?>">
        <label>How fast do you typically drive?</label>
        <input type="number" name="fast" value="<?php if(isset($_POST['fast'])) echo htmlspecialchars($_POST['fast']) ; ?>">
        <label>How many hours per day do you plan on driving?</label>
        <input type="number" name="hours" value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']) ; ?>">
        
        <label>Price of gas</label>
        <ul>
            <li>
                <input type="radio" name="price" value="3.00" <?php if(isset($_POST['price']) && $_POST['price'] == 3.00) echo 'checked = "checked" '; ?> >$3.00
            </li>
            <li>
                <input type="radio" name="price" value="3.50" <?php if(isset($_POST['price']) && $_POST['price'] == 3.50) echo 'checked = "checked" '; ?> >$3.50
            </li>
            <li>
                <input type="radio" name="price" value="4.00" <?php if(isset($_POST['price']) && $_POST['price'] == 4.00) echo 'checked = "checked" '; ?> >$4.00
            </li>
        </ul>

        <select name="mpg">
            <option value="" NULL <?php if(isset($_POST['mpg']) && $_POST['mpg'] == NULL) echo 'selected = "unselected"' ; ?>>Select one</option>
            <option value="10" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '10') echo 'selected = "selected"' ; ?>>Terrible @ 10mpg</option>
            <option value="20" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '20') echo 'selected = "selected"' ; ?>>Okay @ 20mpg</option>
            <option value="30" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '30') echo 'selected = "selected"' ; ?>>Good @ 30mpg</option>
            <option value="40" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '40') echo 'selected = "selected"' ; ?>>Great @ 40mpg</option>
            <option value="50" <?php if(isset($_POST['mpg']) && $_POST['mpg'] == '50') echo 'selected = "selected"' ; ?>>Execellent @ 50mpg</option>
        </select>

        <input type="submit" value="Calculate">
        <p><a href="">Reset</a></p>
    </form>
    
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            echo '<span class="error"><b>Please fill out your Name!</b></span>';
        }
        if (empty($_POST['miles'])) {
            echo '<span class="error"><b>Please fill out your total driving miles!</b></span>';
        }
        if (empty($_POST['fast'])) {
            echo '<span class="error"><b>Please fill out how fast will you be driving!</b></span>';
        }
        if (empty($_POST['hours'])) {
            echo '<span class="error"><b>How many hours per day would you like to drive?</b></span>';
        }
        if (empty($_POST['price'])) {
            echo '<span class="error"><b>Your cost of gas, please!</b></span>';
        }
        if ($_POST['mpg'] == NULL) {
            echo '<span class="error"><b>Please select your car\'s efficiency!</b></span>';
        }
        
        if(isset($_POST['name'],
                 $_POST['miles'],
                 $_POST['fast'],
                 $_POST['hours'],
                 $_POST['price'],
                 $_POST['mpg'])) {
        
            $name = $_POST['name'];
            $miles = floatval($_POST['miles']);
            $fast = floatval($_POST['fast']);
            $hours = floatval($_POST['hours']);
            $price = floatval($_POST['price']);
            $mpg = floatval($_POST['mpg']);

            if(!empty ($name && $miles && $fast && $hours && $price && $mpg)) {

                $total_hours = $miles / $fast;
                $total_days = $total_hours / $hours;
                $total_gas = $miles / $mpg;
                $total_cost = $total_gas * $price;

                echo '
                <div class="box">
                    <p>Hello '.$name.', you will be travelling a total of <b>'.number_format($total_hours, 2).' hours</b>, taking <b>'.number_format($total_days, 2).' days</b>.</p>
                    <p>And, you will be using <b>'.number_format($total_gas).' gallons</b> of gas, costing you <b>$'.number_format($total_cost).' dollars</b>.</p>
                </div>
                ';
            

            } // end empty

        } // end isset

    } // end SERVER

    ?>
</body>
</html>