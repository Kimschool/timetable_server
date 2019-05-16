<?php
echo "start";

include("include/dbconn.php");

$query = "select * from kimschool_member_history";

// foreach ($conn->query($query) as $field) {
//   echo $field['id'];
//   echo $field['pwd'];
//   echo $field['auth'];
//   echo "<br>"
// }

foreach ($conn->query($query) as $field) {
  echo $field['mem_no'];
  echo "<br>";
  echo $field['subject'];
  echo "<br>";
}

?>

<h1>dkfdslf</h1>
