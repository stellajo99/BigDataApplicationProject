<?php include("login-config.php") ?>

<?php
if (!$link) {
  die('could not connect:');
} else {
  $sql = "SELECT * FROM award WHERE award_id = " . $_POST["award_id"];
  $res = mysqli_query($link, $sql);
  if ($res) {
    $row = mysqli_fetch_assoc($res);
    $award_id = $row['award_id'];
    $award_name = $row['award_name'];
    $award_by = $row['award_by'];
    $award_for = $row['award_for'];
    $award_to = $row['rest_id'];
    $award_year = $row['award_year'];
    include("jy_update_data_page.php");
  } else {
    echo "Could not retrieve records. %s\n" . mysqli_error($link);
  }
}
?>