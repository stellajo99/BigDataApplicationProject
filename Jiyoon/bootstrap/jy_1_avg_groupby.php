<?php

require_once "login-config.php";
include("sidebar.php");

$sql = "
SELECT country, AVG(avg_price) as avg_price, AVG(avg_rating) as avg_rating
FROM restaurant
GROUP BY country
ORDER BY SUM(avg_price) DESC;
";
$res = mysqli_query($link, $sql);
if($res){

    echo "<br><div class='container scrolldiv'>";
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
      echo "<td>$ " . $avg_price . "</td>";
      echo "<td><i class='fa fa-star'/> " . $avg_rating . "</td>";
      echo "</tr>";

    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}else{
    printf("Could not retrieve records. %s\n", mysqli_error($link));
}

$sql = "
SELECT food_name, AVG(avg_price) as avg_price, AVG(avg_rating) as avg_rating
FROM food
INNER JOIN restaurant
ON food.food_name = restaurant.menu
GROUP BY food_name
ORDER BY location;
";
$res = mysqli_query($link, $sql);
if($res){
    echo "<h1 class='text-center'>Average Price for Menu</h1><br>";
    echo "<br><div class='container scrolldiv'>";

    echo "<table class='table'>";
    echo"   <thead>
            <tr>
            <th scope='col'>Menu</th>
            <th scope='col'>average price</th>
            <th scope='col'>average rating</th>
            </tr>
            </thead>";
    echo "<tbody>";

    while($row = mysqli_fetch_assoc($res)){

      $food_name = $row['food_name'];
      $avg_price = number_format((float)$row['avg_price'], 2, '.', '');
      $avg_rating = number_format((float)$row['avg_rating'], 2, '.', '');


      echo "<td>" . $food_name . "</td>";
      echo "<td>$ " . $avg_price . "</td>";
      echo "<td><i class='fa fa-star'/> " . $avg_rating . "</td>";
      echo "</tr>";

    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}else{
    printf("Could not retrieve records. %s\n", mysqli_error($link));
}

$sql = "
SELECT location, AVG(avg_price) as avg_price, AVG(avg_rating) as avg_rating
FROM food
INNER JOIN restaurant
ON food.food_name = restaurant.menu
GROUP BY food_name
ORDER BY menu;
";
$res = mysqli_query($link, $sql);
if($res){
    echo "<h1 class='text-center'>Average Price for Menu</h1><br>";
    echo "<br><div class='container scrolldiv'>";

    echo "<table class='table'>";
    echo"   <thead>
            <tr>
            <th scope='col'>location</th>
            <th scope='col'>average price</th>
            <th scope='col'>average rating</th>
            </tr>
            </thead>";
    echo "<tbody>";

    while($row = mysqli_fetch_assoc($res)){

      $location = $row['location'];
      $avg_price = number_format((float)$row['avg_price'], 2, '.', '');
      $avg_rating = number_format((float)$row['avg_rating'], 2, '.', '');


      echo "<td>" . $location . "</td>";
      echo "<td>$ " . $avg_price . "</td>";
      echo "<td><i class='fa fa-star'/> " . $avg_rating . "</td>";
      echo "</tr>";

    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}else{
    printf("Could not retrieve records. %s\n", mysqli_error($link));
}
mysqli_close($link);
