<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<a href="insert.php">INSERT</a><br>
	<a href="update.php">UPDATE</a><br>
	<a href="delete.php">DELETE</a><br><br>
<?php
include("include/dbconn.php");

$query = "select * from user_info";

foreach ($conn->query($query) as $field) {
  echo $field['id'] . " : ";
  echo $field['pwd'];
  echo "<br>";
}

?>
</body>
</html>
