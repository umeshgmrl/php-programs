<?php 
$my_file = 'newfile.txt';
$handle = fopen($my_file, 'r');
if (fread($handle,filesize($my_file))) {
	echo "The reading is over";
}
else{
	echo "The reading is uncomplete";
}
 ?>
