<?php
echo"<center>GAGANDEEP SINGH<br><hr>";
$fav = "yellow";

switch($fav)
{
    case "blue" : 
    echo " Your favourite color is blue!";
    break;
    case "red" : 
    echo " Your favourite color is red!";
    break;
    case "yellow" : 
    echo " Your favourite color is yellow!";
    break;
    default :
    echo "Your favourite color is neither blue, red, nor yellow!";
}
?>