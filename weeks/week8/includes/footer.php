<footer>
<div class="inner">
    <ul>
        <li>Copyright <?=date('Y') ?></li>
        <li> All Rights Reserved</li>
        <li> <a href="../../index.php">Web Design by Hien Nguyen</a></li>
        <li> <a id="html-checker" href="">HTML Validation</a></li>
        <li> <a id="css-checker" href="">CSS Validation</a></li>


</ul>

</div>

<script>
        document.getElementById
            ("html-checker").setAttribute
            ("href", "http://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById
            ("css-checker").setAttribute
            ("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
</footer>



<?php
//release web server resources
@mysqli_free_result($result);

//close connection to mysql
@mysqli_close($iConn);

?>
</body>
</html>