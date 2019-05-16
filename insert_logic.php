<?php
include("include/dbconn.php");

$id = $_POST["id"];
$pw = $_POST["pw"];

$query = "insert into user_info (id, pwd, auth) values ('$id', '$pw', '0')";

$result = mysqli_query($conn, $query);
if($result === false){
    echo mysqli_error($conn);
}

echo "1초 후에 테스트화면으로 돌아갑니다" . "<br>";
?>

<meta http-equiv="refresh" content="1;url=test.php">
