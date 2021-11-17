<?php include("sidebar.php")?>
<html>
<head>
  <title>Restraunt Rank</title>
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>
</html>
<?php
require_once "login-config.php";


$sql = "
SELECT rank() over (order by (0.6*avg_price + 0.4*tourism) desc) as gu_rank, gu, hotel, tourism
FROM visitor_gu
ORDER BY gu_rank;";

$sql = "
SELECT rank() over (order by avg_price) desc) as avg_price
FROM restaurant
ORDER BY avg_price;";
$sql = "
SELECT * FROM restaurant
ORDER BY avg_rating, avg_price DESC;
";
$res = mysqli_query($link, $sql);
if($res){

    echo "<div class='container'>";
    echo "<br><h1 class='text-center'>Rank of Restaurants!</h1><br>";
    echo "
    <div class='card-body scroll1'>
    <div class='table-responsive'>";
    echo "<table class='table table-bordered'>";
    echo"   <thead>
            <tr>
            <th scope='col'>Rank</th>
            <th scope='col'>Name</th>
            <th scope='col'>Price</th>
            <th scope='col'>Rating</th>
            </tr>
            </thead>";
    echo "<tbody>";

    while($row = mysqli_fetch_assoc($res)){

        $name = $row['name'];
        $location = $row['location'];
        $avg_price = $row['avg_price'];
        $avg_rating = $row['avg_rating'];


        echo "<tr>";

        echo "<th scope='row'>" . $name . "</th>";
        echo "<td>" . $location . " Gu </td>";
        echo "<td>" . $avg_price . "</td>";
        echo "<td>" . $avg_rating . "</td>";
        echo "</tr>";

    }
    echo "</tbody>";
    echo "</table>";
    echo "</div></div></div>";
}else{
    printf("Could not retrieve records. %s\n", mysqli_error($link));
}
mysqli_free_result($res);

$sql = "
SELECT gu, sum(visitor_year) as sum
FROM major_tourspot
GROUP BY gu
ORDER BY sum(visitor_year) desc;";
$sql = "
SELECT country, AVG(avg_price) as avg_price, AVG(avg_rating) as avg_rating
FROM restaurant
GROUP BY country
ORDER BY SUM(avg_price) DESC;
";
$res = mysqli_query($link, $sql);
if($res){

    echo "<br><div class='container'>";
    echo "<h1 class='text-center'>Average Price for Restraunts</h1><br>";
    echo "<table class='table'>";
    echo"   <thead>
            <tr>
            <th scope='col'>country</th>
            <th scope='col'>average price</th>
            <th scope='col'>average rating</th>
            </tr>
            </thead>";
    echo "<tbody>";

    while($row = mysqli_fetch_assoc($res)){

      $country = $row['country'];
      $avg_price = number_format((float)$row['avg_price'], 2, '.', '');
      $avg_rating = number_format((float)$row['avg_rating'], 2, '.', '');


      echo "<td>" . $country . "</td>";
      echo "<td>" . $avg_price . "</td>";
      echo "<td>" . $avg_rating . "</td>";
      echo "</tr>";

    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}else{
    printf("Could not retrieve records. %s\n", mysqli_error($link));
}
?>

<html>


<div class= "container">
<form action="rank.php" method="POST">
  <h1 class="text-center">    The Most Visited places in District</h1><br>
    <div class="form-row align-items-center">
      <div class="col-auto my-1">
        <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
        <select class="form-control form-control-sm" id="inlineFormCustomSelect" name="country">
          <option selected>Choose...</option>
          <option value="Korean">Korean</option>
          <option value="Japanese">Japanese</option>
          <option value="Western">Western</option>
        </select>
      </div>
      <div class="col-auto my-1">

        <button type="submit" class="button button1" onclick="onclick(event)">Submit</button>
      </div>
    </div>

</form>
</div>

  <script>

  function onclick(event) {
    event.preventDefault();
  }
  </script>

</html>

<?php
error_reporting(E_ALL ^ E_NOTICE);
$distriction = mysqli_real_escape_string($link, $_POST['country']);

$sql = "
SELECT rank() over (order by visitor_year desc) as tourspot_rank, name, pay
FROM major_tourspot
WHERE gu = ?
ORDER BY tourspot_rank;";

$sql = "
SELECT name, country
FROM restaurant
WHERE country = ?;";

$stmt = mysqli_stmt_init($link);

  if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL statement failed";
    echo mysqli_error($link);
  }
  else {
    //Bind parameters to the placeholder
    mysqli_stmt_bind_param($stmt, "s", $distriction);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);


    echo "<br><div class='container'>";

    echo "<table class='table'>";
    echo"   <thead>
            <tr>
            <th scope='col'>name</th>
            <th scope='col'>country</th>
            </tr>
            </thead>";
    echo "<tbody>";

    while($row = mysqli_fetch_assoc($res)){
      $name = $row['name'];
      $country = $row['country'];

      echo "<tr>";
      echo "<td>" . $name . "</td>";
      echo "<td>" . $country . "</td>";
      echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";

    echo "<br>";
  }

mysqli_free_result($res);
mysqli_close($link);?>
