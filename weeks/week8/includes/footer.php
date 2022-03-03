<footer>
<div class="inner">
    <ul>
        <li>Copyright <?=date('Y') ?></li>
        <li> All Rights Reserved</li>
        <li> <a href="../../index.php">Web Design by Hien Nguyen</a></li>
        <li> <a id="html-checker" href="">HTML Validation</a></li>
        <li> <a id="css-checker" href="">CSS Validation</a></li>


</ul>
</footer>



<?php
//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
</body>
</html>