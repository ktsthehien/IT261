<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ;?>" method="post">
        <fieldset>
            <legend>Contact Hien</legend>

            <label>First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
            <span class="error"><?php echo $first_name_err ;?></span>

            <label>Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
            <span class="error"><?php echo $last_name_err ;?></span>

            <label>Email</label>
            <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span class="error"><?php echo $email_err ;?></span>

            <label>Gender</label>
            <ul>
                <li>
                    <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked="checked" ';?>>Female
                </li>
                <li>
                    <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked="checked" ';?>>Male
                </li>
                <li>
                    <input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked="checked" ';?>>Neither
                </li>
            </ul>
            <span class="error"><?php echo $gender_err ;?></span>

            <label>Phone</label>
            <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <span class="error"><?php echo $phone_err ;?></span>

            <label>Favorite Movie Genre</label>
            <ul>
                <li>
                    <input type="checkbox" name="movies[]" value="action movie" <?php if(isset($_POST['movies']) && in_array('action movie', $movies)) echo 'checked="checked" ';?>>Action Movie
                </li>
                <li>
                    <input type="checkbox" name="movies[]" value="drama" <?php if(isset($_POST['movies']) && in_array('drama', $movies)) echo 'checked="checked" ';?>>Drama
                </li>
                <li>
                    <input type="checkbox" name="movies[]" value="comedy" <?php if(isset($_POST['movies']) && in_array('comedy', $movies)) echo 'checked="checked" ';?>>Comedy
                </li>
                <li>
                    <input type="checkbox" name="movies[]" value="horror movie" <?php if(isset($_POST['movies']) && in_array('horror movie', $movies)) echo 'checked="checked" ';?>>Horror Movie
                </li>
            </ul>
            <span class="error"><?php echo $movies_err ;?></span>

            <label>Country</label>
            <select name="country">
                <option value="" NULL <?php if(isset($_POST['country']) && $_POST['country'] == NULL) echo 'selected = "unselected"' ;?>>Select one</option>
                <option value="united state" <?php if(isset($_POST['country']) && $_POST['country'] == 'united state') echo 'selected = "selected"' ;?>>United States</option>
                <option value="england" <?php if(isset($_POST['country']) && $_POST['country'] == 'england') echo 'selected = "selected"' ;?>>England</option>
                <option value="korea" <?php if(isset($_POST['country']) && $_POST['country'] == 'korea') echo 'selected = "selected"' ;?>>Korea</option>
                <option value="japan" <?php if(isset($_POST['country']) && $_POST['country'] == 'japan') echo 'selected = "selected"' ;?>>Japan</option>
                <option value="spain" <?php if(isset($_POST['country']) && $_POST['country'] == 'spain') echo 'selected = "selected"' ;?>>Spain</option>
            </select>
            <span class="error"><?php echo $country_err ;?></span>

            <label>Comments</label>
            <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>
            <span class="error"><?php echo $comments_err ;?></span>

            <label>Privacy</label>
            <ul>
                <li>
                    <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked="checked" ';?>>You must agree!
                </li>
            </ul>
            <span class="error"><?php echo $privacy_err ;?></span>

            <input type="submit" value="Send it!">
            <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>'" value="Reset">
        </fieldset>
    </form>