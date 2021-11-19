<?php include("sidebar.php") ?>
<div class='container'>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Award
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new award!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="id32">

          <form class="modal-content animate" action="insert_data.php" method="get">
            <input type="hidden" name="add_data" value="insert">
            <div class="container">
              <label for="award_name"><b>Award Name</b></label>
              <input type="text" placeholder="Enter District" class="form-control" name="award_name" required>
              <br>
              <label for="award_by"><b>Awarded By</b></label>
              <input type="text" placeholder="Enter Name" class="form-control" name="award_by" required>
              <br>
              <label for="rest_id"><b>Awarded Restaurant ID</b></label>
              <input type="text" placeholder="Enter Name" class="form-control" name="rest_id" required>
              <br>
              <label for="award_for"><b>Awarded For</b></label>
              <input type="text" placeholder="Enter insta" class="form-control" name="award_for" required>
              <br>
              <label for="award_year"><b>Awarded Year </b></label>
              <input type="text" placeholder="Enter food" class="form-control" name="award_year" required>
              <br>
              <button type="submit" class="btn btn-primary">Insert</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<?php include("login-config.php") ?>
<?php

if (!$link) {
  die('could not connect:');
} else {
  $rest_id = $_GET['rest_id'];
  $award_name = $_GET['award_name'];
  $award_by = $_GET['award_by'];
  $award_for = $_GET['award_for'];
  $award_year = $_GET['award_year'];
  
    $sql = "INSERT INTO award (award_name, rest_id, award_by, award_for, award_year) VALUES 
    ('" . $_POST['award_name'] . "'," . $_POST['rest_id'] . ",'" . $_POST['award_by'] . "','" . $_POST['award_for'] . "'," . $_POST['award_year'] . ")";
  $res = mysqli_query($link, $sql);

}
if ($res) {
  echo "he";
} else {
  echo "Could not retrieve records. %s\n" . mysqli_error($link);
}

mysqli_close($link);
?>