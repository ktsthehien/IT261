<?php // this will be my errors page
// logic, if we have more than 0 errors, we need to display them 
// don't forget we cannot echo an array, we will use foreach loop





if(count($errors) > 0 ) :?>
<div class="error">
<?php foreach($errors as $error) : ?>
<p><?php echo $error; ?> </p>
<?php endforeach; ?>
</div>
<?php endif; ?>