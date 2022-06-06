<?php
echo "<center>GAGANDEEP SINGH<br><hr>";
$X= date("d");
if($X<"10")
{
    echo "Have a Good Morning!";
}
elseif($X<"50")
{
    echo "Have a Good Night!";
}
else{
    echo "Have a Good Day!";
}
?>