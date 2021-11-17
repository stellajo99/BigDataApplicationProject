<?php include("sidebar.php") ?>
<html>

<head>
  <title>Restraunt Rank</title>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>


<div class= "container">
<form action="rank_country.php" method="POST">
  <h1 class="text-center">  Search Restraunts By Style</h1><br>
    <div class="form-row align-items-center">
      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
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


</body>
</html>
<html>
<?php
require_once "login-config.php";
error_reporting(E_ALL ^ E_NOTICE);
$distriction = mysqli_real_escape_string($link, $_POST['country']);

$sql = "
SELECT rank() over (order by visitor_year desc) as tourspot_rank, name, pay
FROM major_tourspot
WHERE gu = ?
ORDER BY tourspot_rank;";

$sql = "
SELECT *
FROM restaurant
WHERE country = ?;";

$stmt = mysqli_stmt_init($link);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  echo "SQL statement failed";
  echo mysqli_error($link);
} else {
  //Bind parameters to the placeholder
  mysqli_stmt_bind_param($stmt, "s", $distriction);
  mysqli_stmt_execute($stmt);
  $res = mysqli_stmt_get_result($stmt);


  echo "<br><div class='container'>";

  echo "<table class='table'>";
  echo "   <thead>
            <tr>
            <th scope='col'>Style</th>
            <th scope='col'>Restaurant</th>
            <th scope='col'>Location</th>
            <th scope='col'>Rating</th>
            </tr>
            </thead>";
  echo "<tbody>";

  while ($row = mysqli_fetch_assoc($res)) {
    $name = $row['name'];
    $country = $row['country'];
    $location = $row['location'];
    $rating = $row['avg_rating'];

    echo "<tr>";
    echo "<td>" . $country . "</td>";
    echo "<td>" . $name . "</td>";
    echo "<td>" . $location . "</td>";
    echo "<td>" . $rating . "</td>";
    echo "</tr>";
  }
  echo "</tbody>";
  echo "</table>";
  echo "</div>";

  echo "<br>";
}

mysqli_free_result($res);
mysqli_close($link); ?>
</html>