<!--PHP SESSIONS allow for website persistence-->
<?php 
    session_start();
?>

<!--This is where your site content begins. Change information such as 'content' to whatever is suitable for your site.-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="software" content="Website template with User Login/Signup Functions">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Canvis</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
        
        <!--Site Logo. Replace file in 'img' folder with your own logo-->
        <link rel="shortcut icon" href="img/canvisLogo01.jpg" type="image/x-icon">
    </head>
    <body>
        <header>
            <div class="navbar">
                <nav class="nav-header-main">
                    <a href="/canvis">
                        
                        <!--Change this to your logo as well-->
                        <img src="img/canvisLogo01.jpg" alt="logo" style="height: 50px; float: left">
                    </a>
                    
                    <!--Dropdown menu for mobile-->
                    <div class="dropdown">
                        <button class="dropbtn">
                            <i class=" fa fa-bars"></i>
                        </button>
                        <div class="dropdown-content">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Us</a></li>
                                            <div class="header-login">
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                            </form>';
                        } else {
                            echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="Username/E-mail...">
                            <input type="password" name="pwd" placeholder="Password"> 
                            <button class="login-button" type="submit" name="login-submit">Login</button>
                            </form>
                            <a href="signup.php" class="header-signup">Signup</a>';
                        }
                        ?>
                </div>
                        </div>

                        
                    </div>
                    
                    <!--Regular menu for desktop-->
                    <div class="regular-menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Us</a></li>
                <div class="header-login">
                    <?php
                        if (isset($_SESSION['userId'])) {
                            echo '<form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                            </form>';
                        } else {
                            echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="Username/E-mail...">
                            <input type="password" name="pwd" placeholder="Password"> 
                            <button class="login-button" type="submit" name="login-submit">Login</button>
                            </form>
                            <a href="signup.php" class="header-signup">Signup</a>';
                        }
                        ?>
                </div>
                    </div>

                </ul>

                
                </nav>
            </div>
        </header>
        </br>
        </br>
