<?php include("sidebar.php") ?>

<body>
  <div class='container'>
    <div class='card-body'>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
        <br>
        <h1 class="text-center">Rank Restaurants by feature</h1><br>
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="orderby" value="avg_price">
              <label class="form-check-label">Price</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="orderby" value="avg_rating">
              <label class="form-check-label">Rating</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="orderby" value="review_count">
              <label class="form-check-label"># of Reviews</label>
            </div>
          </div>
          <div class="pull-right">
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

</body>

<?php

require_once "login-config.php";

$orderby = $_GET['orderby'];

if (!$orderby) {
  $orderby = 'avg_price';
}

$sql = "
SELECT * FROM restaurant
ORDER BY " . $orderby;

if ($orderby == 'avg_price') {
  $sql = $sql . " ;";
} else {
  $sql = $sql . " DESC;";
}


$res = mysqli_query($link, $sql);
if ($res) {

  echo "<div class='container'>";
  echo "<h4>Restaurants Ranked by << <b>" . $orderby . " </b>>></h4><br>
  <div class='card-body scrolldiv'>
  <div class='table-responsive'>
  <table class='table table-bordered w-auto'>
   <thead>
      <tr>
        <th scope='col' class='text-center'>Restaurant Name</th>
        <th scope='col' class='text-center'>Location</th>
        <th scope='col' class='text-center'>Type of food</th>
        <th scope='col' class='text-center'>Average Price for one</th>
        <th scope='col' class='text-center'>Rating</th>
        <th scope='col' class='text-center'># of reviews</th>
      </tr>
    </thead>
  <tbody>";

  while ($row = mysqli_fetch_assoc($res)) {

    $name = $row['name'];
    $location = $row['location'];
    $country = $row['country'];
    $avg_price = $row['avg_price'];
    $avg_rating = $row['avg_rating'];
    $review_count = $row['review_count'];


    echo "<tr>";
    echo "<th scope='row'>" . $name . "</th>";
    echo "<td>" . $location . "</td>";
    echo "<td>" . $country . "</td>";
    echo "<td>$ " . $avg_price . "</td>";
    echo "<td><i class='fa fa-star'/>" . $avg_rating . "</td>";
    echo "<td>" . $review_count . "</td>";
    echo "</tr>";
  }

  echo "</tbody>";
  echo "</table>";
  echo "</div></div></div>";

  mysqli_free_result($res);
} else {
  printf("Could not retrieve records. %s\n");
}
mysqli_close($link);
?>

</html>