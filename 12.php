<?php
session_start();
$_SESSION["login"]="successful";
echo"<center>GAGANDEEP SINGH <br><hr>";
echo"Session Start<br>";
if(isset($_SESSION["login"]))
{
    echo "SUCCESSFUL";
}
session_destroy();
?>