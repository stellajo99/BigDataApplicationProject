<!DOCTYPE html>
<html>

<head>
  <title>Display all records from Database</title>
  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body>

  <h2>Employee Details</h2>
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">

        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="2">
          <tr>
            <td>Sr.No.</td>
            <td>Full Name</td>
            <td>Age</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>

          <?php

          include "dbConn.php"; // Using database connection file here

          $records = mysqli_query($db, "select * from guestbook"); // fetch data from database

          while ($data = mysqli_fetch_array($records)) {
          ?>
            <tr>
              <td><?php echo $data['id']; ?></td>
              <td><?php echo $data['fullname']; ?></td>
              <td><?php echo $data['age']; ?></td>
              <td><a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a></td>
              <td><a href="delete.php?id=<?php echo $data['id']; ?>">Delete</a></td>
            </tr>
          <?php
          }
          ?>
        </table>

</body>

</html>