<?php include("sidebar.php") ?>
<html>

<head>
  <title>Restraunt Rank</title>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
  <div class='container'>
    <div class='card-body'>
      <form action="rank_all.php" method="GET">
        <br>
        <h1 class="text-center">Rank Restaurants by feature</h1><br>
        <div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="orderby" value="avg_price">
            <label class="form-check-label">Price</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="orderby" value="avg_rating" checked>
            <label class="form-check-label">Rating</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="orderby" value="review_count">
            <label class="form-check-label"># of Reviews</label>
          </div>
        </div>
        <div class="col-auto my-1">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>

</body>

</html>
<html>
<?php

error_reporting(E_ALL ^ E_NOTICE);

require_once "login-config.php";

$orderby = $_GET['orderby'];

$sql = "
SELECT * FROM restaurant
ORDER BY ?; ";

$stmt = mysqli_stmt_init($link);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo "SQL statement failed";
} else {
  //Bind parameters to the placeholder
  mysqli_stmt_bind_param($stmt, "s", $orderby);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);

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
}
mysqli_close($link);
?>

</html>