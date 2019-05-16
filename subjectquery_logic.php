<?php

include("include/dbconn.php");

$body = "";

$emailTo = "kimschool@kimschool.online";
$subject = $_POST["subject"];
$name = $_POST["name"];
$email = $_POST["email"];
$kakao_id = $_POST["kakao_id"];
$gender = $_POST["gender"];
$visa_type = $_POST["visa_type"];
$visa_date = $_POST["visa_date"];
$subject_type = $_POST["subject_type"]; /*  수강신청: 0, 스터디신청: 1 - 추후 DB칼럼추가시 참고할 것  */

$query = "insert into kimschool_member_history (subject, name, email, kakao_id, visa_type, visa_date, gender, reg_date)
values ('$subject', '$name', '$email', '$kakao_id', '$visa_type', '$visa_date', '$gender', NOW())";
$result = mysqli_query($conn, $query);
if($result === false){
    echo mysqli_error($conn);
}

if ($gender == 0) {
    $gender = "남";
} else {
    $gender = "여";
}

if ($visa_type == 0) {
    $visa_type = "유학비자";
} else if ($visa_type == 1) {
    $visa_type = "워킹홀리데이비자";
} else if ($visa_type == 2) {
    $visa_type = "기술비자";
}

if ($visa_date == 0) {
    $visa_date = "1년이내";
} else if ($visa_date == 1) {
    $visa_date = "2년이내";
} else if ($visa_date == 2) {
    $visa_date = "3년이내";
} else if ($visa_date == 3) {
    $visa_date = "4년이내";
} else if ($visa_date == 4) {
    $visa_date = "5년이내";
}

$body .= "수강신청: $subject \r\n";
$body .= "이름: $name \r\n";
$body .= "이메일: $email \r\n";
$body .= "카카오톡 ID: $kakao_id \r\n";
$body .= "성별: $gender \r\n";
$body .= "비자종류: $visa_type \r\n";
$body .= "비자잔여기간: $visa_date \r\n";

mb_send_mail($emailTo, $subject, $body);

$subject = "당부의 말씀";
$body = "- KIMSCHOOL 수강 신청자분께 드리는 당부의 말씀 -\r\n\r\n";
$body .= "KIMSCHOOL 수강 신청 감사합니다.\r\n";
$body .= "원활한 수업 진행과 쾌적한 학습공간 유지를 위해 하기 사항 협조를 꼭 부탁 드립니다.\r\n\r\n";
$body .= "1. 개인노트북은 꼭 지참해 주시길 바랍니다.\r\n";
$body .= "※ MAC이 아닌 윈도우 노트북 지참을 권장합니다. MAC을 지참하실 경우에는 사전에 부트캠프 & 윈도우 설치를 부탁 드립니다.\r\n";
$body .= "2. 개인 쓰레기는 꼭 가지고 돌아가 주세요.\r\n";
$body .= "3. 개인 사정에 의한 수강료 환불은 어렵습니다. 스케줄을 충분히 고려하신 후, 강의에 참여 부탁드립니다.\r\n";
$body .= "4. 문의사항이 있으실 경우, 하기 카카오톡으로 연락 부탁드립니다.";
$body .= "http://pf.kakao.com/_CIAxgC   \r\n";
$body .= "5. 수강시작후 기본적으로 방문을 권장 드리고 있습니다. 목표에 따라서 필요한 기술 및 방향이 다르기 때문에 꼭 직접 방문을 부탁드리겠습니다.\r\n";
$body .= "           <<사무실 위치>> \r\n";
$body .= "〒196−0075　東京都新宿区高田馬場1−12−8 貴ビル301号 KIMSCHOOL\r\n";
$body .= "※월요일은 휴일입니다. 방문 하루나 이틀전에 카톡으로 연락주시면 상담이 가능합니다.\r\n";

mb_send_mail($email, $subject, $body);
mb_send_mail($emailTo, $subject, $body);

$conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<script>
alert("등록하신 이메일로 당부의 말씀을 확인해주세요");
window.close();
// window.location.replace("http://kimschool.xyz/timetable.html");
</script>
</body>
</html>
