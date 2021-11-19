<?php include("sidebar.php") ?>

<body>
  <div class='container'>
    <div class='card-body'>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="GET">
        <br>
        <h1 class="text-center">Allergic to someting?</h1><br>
        <p><b>Choose What you are allgergic to and we will show you restaurants that do not contain those products!</b></p>
        <div class="form-row align-items-center">
          <div class="col-auto my-1">
            <select class="form-control form-control-sm" id="allergic_to_id" name="allergic_to">
              <option value="Egg">Egg</option>
              <option value="Peanut">Peanut</option>
              <option value="Both">Both</option>
            </select>
          </div>
          <div class="pull-right">
            <button type="submit" class="btn btn-primary pull-right">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <?php

  require_once "login-config.php";
  $allergic_to = mysqli_real_escape_string($link, $_GET['allergic_to']);
  if ($allergic_to=='Both'){
    $sql = "
      SELECT *
      FROM food
      INNER JOIN restaurant 
      ON food.food_name = restaurant.menu
      WHERE food.food_allergies ='none';";
  }
  else{
      $sql = "
  SELECT *
  FROM food
  INNER JOIN restaurant 
  ON food.food_name = restaurant.menu
  WHERE NOT food.food_allergies LIKE '%" . $allergic_to . "%';";
  }


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
              <th scope='col'>Menu</th>
              <th scope='col'>Ingredients</th>
              <th scope='col'>Allergic</th>
              </tr>
            </thead>
            <tbody>";

    while ($row = mysqli_fetch_assoc($res)) {
      $name = $row['name'];
      $menu = $row['menu'];
      $food_ingred = $row['food_ingred'];
      $food_allergies = $row['food_allergies'];

      echo "<tr>";
      echo "<th scope='row'>" . $name . "</th>";
      echo "<td>" . $menu . "</td>";
      echo "<td>" . $food_ingred . "</td>";
      echo "<td>" . $food_allergies . "</td>";
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