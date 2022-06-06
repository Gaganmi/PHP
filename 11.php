<?php
$cookie_name = "user";
$cookie_value = "google";
setcookie($cookie_name, $cookie_value, time() + (86400), "/");
?>
<html>
<body>

<?php
echo"<center>GAGANDEEP SINGH <br><hr>";
if(!isset($_COOKIE[$cookie_name]))
{
    echo"cookie is not set";
}
else{
    echo"cookie is set";
}
?>
</body>
</html>