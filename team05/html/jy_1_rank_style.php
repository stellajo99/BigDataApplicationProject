<?php include("sidebar.php") ?>

<body>

  <div class="container">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
      <h1 class="text-center"> Search Restraunts By Style</h1><br>
      <div class="form-row align-items-center">
        <div class="col-auto my-1">
          <select class="form-control form-control-sm" id="select_country" name="country">
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

  $country = mysqli_real_escape_string($link, $_GET['country']);

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
    mysqli_stmt_bind_param($stmt, "s", $country);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);


    echo "<br><div class='container scrolldiv scrollbar-morpheus-den'>";
    echo "<h4>Restaurant style << <b>" . $country . " </b>>></h4><br>";
    echo "<table class='table table-bordered table-striped table-dark '>";
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