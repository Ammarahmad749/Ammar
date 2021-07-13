<?php include "elements/header.php" ?>
<?php include "script/employee_detail_script.php" ?>


        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Employee Detail</li>
          </ol>

          <!-- Page Content -->
          <h1>Employee details</h1>
          <hr>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Employee</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>First Name</th>
                      <th>Last Name</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>CNIC</th>
                      <th>DOB</th>
                      <th>Start date</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  while($row = $result->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['f_name'] ?></td>
                      <td><?php echo $row['l_name'] ?></td>
                      <td><?php echo $row['address'] ?></td>
                      <td><?php echo $row['phone'] ?></td>
                      <td><?php echo $row['email'] ?></td>
                      <td><?php echo $row['cnic'] ?></td>
                      <td><?php echo $row['DOB'] ?></td>
                      <td><?php echo $row['joining_date'] ?></td>
                      <td><a href="script/delete_script.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
           
          </div>

        </div>
        <!-- /.container-fluid -->


<?php include "elements/footer.php" ?>
