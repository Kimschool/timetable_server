<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>studentmanage</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gamja+Flower">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Indie+Flower">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<?php
  session_start();
  // echo $_SESSION['id'];
  if(!isset($_SESSION['id'])){
  	$_SESSION['msg'] = "로그인 해주십시오.";
  	header('Location: login.php');
  }


  include("include/dbconn.php");

  $q = "select * from kimschool_member_history";

?>
<div class="d-flex justify-content-end">
  <input type="button" class="btn btn-outline-dark" value="logout"  onclick="location.href='logout.php'"/>
</div>
<body style="font-family: 'Gamja Flower', cursive;">
    <div class="table-responsive">
        <table class="table table-striped table-hover table-sm">
            <caption>20명 단위로 표시합니다.</caption>
            <thead>
                <tr style="background-color: #9dc8c8;">
                    <th>학생번호</th>
                    <th>신청과목</th>
                    <th>이름</th>
                    <th>이메일</th>
                    <th>카카오톡ID</th>
                    <th>성별</th>
                    <th>비자종류</th>
                </tr>
            </thead>
            <tbody>
              <?php
                foreach($conn->query($q) as $result) {
                  echo "<tr>";
                  echo "<td>";
                  echo $result['mem_no'];
                  echo "</td>";
                  echo "<td>";
                  echo $result['subject'];
                  echo "</td>";
                  echo "<td>";
                  echo $result['name'];
                  echo "</td>";
                  echo "<td>";
                  echo $result['email'];
                  echo "</td>";
                  echo "<td>";
                  echo $result['kakao_id'];
                  echo "</td>";
                  echo "<td>";
                  if($result['gender'] === 0){
                    echo "남";
                  } else {
                    echo "여";
                  }
                  echo "</td>";
                  echo "<td>";
                  echo $result['visa_type'];
                  echo "</td>";
                  echo "</tr>";
                }
               ?>
            </tbody>
        </table>
    </div>
    <nav class="d-flex justify-content-center justify-content-xl-center">
      <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
      </ul>
    </nav>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
