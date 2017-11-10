<?php 
$myfile= fopen("newfile.txt", "w");
$content= "This file is created by Bhumesh Domala";
fwrite($myfile, $content);
fclose($myfile);
 ?>