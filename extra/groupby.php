<?php include("sidebar.php")?>

<head>
  <title>Restraunt Rank</title>
</head>

<?php

require_once "login-config.php";

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
    echo "</tbody>
    </table>
    </div>";
}else{
    printf("Could not retrieve records. %s\n", mysqli_error($link));
}
mysqli_free_result($res);
mysqli_close($link);?>
?>


