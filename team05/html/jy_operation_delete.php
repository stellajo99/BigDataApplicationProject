<?php include("login-config.php") ?>

<?php
if (!$link) {
  die('could not connect:');
} else {
  $sql = "DELETE FROM award WHERE award_id =".$_POST["award_id"];
  $res = mysqli_query($link, $sql);
  if ($res) {
  header("location: jy_2_edit_award.php");
} else {
  echo $sql; 
  echo "<br>";
  echo "Could not retrieve records. %s\n" . mysqli_error($link);
}
}


?>