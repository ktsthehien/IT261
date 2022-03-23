<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title><?php echo $title;?></title>
<link href="css/styles.css" type="text/css" rel="stylesheet">
</head>

<body>
<header>
<div class=logo>            
<a id="logo_text" href="index.php">
                <img id="logo_img" src="images/logo.png" alt="logo_img">Hien's Website
            </a>
</div>
<nav>
    
    <ul>
      <?php
     echo my_nav($nav);
?>
</ul>
    </nav>
    
    </header>