<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="<?php if (isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']); ?>">
            <span class="error"><?php echo $first_name_Err; ?></span>
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php if (isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']); ?>">
            <span class="error"><?php echo $last_name_Err; ?></span>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
            <span class="error"><?php echo $email_Err; ?></span>

            <label for="phone">Phone Number</label>
            <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if (isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']); ?>">
            <span class="error"><?php echo $phone_Err; ?></span>

            <label for="budget">Your Budget</label>
            <ul>
                <li>
                    <input type="radio" name="budget" value="$1000 - $5000" <?php if (isset($_POST['budget']) && $_POST['budget'] == '$1000 - $5000') echo 'checked="checked"'; ?>>$1000 - $5000</li>
                <li>
                    <input type="radio" name="budget" value="$5000 - $15000" <?php if (isset($_POST['budget']) && $_POST['budget'] == '$5000 - $15000') echo 'checked="checked"'; ?>>$5000 - $15000</li>
                <li>
                    <input type="radio" name="budget" value="$15000 - $25000" <?php if (isset($_POST['budget']) && $_POST['budget'] == '$15000 - $25000') echo 'checked="checked"'; ?>>$15000 - $25000</li>
            </ul>
            <span class="error"><?php echo $budget_Err; ?></span>

            <label for="city">City you travel to</label>
            <ul>
                <li>
                    <input type="checkbox" name="city[]" value="Seattle" <?php if (isset($_POST['city']) && in_array('Seattle', $city)) echo 'checked="checked"'; ?>>Seattle
                </li>
                <li>
                    <input type="checkbox" name="city[]" value="Los Angeles" <?php if (isset($_POST['city']) && in_array('Los Angeles', $city)) echo 'checked="checked"'; ?>>Los Angeles
                </li>
                <li>
                    <input type="checkbox" name="city[]" value="Portland" <?php if (isset($_POST['city']) && in_array('Portland', $city)) echo 'checked="checked"'; ?>>Portland
                </li>
                <li>
                    <input type="checkbox" name="city[]" value="Santa Barbara" <?php if (isset($_POST['city']) && in_array('Santa Barbara', $city)) echo 'checked="checked"'; ?>>Santa Barbara
                </li>
                <li>
                    <input type="checkbox" name="city[]" value="San Diego" <?php if (isset($_POST['city']) && in_array('San Diego', $city)) echo 'checked="checked"'; ?>>San Diego
                </li>
            </ul>
            <span class="error"><?php echo $city_Err; ?></span>
            <label for="type">Type of your travel</label>
            <select name="type">
                <option value="" NULL <?php if (isset($_POST['type']) && $_POST['type'] == NULL) echo 'selected = "unselected"'; ?>>Select One</option>

                <option value="ft" <?php if (isset($_POST['type']) && $_POST['type'] == 'ft') echo 'selected = "unselected"'; ?>>Family Travel (group of 5+ people)</option>

                <option value="fh" <?php if (isset($_POST['type']) && $_POST['type'] == 'fh') echo 'selected = "unselected"'; ?>>Pet Friendly (2 persons + 1 pet)</option>

                <option value="fg" <?php if (isset($_POST['type']) && $_POST['type'] == 'fg') echo 'selected = "unselected"'; ?>>Friends Group (groups of 7+ persons)</option>

                <option value="sga" <?php if (isset($_POST['type']) && $_POST['type'] == 'sga') echo 'selected = "unselected"'; ?>>Single Get Away Trip (1 person trip)</option>

                <option value="nw" <?php if (isset($_POST['type']) && $_POST['type'] == 'nw') echo 'selected = "unselected"'; ?>>New Visitors to the City (group of 2+ people)</option>

                <option value="rt" <?php if (isset($_POST['type']) && $_POST['type'] == 'rt') echo 'selected = "unselected"'; ?>>Romantic Trip (One couple)</option>

            </select>


            <span class="error"><?php echo $type_Err; ?></span>
            <label for="comments">Comments
                <textarea name="comments"><?php if (isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']); ?></textarea>
            </label>
            <span class="error"><?php echo $comments_Err; ?></span>



            <label for="agreement">Privacy</label>
            <ul>
                <li>
                    <input type="radio" name="agreement" value="agree" <?php if (isset($_POST['agreement']) && $_POST['agreement'] == 'agree') echo 'checked="checked"'; ?>>I agree to the terms and conditions.</li>
            </ul>
            <span class="error"><?php echo $agreement_Err; ?>
            </span>
            <input type="submit" value="Send it">
            <a href=" ">Reset</a>
        </fieldset>
    </form>
