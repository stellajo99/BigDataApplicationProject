<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: jy_1_rank_topic.php?orderby=avg_price");
    exit;
}

require_once "login-config.php";

$username = $password = "";
$username_err = $password_err = $login_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["username"])) {
        $username_err = "Please enter username.";
    } else {
        $username = $_POST["username"];
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = $_POST["password"];
    }
    if (empty($username_err) && empty($password_err)) {
        $sql = "SELECT user_id, username, pwd FROM user WHERE username = '" . $username . "'";

        $res = mysqli_query($link, $sql);
        if ($res) {
            $row = mysqli_fetch_assoc($res);
            if ($row) {
                if ($row['pwd'] == $password) {
                    session_start();

                    $_SESSION["loggedin"] = true;
                    $_SESSION["username"] = $username;

                    header("location: jy_1_rank_topic.php?orderby=avg_price");
                } else {
                    $login_err = "Invalid username or password.";
                }
            }
            else {
                $login_err = "Invalid username or password.";
            }
            mysqli_free_result($res);
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
        
    }
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/sb-admin.css?a" rel="stylesheet">
    <link rel="icon" href="img/jelp.png">

</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <br>
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-5 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Hey there! Login to see restraunt reviews!</h1>
                                    </div>
                                    <?php
                                    if (!empty($login_err)) {
                                        echo '<div class="alert alert-danger">' . $login_err . '</div>';
                                    }
                                    ?>

                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                                            <span class="invalid-feedback"><?php echo $username_err; ?></span>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                                            <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                        </div>

                                        <p>Don't have an account? <a href="jy_0_login_register.php">Create an Account!</a>.</p>

                                        <div class="form-group">
                                            <input type="submit" class="btn btn-primary btn-user btn-block" value="Login">
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
</body>

</html>