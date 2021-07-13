<?php include "elements/header.php" ?>
<?php include "script/record_script.php" ?>


        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Transaction Records</li>
          </ol>

          <!-- Page Content -->
          <h1>Transactions</h1>
          <hr>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Salary</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Employee ID</th>
                      <th>Basic Salary</th>
                      <th>Tax</th>
                      <th>Medical Expenses</th>
                      <th>Total Deductions</th>
                      <th>Salary Paid</th>
                      <th>Date</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php  while($row1 = $result1->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $row1['fk_empid'] ?></td>
                      <td><?php echo $row1['basic'] ?></td>
                      <td><?php echo $row1['tax'] ?></td>
                      <td><?php echo $row1['medical_expense'] ?></td>
                      <td><?php echo $row1['total_deductions'] ?></td>
                      <td><?php echo $row1['paid'] ?></td>
                      <td><?php echo $row1['date'] ?></td>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>



          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Wage</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Employee ID</th>
                      <th>Hours Worked/th>
                      <th>Hour Rate</th>
                      <th>Total Salary Paid</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  while($row2 = $result2->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $row2['fk_empid'] ?></td>
                      <td><?php echo $row2['hours_worked'] ?></td>
                      <td><?php echo $row2['hour_rate'] ?></td>
                      <td><?php echo $row2['paid'] ?></td>
                      <td><?php echo $row2['date'] ?></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        </div>
        <!-- /.container-fluid -->


<?php include "elements/footer.php" ?>
