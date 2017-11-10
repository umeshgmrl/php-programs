<?php 
$myfile= fopen("newfile.txt", "a") or die('Cannot open file:  '.$myfile);
$text= "The program was ran at ".date("h:i:sa")." ".date("Y/m/d")."\n";
fwrite($myfile, $text);
fclose($myfile);
echo "Hi this is a time stamp program\nThe time is logged";
?>