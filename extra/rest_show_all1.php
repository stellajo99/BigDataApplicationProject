<?php include("sidebar.php") ?>

<body>
  <div class='container'>
    <div class='card-body'>
      <form action="rest_show_all.php" method="GET">
        <br>
        <h1 class="text-center">Selection</h1><br>
        <div class="col-auto my-1">
          <select class="form-control form-control-sm" id="allergic_to" name="country">
            <option value="Egg">Egg</option>
            <option value="Peanut">Peanut</option>
            <option value="Both">Both</option>
          </select>
        </div>
        <div class="pull-right">
          <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <?php

  require_once "login-config.php";

  $sql = '
  SELECT *
  FROM food
  INNER JOIN restaurant 
  ON food.food_name = restaurant.menu;';

  $res = mysqli_query($link, $sql);
  if ($res) {

    echo "
    <div class='container scrolldiv'>
      <div class='card-body scroll1'>
        <div class='table-responsive'>
          <table class='table table-striped table-dark table-bordered'>
            <thead class='thead-dark'>
              <tr>
              <th scope='col'>Restaurant Name</th>
              <th scope='col'>Location</th>
              <th scope='col'>Type of food</th>
              <th scope='col'>Average Price for one</th>
              <th scope='col'>Rating</th>
              <th scope='col'># of reviews</th>
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
    printf("Could not retrieve records. %s\n", mysqli_error($link));
  }
  mysqli_close($link);
  echo "<br>";
  ?>


  <?php
  if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['someAction'])) {
    func();
  }
  function func()
  {
    // do stuff     
  }
  ?>
</body>

</html>