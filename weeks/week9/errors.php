<?php 
// errors page which we eill be using a for each loop
// we are going to be counting errors
// if we have more than XERO errors, not a good thing. we will need to echo our message
if(count($errors) > 0 ) :?>
<div class="error">
<?php foreach($errors as $error) : ?>
<p><?php echo $error; ?> </p>
<?php endforeach; ?>
</div>
<?php endif; ?>