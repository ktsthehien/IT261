<footer>
<ul>
            <li>Copyright &copy; 
                <?php 
                $date_current = date('Y');
                $date_created = 2022;
                if($date_current == $date_created){
                    echo $date_current;
                } else {
                    echo ''.$date_created.'-'.$date_current.'';
                }
                
                ;?>
                <li> All Rights Reserved</li>
                <li> <a href="../index.php">My Website</a></li>
                <li> <a id="html-checker" href="">HTML Validation</a></li>
                <li> <a id="css-checker" href="">CSS Validation</a></li>
                <li><a id="github" href="https://github.com/ktsthehien/IT261">My GitHub</a></li>


            </ul>
        </div> <!-- end inner footer -->
    </footer>

    <script>
        document.getElementById
            ("html-checker").setAttribute
            ("href", "http://validator.w3.org/nu/?doc=" + location.href);
        document.getElementById
            ("css-checker").setAttribute
            ("href", "https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>

</body>
</html>