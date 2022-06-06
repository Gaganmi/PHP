<?php
echo"<center>GAGANDEEP SINGH<br><hr>";
$mobile=array("Vivo","Nokia", "Mi");
sort($mobile);
print_r($mobile);
echo"<br><hr>";
$num=array(15,10,50,33,14);
rsort($num);
print_r($num);
echo"<br><hr>";
$age = array("Gagan"=>"20", "Ajeet"=>"30", "Aman"=>"15");
asort($age);
print_r($age);
echo"<br><hr>";
$age= array("Viney"=>"37", "Gopal"=>"10", "Harsh"=>"25");
ksort($age);
print_r($age);
echo"<br><hr>";
$age= array("Rahul"=>"25", "Rohan"=>"20", "Yash"=>"42");
arsort($age);
print_r($age);
echo"<br><hr>";
$age= array("Ajmani"=>"22", "Meghansh"=>"33", "Ajay"=>"45");
krsort($age);
print_r($age);
echo"<br><hr>";
?>