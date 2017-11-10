<?php 
if ($file_x= fopen("delete_test_file.txt", "w")) {
	echo "The test file is created\n";
	fclose($file_x);
}
if (unlink("delete_test_file.txt")) {
	echo "The test file is deleted\n";
}
echo "over";
 ?>