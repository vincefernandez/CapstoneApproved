    <?php
    session_start();
    $_SESSION['Account'];
    unset($_SESSION['Account']);
    
    header("location: ../index.php");
    ?>