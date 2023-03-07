<?php

$file='file.txt';

if(file_exists($file))
{
    // readfile($file);


    $handle=fopen($file,'r');
    $contents=fread($handle,filesize($file));
    fclose($handle);
    echo $contents;
}
else
{
    $handle=fopen($file,'w');
    $contents='Sarah'.PHP_EOL.'Tamanna'.PHP_EOL.'ZARA';
    fwrite($handle,$contents);
    fclose($handle);
}

?>