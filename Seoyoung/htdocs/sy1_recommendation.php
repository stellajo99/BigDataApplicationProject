<?php
require_once('config.php');

$sql = "SELECT *, rank() over (order by avg_rating desc) as rating_rank FROM restaurant WHERE restaurant.country = (select category from filter order by filter.filter_id desc limit 1) AND avg_price >= (select lowerPrice from filter order by filter.filter_id desc limit 1) AND avg_price <= (select upperPrice from filter order by filter.filter_id desc limit 1);";
$result = $mysqli->query($sql);
$reviewdata = [];

if (!empty($result->num_rows) && $result->num_rows > 0) {
    $reviewdata = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jelp</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="sb-admin.css" rel="stylesheet">

    <!-- styles for the table -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper" style="padding-bottom:0px; background-color: #f8f9fc">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Jelp</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Components</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Components:</h6>
                        <a class="collapse-item" href="buttons.html">Buttons</a>
                        <a class="collapse-item" href="cards.html">Cards</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Utilities</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="utilities-color.html">Colors</a>
                        <a class="collapse-item" href="utilities-border.html">Borders</a>
                        <a class="collapse-item" href="utilities-animation.html">Animations</a>
                        <a class="collapse-item" href="utilities-other.html">Other</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Addons
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="login.html">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column" style="padding-top:20px;">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800" style="margin-right:5px">Recommendation
                        <img src="./logo.png" width="40px", height="40px"></h1>                          
                    </div>

                    <?php
                     require_once('config.php');

                    $sql = "SELECT country, AVG(avg_rating) as avgrating FROM restaurant GROUP BY country order by avgrating;";
                    $result = $mysqli->query($sql);
                    $reviewdata = [];

                    if (!empty($result->num_rows) && $result->num_rows > 0) {
                        $reviewdata = $result->fetch_all(MYSQLI_ASSOC);
                    }
                    ?>

                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                            Best rated category</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $reviewdata[0]['country'];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-star fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        require_once('config.php');

                        $sql = "SELECT country, AVG(avg_price) as avgprice FROM restaurant GROUP BY country order by avgprice;";
                        $result = $mysqli->query($sql);
                        $data = [];

                        if (!empty($result->num_rows) && $result->num_rows > 0) {
                            $data = $result->fetch_all(MYSQLI_ASSOC);
                        }
                        ?>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                                Category with the lowest price</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $data[0]['country']; ?> 
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                        require_once('config.php');

                        $sql = "SELECT country, avg_price, avg(avg_rating), count(*), avg_rating+count(*) as standard FROM restaurant GROUP BY country, avg_price ORDER BY standard desc;";
                        $result = $mysqli->query($sql);
                        $reviewdata = [];

                        if (!empty($result->num_rows) && $result->num_rows > 0) {
                            $reviewdata = $result->fetch_all(MYSQLI_ASSOC);
                        }
                        ?>
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                            Recommended category for you</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $reviewdata[0]['country'];?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="far fa-smile-wink fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-3">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" >
                                    <h6 class="m-0 font-weight-bold text-primary">Filters</h6>
                                </div>
                                <div class="card-body">                                
                                    <form action="recommend.php" method="POST">
                                        <div class="form-group has-success">
                                            <label for="name" style="color:black; font-weight:bold">Category</label>
                                            <div class="container" style="margin-bottom: 20px;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="category" id="kor" value="Korean">
                                                    <label class="form-check-label" for="kor">
                                                        Korean
                                                    </label><br>
                                                    <input class="form-check-input" type="radio" name="category" id="chi" value="Chinese">
                                                    <label class="form-check-label" for="chi">
                                                        Chinese
                                                    </label><br>
                                                    <input class="form-check-input" type="radio" name="category" id="jap" value="Japanese">
                                                    <label class="form-check-label" for="jap">
                                                        Japanese
                                                    </label><br>
                                                    <input class="form-check-input" type="radio" name="category" id="wes" value="Western">
                                                    <label class="form-check-label" for="wes">
                                                        Western
                                                    </label><br>
                                                    <input class="form-check-input" type="radio" name="category" id="des" value="Dessert">
                                                    <label class="form-check-label" for="des">
                                                        Dessert
                                                    </label><br>
                                                </div>
                                            </div>

                                            <label for="price" style="color:black; font-weight:bold">Price</label>
                                            <div class="container" style="margin-bottom: 20px;">                                            
                                                <div class="form-row text-center">
                                                    <div class="form-group col-xs-4">                                                       
                                                        <input class="form-control" name="lower" id="ex1" type="number" min="0" max="150" placeholder="0" style="width: 80px;">
                                                    </div>       
                                                    <div class="form-group col-xs-4">                                                       
                                                        ~
                                                    </div>                                       
                                                    <div class="form-group col-xs-4">                                                        
                                                        <input class="form-control" name= "upper" id="ex2" type="number" min="0" max="150" placeholder="150" style="width: 80px;">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <button type="submit" class="btn btn-info">Submit</button>
                                            </div>
                                        </div>                                     
                                    </form>                                
                                </div>
                            </div>
                        </div> 

                        <div class="col-9">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Restaurants ranked by rating</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Restaurant ID No.</th>
                                                    <th>Name</th>
                                                    <th>Location</th>
                                                    <th>Category</th>
                                                    <th>Avg Price</th>
                                                    <th>Avg Rating</th>
                                                    <th>Menu</th>
                                                    <th>Rating rank</th>
                                                </tr>
                                            </thead>                                           
                                            <tbody>
                                                <?php
                                                require_once('config.php');

                                                $sql = "SELECT *, rank() over (order by avg_rating desc) as rating_rank FROM restaurant WHERE restaurant.country = (select category from filter order by filter.filter_id desc limit 1) AND avg_price >= (select lowerPrice from filter order by filter.filter_id desc limit 1) AND avg_price <= (select upperPrice from filter order by filter.filter_id desc limit 1);";
                                                $result = $mysqli->query($sql);
                                                $reviewdata = [];

                                                if (!empty($result->num_rows) && $result->num_rows > 0) {
                                                    $reviewdata = $result->fetch_all(MYSQLI_ASSOC);
                                                }
                                                mysqli_close($mysqli);
                                                ?>
                                                <?php if(!empty($reviewdata)) { ?>
                                                    <?php foreach($reviewdata as $review) { ?>
                                                        <tr>
                                                            <td><?php echo $review['rest_id']; ?></td>
                                                            <td><?php echo $review['name']; ?></td>
                                                            <td><?php echo $review['location']; ?></td>
                                                            <td><?php echo $review['country']; ?></td>
                                                            <td><?php echo $review['avg_price']; ?></td>
                                                            <td><?php echo $review['avg_rating']; ?></td>
                                                            <td><?php echo $review['menu']; ?></td>
                                                            <td><?php echo $review['rating_rank']; ?></td>
                                                        </tr>   
                                                    <?php } ?> 
                                                <?php } ?>                                  
                                            </tbody>
                                        </table>
                                    </div>
                                    <script>
                                        $( document ).ready(function() {
                                            $("#dataTable").DataTable({
                                            // 표시 건수 변경
                                            lengthChange : true,
                                            // 검색 기능
                                            searching : false,
                                            // 정렬 기능
                                            ordering : false,
                                            // 정보 표시
                                            info : true,
                                            // 페이징 기능
                                            paging : true,
                                            scrollX: false,
                                            });
                                        });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Jelp 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>