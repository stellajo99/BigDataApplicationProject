<?php include("sidebar.php") ?>

<body>
  <?php

  require_once "login-config.php";

  $sql = "
  SELECT *
  FROM award
  INNER JOIN restaurant
  ON award.rest_id = restaurant.rest_id
  ORDER BY award_id DESC;";

  $res = mysqli_query($link, $sql);
  if ($res) {
    echo "
    <div class='container '>
    <div class='card-body'>";
    echo "
    <h1 class='text-center'>Edit Award Data!</h1><br>
    ";
    include("jy_insert_data.html");
    include("jy_update_data_before.html");
    include("jy_delete_data.html");
    echo "</div></div>";

    echo "
    <div class='container scrolldiv scrollbar-morpheus-den'>
      <div class='card-body'>
      <div class='table-responsive'>
      <table class='table table-striped table-dark table-bordered'>
      <thead>
        <tr>
        <th scope='col'>Award Id</th>
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
      $name = $row['name'];
      $award_year = $row['award_year'];

      echo "<tr>";
      echo "<td>" . $award_id . "</td>";
      echo "<td>" . $award_name . "</td>";
      echo "<td>" . $name . "</td>";
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
  echo "<br>";

  ?>

</body>

</html>