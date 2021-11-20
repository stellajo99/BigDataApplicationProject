<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="css/sb-admin-2.min.css?a" rel="stylesheet">
    <link rel="icon" href="img/jelp.png">

</head>

<body class="bg-gradient-primary">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <br>
                <div class="card o-hidden shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Change Award #<?php echo $award_id; ?> Data</h1>
                                    </div>
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
    </div>
</body>

</html>