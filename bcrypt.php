<?php
$name= "example";
$nameHash= password_hash($name, PASSWORD_BCRYPT,["cost"=>11]);
echo "Hash of first input is $nameHash\n";
$nameCopy= "example";
$nameCopyHash= password_hash($nameCopy, PASSWORD_BCRYPT,["cost"=>11]);
echo "Hash of second input is $nameCopyHash\n";
$isPasswordCorrect = password_verify($nameCopy, $nameHash);
if ($isPasswordCorrect) {
	echo "Passwords matched succesfully!";
}
else{
	echo "Passwords were not matched!";
}
