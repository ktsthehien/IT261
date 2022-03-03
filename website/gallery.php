<?php
    ob_start();
    include('config.php');
    include('includes/header.php');
?>

<div id="wrapper">
    <main>
       
        <h2>This is My Favorite Movies</h2>
        <div class="table">
            <table>
                <?php foreach($people as $name => $image):?>
                <tr>
                    <td><img src="images/<?php echo substr($image,0,6) ;?>.JPG" alt="<?php echo str_replace('_', ' ', $name) ;?>" class="movie_image"></td>
                    <td class="text"><?php echo str_replace('_', ' ', $name) ;?></td>
                    <td class="text"><?php echo substr($image,7,-9) ;?></td>
                    <td><img src="images/<?php echo substr($image,-8,7) ;?>.JPG" alt="<?php echo str_replace('_', ' ', $name) ;?>" class="movie_image"></td>
                </tr>
                <?php endforeach ;?>
            </table>
        </div>
        <div class="cb"></div>
    </main>

 </div> <!--end wrapper -->

<?php
    include('includes/footer.php');
?>