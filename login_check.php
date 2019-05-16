<?php

$id = $_POST['id'];
$pwd = $_POST['pwd'];
include("include/dbconn.php");

// 유저 정보 확인 처리
$query = "select * from user_info where id='$id' and pwd='$pwd'";
$result = $conn->query($query);

// 세션 오픈
session_start();

// login check proccess
if($result->num_rows === 1){
	$row = $result->fetch_array(MYSQLI_ASSOC);
	$_SESSION['id'] = $id;
	header('Location: table.php');
} else {
	$_SESSION['msg'] = "아이디 또는 패스워드가 일치하지 않습니다.";
	header('Location: login.php');
}
// 	if($row['pwd'] == $pwd){
		// header('Location: table.php');
// 	}else{
// 		echo "Passwordが不一致";
// 	}
// }else{
// 	echo "DBからデータ取得 失敗";
// 	header('Location: login.html');
// }
?>
