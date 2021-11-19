<?php include("sidebar.php") ?>

<body>
  <?php

  require_once "login-config.php";

  $sql = "
SELECT * FROM award
ORDER BY award_name";
  $res = mysqli_query($link, $sql);
  if ($res) {

    echo "<br><br><div class='container scrolldiv'>
  <div class='card-body scroll1'>
  <div class='table-responsive'>
  <table class='table table-bordered'>
  <thead>
    <tr>
      <th scope='col'>Award Name</th>
      <th scope='col'>Award To</th>
      <th scope='col'>Award By</th>
      <th scope='col'>Award For</th>
      <th scope='col'>Award Year</th>
    </tr>
  </thead>
  <tbody>";

    while ($row = mysqli_fetch_assoc($res)) {
      $award_id = $row['award_id'];
      $award_name = $row['award_name'];
      $award_by = $row['award_by'];
      $award_for = $row['award_for'];
      $award_to = $row['rest_id'];
      $award_year = $row['award_year'];

      echo "<tr>";
      echo "<td>" . $award_name . "</td>";
      echo "<td>" . $award_to . "</td>";
      echo "<td>" . $award_by . "</td>";
      echo "<td>" . $award_for . "</td>";
      echo "<td>" . $award_year . "</td>";

      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div></div></div>";
    mysqli_free_result($res);
  } else {
    printf("Could not retrieve records. %s\n", mysqli_error($link));
  }
  mysqli_close($link);
  ?>
</body>

</html>