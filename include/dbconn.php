<?php
$db = "kimschool_bank";
$host = "mysql715.db.sakura.ne.jp";
$user = "kimschool";
$passwd = "kimschool1";

try{
	$conn = new mysqli($host, $user, $passwd, $db);
}catch(Exception $ex){
	echo "fail! : ".$ex->getMessage()."<br>";
}


?>