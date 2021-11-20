<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="img/jelp.png">

  <title>JELP</title>

  <!-- Custom styles for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <style>
    div.scrolldiv {
      margin: 4px, 4px;
      padding: 4px;
      width: 100%;
      height: 500px;
      overflow-x: hidden;
      overflow-y: auto;
      text-align: justify;
    }

    table.table-fit {
      width: auto !important;
      table-layout: auto !important;
    }

    table.table-fit thead th,
    table.table-fit tfoot th {
      width: auto !important;
    }

    table.table-fit tbody td,
    table.table-fit tfoot td {
      width: auto !important;
    }
  </style>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="jy_0_login_main.php">
        <div class="sidebar-brand-icon">
          <img src="img/jelp.png" alt="JELP icon" width="50%" height="50%">
        </div>
        <div class="sidebar-brand-text mx-3">JELP</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
      <!-- Divider -->
      <hr class="sidebar-divider">
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <?php include("login-logout-button.html") ?>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Ranking Related
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-sort-amount-down-alt"></i>
          <span>Ranking</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="jy_1_rank_topic.php?orderby=avg_rating">Rank by topic</a>
            <a class="collapse-item" href="jy_1_rank_style.php?country=Korean">Rank by country</a>
            <a class="collapse-item" href="jy_1_select_award.php?award_name=New+York+Times">Rank by award</a>
            <a class="collapse-item" href="jy_1_avg_groupby.php">Averages by topic</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Edit Data</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="jy_2_edit_award.php">Edit award data</a>
            <a class="collapse-item" href="jy_2_allergic.php?allergic_to=Egg">Alergic to somethig?</a>

          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        My Review
      </div>

            <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="sy_0_admin.php">
          <i class="fas fa-user"></i>
          <span>My Settings</span>
        </a>
        <a class="nav-link" href="sy_1_recommendation.php">
          <i class="fas fa-thumbs-up"></i>
          <span>Recommendation</span>
        </a>     
      </li>

    </ul>
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">