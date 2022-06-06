<?php
session_start();
    if(isset($_SESSION["Logout"]))
    {
        session_destroy();
        echo"<script>location.href='15Login.php'</script>";
    
    }
    else{
        echo"<script>location.href='15Login.php'</script>";
    }
?>
