<?php
$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");
$txt = "RELEASE";
fwrite($myfile, $txt);
fclose($myfile);
?>

