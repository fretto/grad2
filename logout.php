
<?php
    //assign session to null
    ob_start();
    session_start();
    
    $_SESSION['username'] = null;
    $_SESSION['firstname'] = null;
    $_SESSION['lastname'] = null;
    
    header("Location: login.php");
?>