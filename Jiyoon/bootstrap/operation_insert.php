<?php include("login-config.php") ?>

<?php
if (!$link) {
  die('could not connect:');
} else {
    $sql = "INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES 
    ('" . $_POST['award_name'] . "'," . $_POST['rest_id'] . ",'" . $_POST['award_by'] . "','" . $_POST['award_for'] . "'," . $_POST['award_year'] . ")";
  $res = mysqli_query($link, $sql);
}
if ($res) {
    header("location: award_edit_all.php");
} else {
  echo "Could not retrieve records. %s\n" . mysqli_error($link);
}

?>