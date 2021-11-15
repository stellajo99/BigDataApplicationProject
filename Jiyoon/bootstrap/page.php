
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Cards</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
<body id="page-top">
  <?php
  // (A) PAGE INIT
  // (A1) LOAD LIBRARY + SET PAGE ID
  // GIVE EVERY PAGE A "UNIQUE ID"
  // OR JUST USE "1" FOR A SINGLE GUESTBOOK FOR THE ENTIRE SITE
  require "core.php";
  $pid = 1;
  
  // (A2) SAVE GUEST BOOK ENTRY
  if (isset($_POST["name"])) {
    if ($_GB->save($pid, $_POST["email"], $_POST["name"], $_POST["comment"])) {
      echo "<div>Guest Book Entry Saved</div>";
    } else {
      echo "<div>$_GB->error</div>";
    }
  }
  
  // (A3) GET GUEST BOOK ENTRIES
  $entries = $_GB->get($pid);
  ?>


  <!-- (B) GUEST BOOK ENTRIES -->
  <div class="row">
  <div class="container-fluid">
  <?php if (count($entries)>0) { foreach ($entries as $e) { ?>
    <div class="col-lg-6">
      <div class="card mb-4">
        <div class="card-header">
          <?=$e["name"]?> at <span class="gb-name-a"><?=$e["datetime"]?></span>
        </div>
        <div class="card-body">
          <div class="gb-comment"><?=$e["comment"]?></div>
        </div>
  </div>
  </div>
  <?php }} ?></div>
  
  <!-- (C) ADD NEW ENTRY -->
  <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">
  <div class="col-xl-10 col-lg-12 col-md-9">
    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg">
                  <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Leave a comment!</h1>
                    </div>
                    <form class="user" method="post" target="_self" id="gb-form">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control form-control-user" name="name" required/>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control form-control-user" name="email" required/>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control"  name="comment" required></textarea>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-user btn-block" type="submit" value="Sign Guestbook"/>
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
