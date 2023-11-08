<?php
$newfile = fopen("shakib.txt","r");
$text = "My Name is Md Ikhtiar Uddin Shakib.";
fwrite($newfile, $text);
while (! feof($newfile))
{
    echo fgets($newfile);
}
// echo fread($newfile, filesize("shakib.txt"));
fclose($newfile);
?>
