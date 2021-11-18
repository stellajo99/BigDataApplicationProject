<?php include("sidebar.php") ?>

<body>

  <div class="container">
    <form action="rank_country.php" method="GET">
      <h1 class="text-center"> Search Restraunts By Style</h1><br>
      <div class="form-row align-items-center">
        <div class="col-auto my-1">
          <select class="form-control form-control-sm" id="inlineFormCustomSelect" name="country">
            <option selected value="Korean">Korean</option>
            <option value="Japanese">Japanese</option>
            <option value="Chinese">Chinese</option>
            <option value="Dessert">Dessert</option>
            <option value="Western">Western</option>
          </select>
        </div>
        <div class="col-auto my-1">
          <button type="submit" class="btn btn-primary" onclick="onclick(event)">Submit</button>
        </div>
      </div>
    </form>
  </div>

  <script>
    function onclick(event) {
      event.preventDefault();
    }
  </script>

  <?php

  require_once "login-config.php";

  $distriction = mysqli_real_escape_string($link, $_GET['country']);

  $sql = "
SELECT rank() over (order by visitor_year desc) as tourspot_rank, name, pay
FROM major_tourspot
WHERE gu = ?
ORDER BY tourspot_rank;";

  $sql = "
SELECT *
FROM restaurant
WHERE country = ?
ORDER BY avg_rating DESC, avg_price;";

  $stmt = mysqli_stmt_init($link);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    echo "SQL statement failed";
    echo mysqli_error($link);
  } else {
    mysqli_stmt_bind_param($stmt, "s", $distriction);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);


    echo "<br><div class='container scrolldiv'>";

    echo "<table class='table'>";
    echo "   <thead>
            <tr>
            <th scope='col'>Restaurant Name</th>
            <th scope='col'>Location</th>
            <th scope='col'>Type of food</th>
            <th scope='col'>Average Price for one</th>
            <th scope='col'>Rating</th>
            <th scope='col'>Menu</th>
            </tr>
            </thead>";
    echo "<tbody>";

    while ($row = mysqli_fetch_assoc($res)) {
      $name = $row['name'];
      $location = $row['location'];
      $country = $row['country'];
      $avg_price = $row['avg_price'];
      $avg_rating = $row['avg_rating'];
      $menu = $row['menu'];

      echo "<tr>" .
        "<th scope='row'>" . $name . "</th>"
        . "<td>" . $location . "</td>"
        . "<td>" . $country . "</td>"
        . "<td>$ " . $avg_price . "</td>"
        . "<td><i class='fa fa-star'/>" . $avg_rating . "</td>"
        . "<td>" . $menu . "</td>"
        . "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";

    echo "<br>";
  }

  mysqli_free_result($res);
  mysqli_close($link); ?>
</body>

</html>