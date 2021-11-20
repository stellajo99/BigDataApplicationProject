<?php include("login-config.php") ?>

<?php
if (!$link) {
  die('could not connect:');
} else {
  $sql = "UPDATE award SET award_name='" . $_POST['award_name'] . "', award_by = '" . $_POST['award_by'] . "', award_for = '" . $_POST['award_for'] . "',award_year = " . $_POST['award_year'] . " WHERE award_id=" . $_POST['award_id'] . ";";

  $res = mysqli_query($link, $sql);
  if ($res) {
    header("location: jy_2_edit_award.php");
  } else {
    echo "<br>";
    echo "Could not retrieve records. %s\n" . mysqli_error($link);
  }
}

?>