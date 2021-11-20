<?php include("sidebar.php") ?>
<html>

<head>
  <title>Restraunt Rank</title>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<?php

require_once "login-config.php";


$sql = "
SELECT * FROM restaurant
ORDER BY avg_rating DESC";
$res = mysqli_query($link, $sql);
if ($res) {

  echo "<div class='container'>
  <div class='card-body scroll1'>
  <div class='table-responsive'>
  <table class='table table-bordered'>
   <thead>
      <tr>
        <th scope='col'>Restaerant Name</th>
        <th scope='col'>Location</th>
        <th scope='col'>Price</th>
        <th scope='col'>Rating</th>
        <th scope='col'># of reviews</th>
      </tr>
    </thead>
  <tbody>";

  while ($row = mysqli_fetch_assoc($res)) {

    $name = $row['name'];
    $location = $row['location'];
    $avg_price = $row['avg_price'];
    $avg_rating = $row['avg_rating'];
    $review_count = $row['review_count'];


    echo "<tr>";
    echo "<th scope='row'>" . $name . "</th>";
    echo "<td>" . $location . "</td>";
    echo "<td>" . $avg_price . "</td>";
    echo "<td>" . $avg_rating . "</td>";
    echo "<td>" . $review_count . "</td>";
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

</html>