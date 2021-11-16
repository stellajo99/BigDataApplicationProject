<?php include('sidebar.php') ?>

<?php
// (A) PAGE INIT
// (A1) LOAD LIBRARY + SET PAGE ID
// GIVE EVERY PAGE A "UNIQUE ID"
// OR JUST USE "1" FOR A SINGLE GUESTBOOK FOR THE ENTIRE SITE
require "guestbook-core.php";
$pid = 1;

// (A2) SAVE GUEST BOOK ENTRY
if (isset($_POST["name"])) {
    if ($_GB->save($pid, $_POST["email"], $_POST["name"], $_POST["comment"])) {
        echo '';
    } else {
        echo "<div>$_GB->error</div>";
    }
}

// (A3) GET GUEST BOOK ENTRIES
$entries = $_GB->get($pid);
?>
<?php include "dbConn.php"; ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-1 text-gray-800">Community</h1>

    <br>
    <!-- Content Row -->
    <div class="row">

        <!-- Grow In Utility -->
        <div class="col-lg-4">

            <div class="card position-relative">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Say something!</h6>
                </div>
                <div class="card-body">
                    <form class="user" method="post" target="_self" id="gb-form">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control form-control-user" name="name" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control form-control-user" name="email" required />
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" name="comment" required></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-user btn-block" type="submit" value="Sign Guestbook" />
                        </div>
                    </form>


                </div>
            </div>

        </div>

        <!-- Fade In Utility -->
        <div class="col-lg-8">

            <div class="card position-relative">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">What are people saying?</h6>
                </div>
                <div class="card-body scroll">

                    <?php
                    include "dbConn.php"; // Using database connection file here

                    $records = mysqli_query($db, "select * from guestbook"); // fetch data from database

                    while ($data = mysqli_fetch_array($records)) {
                    ?>
                        <div class="col-lg-10">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <?= $data["name"] ?> <br><span class="gb-name-a"><?= $data["datetime"] ?></span>
                                    <a href="edit.php?id=<?php echo $data['name']; ?>" class="btn btn-primary btn-sm float-right">
                                        Edit
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="gb-comment"><?= $data["comment"] ?></div>
                                </div>
                            </div>
                        </div>

                    <?php
                    } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php include('footer.php') ?>