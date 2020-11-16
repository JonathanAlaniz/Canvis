<?php
    require 'header.php';
?>


<main>
    <div class="wrapper-main">
        <section class="section-default">
            <h1>Signup</h1>
            <?php
            
                /*Displays the ERROR messages. Does not control the error parameters. Regex and validators is in 'signup.inc.php' in the 'includes' folder.*/
                if(isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfields") {
                        echo '<p class="signuperror">Please fill in empty fields</p>';
                    } else if ($_GET['error'] == "invaliduidmail") {
                        echo '<p class="signuperror">Invalid username or email</p>';
                    } 
                    else if ($_GET['error'] == "invaliduid") {
                        echo '<p class="signuperror">Invalid username</p>';
                    } 
                    else if ($_GET['error'] == "invalidmail") {
                        echo '<p class="signuperror">Invalid email</p>';
                    } 
                    else if ($_GET['error'] == "passwordcheck") {
                        echo '<p class="signuperror">Passwords do not match</p>';
                    }
                    else if ($_GET['error'] == "usertaken") {
                        echo '<p class="signuperror">Username already exists</p>';
                    }
                }
                else if ($_GET["signup"] == "success") {
                    echo '<p class="signupsuccess">Signup successful!</p>';
                }
            ?>
            <form action="includes/signup.inc.php" method="post">
                <input type="text" name="uid" placeholder="Username">
                <input type="text" name="mail" placeholder="E-mail">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                <button type="submit" name="signup-submit">Signup</button>
            </form>
            
            <!--Password Recovery Form. (Contact me to purchase Recovery system files. Uses PHP Mailer for professional email authentication)-->
            <?php
                if (isset($_GET["newpwd"])) {
                    if ($_GET["newpwd"] == "passwordupdated") {
                        echo '<p class="signupsuccess">Your password has been reset!</p>';
                    }
                }
            ?>
            <a href="reset-password.php">Forgot your password?</a>
        </section>
    </div>
</main>
<?php 
    require 'footer.php';
?>
