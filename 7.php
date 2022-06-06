<?php
echo"<center>GAGANDEEP SINGH<br><hr>";
$a=array("blue"=>5,"red"=>14,"green"=>15,"yellow"=>20,"grey"=>13);
print_r(array_pad($a,7,"red"));
echo"<br><hr>";
print_r(array_slice($a,2));
echo"<br>";
foreach($a as $x=>$x_value)
{
    echo"key ".$x." value=".$x_value;
    echo"<br>";
}
echo"<hr>";
$a1=array("a"=>"red", "b"=>"green","c"=>"yellow", "d"=>"blue");
$a2=array("a"=>"grey", "b"=>"pink");
array_splice($a1,0,2,$a2);
print_r($a1);
echo"<br><hr>";
$z= array("Dog", "Cat", "Mouse");
list($a,$b,$c)=$z;
echo "Animals : <br> $a<br> $b<br> $c";
?>