<?php include('sidebar.php') ?>

<?php
require "restaurant-core.php";

// (A2) SAVE GUEST BOOK ENTRY
if (isset($_POST["name"])) {
    if ($REST->save($_POST["name"], $_POST["location"], $_POST["type"], $_POST["avg_price"], $_POST["avg_rating"], $_POST["menu"],$_POST["review_count"])) {
        echo '';
    } else {
        echo "<div>$REST->error</div>";
    }
}

// (A3) GET GUEST BOOK ENTRIES
$entries = $REST->get_all();
?>
<?php include "dbConn.php"; ?>

<div class="container-fluid">

    <h1 class="h3 mb-1 text-gray-800">Insert New Restaurant Data!</h1>
    <br>
    <div class="row">
        <div class="col-lg-4">

            <div class="card position-relative">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Fill Restaurant Information!</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="post" target="_self" id="gb-form">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control form-control-user" name="name" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Location:</label>
                            <input type="text" class="form-control form-control-user" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="comment">Type:</label>
                            <input type="text" class="form-control form-control-user" name="country" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="comment">Average Price:</label>
                            <input type="number" class="form-control form-control-user" name="avg_price" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="comment">Average Rating:</label>
                            <input type="number" class="form-control form-control-user" name="avg_rating" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="comment">Menu:</label>
                            <input type="text" class="form-control form-control-user" name="menu" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="comment">Review Count:</label>
                            <input type="number" class="form-control form-control-user"  name="review_count" required></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-user btn-block" type="submit" value="Add Restaurant" />
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </div>

</div>

</div>
<?php include('footer.php') ?>