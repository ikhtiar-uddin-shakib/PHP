<?php
$newfile = fopen("shakib.txt","r");
$text = "My Name is Md Ikhtiar Uddin Shakib.";

echo fread($newfile, filesize("shakib.txt"));
fclose($newfile);
?>
