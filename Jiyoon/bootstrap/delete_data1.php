<!-- Button trigger modal -->
<button type="button" class="btn btn-circle btn-danger" data-toggle="modal" data-target="#delete-data">
  <i class="fa fa-trash" aria-hidden="true"></i>
</button>
<div class="modal" id="delete-data" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Are you sure you want to delete this data?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <form class="modal-content animate" action="data-delete_data.php" method="post">
        <input type="button" class="btn btn-primary">No</button>
        <input type="submit" class="btn btn-danger" data-dismiss="modal">Yes, Delete</button>
      </form>
      </div>
    </div>
  </div>
</div>

<?php
if(!$link){
  die('could not connect:');
}else{

  $sql = "Delete from award where award_id =  '".$award_id."'";
  $res = mysqli_query($link, $sql);
    if($res){
      echo "done";
    }else{
      printf("Could not retrieve records. %s\n", mysqli_error($link));
    }
}

?>
