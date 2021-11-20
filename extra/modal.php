<?php include("sidebar.php") ?>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php

                    require_once "login-config.php";
                    $orderby = 'Alandur';

                    $sql = "
SELECT * FROM restaurant
WEHRE location = `?`";

                    $stmt = mysqli_stmt_init($link);

                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                        echo "SQL statement failed";
                        echo mysqli_error($link);
                    } else {

                        //Bind parameters to the placeholder

                        mysqli_stmt_bind_param($stmt, "s", $orderby);
                        mysqli_stmt_execute($stmt);
                        $res = mysqli_stmt_get_result($stmt);

                        while ($row = mysqli_fetch_assoc($res)) {

                            $name = $row['name'];
                            $location = $row['location'];
                            $avg_price = $row['avg_price'];
                            $avg_rating = $row['avg_rating'];
                            $review_count = $row['review_count'];


                            echo $name;
                        }

                        mysqli_free_result($res);
                    }

                    mysqli_close($link);
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>


</body>



</html>