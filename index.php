<!--Continues from header.php file-->
<?php 
    require 'header.php';
?>

<!--This is the body, the main content of your site.-->
<main>
    <div class="wrapper-main">
        <section class="section-default" style="color: white;">
            <?php
                if (isset($_SESSION['userId'])) {
                    
                    /*If you want to only show something to users that are logged in, put it inside this if tag*/
                    
                    $username = $_SESSION['userUid'];
                    $greeting = '</br>'.'Hello '. $username . '!';
                    echo $greeting;
                    echo '<h1>Quality Content</h1>';
                }
                else {
                    
                    /*Otherwise they will see this content as default*/
                    echo '<p>Login or Signup to view content</p>';
                }
            ?>
        </section>
    </div>
</main>

<?php 
    require 'footer.php';
?>