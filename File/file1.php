<?php
$newfile = fopen("shakib.txt","w");
$text = "My Name is Md Ikhtiar Uddin Shakib.";

fwrite($newfile,$text);
fclose($newfile);
?>
