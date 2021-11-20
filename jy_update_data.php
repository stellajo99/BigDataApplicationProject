<?php include("sidebar.php") ?>
<div class='container'>

  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#update_data">
    Update Award
  </button>

  <!-- Modal -->
  <div class="modal fade" id="update_data" tabindex="-1" role="dialog" aria-labelledby="update_dataLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="update_dataLabel">Add new award!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="id32">

            <form class="modal-content animate" action="jy_operation_update.php" method="post">
              <input type="hidden" name="form_name" value="insert">
              <div class="container">
                <label for="award_name"><b>Award Name</b></label>
                <input type="text" value="<?php echo $award_name ?>" class="form-control" name="award_name" required>
                <br>
                <label for="award_by"><b>Awarded By</b></label>
                <input type="text" value="<?php echo $award_by ?>" class="form-control" name="award_by" required>
                <br>
                <label for="rest_id"><b>Awarded Restaurant ID</b></label>
                <input readonly type="number" value="<?php echo $award_id ?>" class="form-control" name="award_id" required>
                <br>
                <label for="award_for"><b>Awarded For</b></label>
                <input type="text" value="<?php echo $award_for ?>" class="form-control" name="award_for" required>
                <br>
                <label for="award_year"><b>Awarded Year </b></label>
                <input type="number" value="<?php echo $award_year ?>" class="form-control" name="award_year" required>
                <br>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>