<!--Simply allows for the session to be destroyed, thus logging the user out.-->
<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
