<!DOCTYPE html>
<html>
<head>
    <title>My Adder Assignment</title>
    <style>
        body {
            margin: 30px;
        }
        form {
            width: 400px;
            margin: 30px auto;
            border: 1px solid red;
            padding: 10px;
        }

        h1 {
            text-align: center;
            color: green;
        }
    </style>
</head>
<body>
    <h1>Adder.php</h1>
    <form action="" method="post">
        <label>Enter the first number:</label>
            <input type="text" name="num1"><br>
        <label>Enter the second number:</label>
            <input type="text" name="num2"><br>
        <input type="submit" value="Add Em!!">
    </form>

    <?php //adder-wrong.php

    if (isset($_POST['num1'],
              $_POST['num2'])){
                  
    if (empty($_POST['num1'] &&
              $_POST['num2'])){
    echo 'Please fill out all of the fields!';
    } else {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $myTotal = $num1 + $num2;

            echo '
            <h2>You added '.$num1.' and '.$num2.' </h2>
            <p style="color:red;"> and the answer is '.$myTotal.'!</p>
            <p><a href="">Reset page</a></p>
            ';
        
    }
}
    ?>
</body>
</html>

<!-- Step1: move php tag "below the </form> tag -->
<!-- Step2: add <!DOCTYPE html> tag-->
<!-- Step3: add style-->
<!-- Step4: delete \ in <\form action -->
<!-- Step5: add method="post" -->
<!-- Step6: add <label> tag before Enter the first number-->
<!-- Step7: change Num1 to num1-->
<!-- Step8: change </label> to <label> before "Enter the second number:"-->
<!-- Step9: add </label> tag after "Enter the second number:"-->
<!-- Step10: add " after Add Em!!-->
<!--Step11 replace ". $num1 ." to '.$num1.' -->
<!--Step12 replace .$num2. to '.$num2.'-->
<!--Step13 delete "' and put </h2> -->
<!--Step15 replace <br> to </p> and put end '-->
<!--Step16 replace " $myTotal ."!" to '.$myTotal.'! -->
<!--Step17 put closing '-->
<!--Step19 put  </p> tag and add ; in line 48-->
<!--Step20 put ?>(end php tag)-->
<!--Step21 delete ';{ -->