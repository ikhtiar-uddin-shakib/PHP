<?php
$newfile = fopen("shakib.txt","r");
$text = "My Name is Md Ikhtiar Uddin Shakib.";
while (! feof($newfile))
{
    echo fgets($newfile);
}
// echo fread($newfile, filesize("shakib.txt"));
fclose($newfile);
?>
