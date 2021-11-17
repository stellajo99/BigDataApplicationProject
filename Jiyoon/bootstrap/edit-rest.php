<?php
session_start();
 
// Check if logged in, if yes redirect to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === false){
    header("location: login-page.php");
    exit;
}
 
// Include config file
require_once "login-config.php";

include "dbConn.php"; // Using database connection file here

$rest_id = $_GET['rest_id']; // get id through query string

$qry = mysqli_query($db, "select * from restaurant where post_id='$rest_id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data
$email_err = "";

if (isset($_POST['update'])) // when click on Update button
{
    if ($name == $_GET['name']) {
        $location = $_POST['location'];
        $name = $_POST['name'];

        $edit = mysqli_query($db, "update restaurant set name='$name', location='$location' where rest_id='$rest_id'");

        if ($edit) {
            mysqli_close($db); // Close connection
            header("location:mainpage.php"); // redirects to all records page
            exit;
        } else {
            echo mysqli_error($db);
        }
    }
    else{
        $email_err = "Wrong email!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            font: 14px sans-serif;
        }

        .wrapper {
            width: 360px;
            padding: 20px;
        }
    </style>

</head>

<body class="bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Change Comment!</h1>
                                    </div>
                                    <?php
                                    if (!empty($login_err)) {
                                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                                    }
                                    ?>

                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <div class="form-group">
                                            <label for="name">name</label>
                                            <input class="form-control form-control-user" type="text" name="name" value="<?php echo $data['name'] ?>" placeholder="Enter name" Required>
                                        </div>
                                        <div class="form-group">
                                            <label for="comment">comment</label>
                                            <input class="form-control form-control-user" type="text" name="comment" value="<?php echo $data['comment'] ?>" placeholder="Enter comment" Required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Confirm email to change data</label>
                                            <input class="form-control form-control-user" type="text" name="email" value="" placeholder="Enter email" Required>
                                        </div>
                                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                                        <br>
                                        <div class="row">
                                            <input class="btn btn-primary" type="submit" name="update" value="Update">
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>