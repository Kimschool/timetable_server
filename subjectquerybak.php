<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Do+Hyeon">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<?php
$subject = $_GET["subject"];
?>
<body style="font-family: 'Do Hyeon', sans-serif;">
<div class="contact-clean">
    <form action="subjectquery_logic.php" method="post">
        <div class="container"><i class="fa fa-pencil d-xl-flex justify-content-xl-center" style="font-size: 87px;"></i></div>
        <h2 class="text-center">수강 신청</h2>
        <div class="form-group"><small class="form-text text-muted">수강 과목</small><input class="form-control" type="text" name="subject" value="<? $subject ?>" disabled=""></div>
        <div class="form-group"><small class="form-text text-muted">이름</small><input class="form-control" type="text" name="name" placeholder="이름"></div>
        <div class="form-group"><small class="form-text text-muted">이메일</small><input class="form-control" type="text" name="email" placeholder="이메일"></div>
        <div class="form-group"><small class="form-text text-muted">카카오톡 ID</small><input class="form-control" type="text" name="kakao_id" placeholder="KAKAO ID or LINE ID"></div>
        <div class="form-group"><small class="form-text text-muted">비자종류</small><select class="custom-select" name="visa_type" readonly="" required=""><option value="" selected="">선택해주세요</option><option value="0">유학비자</option><option value="1">워킹홀리데이비자</option><option value="2">기술비자</option></select></div>
        <div
                class="form-group"><small class="form-text text-muted">비자잔여기간</small><select class="custom-select" name="visa_date" readonly="" required=""><option value="0" selected="">1년이내</option><option value="1">2년이내</option><option value="2">3년이내</option><option value="3">4년이내</option><option value="4">5년이내</option></select></div>
        <div
                class="form-group"><small class="form-text text-muted">성별<br></small><input type="radio" name="gender" value="0" checked=""><span>남</span><input type="radio" name="gender" value="1"><span>여</span></div>
        <div class="form-group"><button class="btn btn-primary" type="submit">send </button></div>
        <input type="hidden" name="subject_type" value="0">
    </form>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>