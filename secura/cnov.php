<?php

$update=$_GET["update"];

$myfile = fopen("novosti.txt", "a") or die("Unable to open file!");
fwrite($myfile, $update);
fclose($myfile);

?>