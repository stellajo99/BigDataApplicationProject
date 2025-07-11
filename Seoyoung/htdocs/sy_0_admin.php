<?php
require_once('config.php');

$sql = "SELECT review.review_id, restaurant.rest_id, restaurant.name, review.content, review.rating, AVG(review.rating) OVER (PARTITION BY review.user_id) as rating_avg FROM review INNER JOIN restaurant ON review.rest_id = restaurant.rest_id WHERE review.user_id=144";
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
                        <h1 class="h3 mb-0 text-gray-800" style="margin-right:5px">My Settings
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i></h1>     
                        <h1 class="h3 mb-0 text-gray-800" style="margin-right:5px">
                        <img src="./logo.png" width="40px", height="40px"></i>ID</h1>                      
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                                My Reviews</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $result->num_rows;?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-utensils fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                                Average Rating</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php 
                                                if (empty($result->num_rows)) {
                                                    echo "0";

                                                } else {
                                                    echo $reviewdata[0]['rating_avg']; 
                                                }
                                                ?> 
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-star fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <form action="changeusername.php" method="POST">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Change Username
                                                </div>
                                                <div class="row no-gutters align-items-center">
                                                    <div class="form-group">
                                                        <input type="id" class="form-control" name="changeusername" id="changeid" placeholder="Enter Username">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <input class="btn-sm btn-primary" onclick="alert('Username changed')" type="submit" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <form action="changepw.php" method="POST">
                                        <div class="row no-gutters align-items-center">                                        
                                            <div class="col mr-2">                                            
                                                    <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">
                                                        Change Password
                                                    </div>                                                
                                                <div class="row no-gutters align-items-center">                                               
                                                    <div class="form-group">
                                                        <input type="pw" class="form-control" name="changepw" id="changepw" placeholder="Enter Password">
                                                    </div>   
                                                </div>                                            
                                            </div>   
                                            <div class="col-auto">
                                                <input class="btn-sm btn-primary" onclick="alert('Password changed')" type="submit" value="Submit">
                                            </div>                                                                   
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 

                    
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-8">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">My Reviews</h6>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>Review ID No.</th>
                                                    <th>Restaurant ID No.</th>
                                                    <th>Name</th>
                                                    <th>Review</th>
                                                    <th>Rating</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>                                           
                                            <tbody>
                                                <?php if(!empty($reviewdata)) { ?>
                                                    <?php foreach($reviewdata as $review) { ?>
                                                        <?php $fileterd = array(
                                                            'id' => htmlspecialchars($review['review_id']) 
                                                        ); ?>
                                                        <tr>
                                                            <td><?php echo $fileterd['id']; ?></td>
                                                            <td><?php echo $review['rest_id']; ?></td>
                                                            <td><?php echo $review['name']; ?></td>
                                                            <td><?php echo $review['content']; ?></td>
                                                            <td><?php echo $review['rating']; ?></td>
                                                            <form method='post' action="deleteReview.php" onsubmit="if(!confirm('sure?')){return false;}">
                                                                <td>
                                                                    <input type="hidden" name="id" value="<?=$fileterd['id']?>">
                                                                    <input class="btn btn-danger btn-sm" type="submit" value="Delete">
                                                                </td>
                                                            </form>
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

                        <div class="col-4">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3" >
                                    <h6 class="m-0 font-weight-bold text-primary">Add Review</h6>
                                </div>
                                <div class="card-body" style="margin-bottom: 15px;">                                
                                    <form action="addreview.php" method="POST">
                                        <div class="form-group has-success">
                                            <label for="Name">Name</label>
                                            <input type="text" class="form-control" name="name" id="Name" placeholder="Name of the restaurant" style="margin-bottom: 15px;">

                                            <label for="location">Location</label>
                                            <input type="text" class="form-control" name="location" id="location" placeholder="Location" style="margin-bottom: 15px;">

                                            <label for="Inputselect">Food category</label>
                                            <select class="form-control" name="country" style="margin-bottom: 15px;">
                                            <option>Korean</option>
                                            <option>Chinese</option>
                                            <option>Japanese</option>
                                            <option>Western</option>
                                            <option>Dessert</option>
                                            </select>

                                            <label for="price">Price for 2</label>
                                            <input type="text" class="form-control" name="price" id="price" placeholder="Enter only numbers" style="margin-bottom: 15px;">

                                            <label for="Inputselect">Rating</label>
                                            <select class="form-control" name="rating" style="margin-bottom: 15px;">
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            </select>

                                            <label for="reviewtext">Review</label>
                                            <input type="text" class="form-control" name="content" id="reviewtext" placeholder="Type in one line" style="margin-bottom: 15px;">                                            

                                            <button type="submit" class="btn btn-info">Submit Review</button>
                                        </div>                                     
                                    </form>                                
                                </div>
                            </div>
                        </div>                     

                </div>
                <!-- /.container-fluid -->

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