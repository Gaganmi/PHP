<?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "GAGANDEEP SINGH\n";
fwrite($myfile, $txt);
$txt ="GAGANDEEP SINGH\n";
fwrite($myfile, $txt);
fclose($myfile);
?>