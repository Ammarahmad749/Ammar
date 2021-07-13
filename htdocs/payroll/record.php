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
                <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>E_ID</th>
                      <th>Name</th>
                      <th>Salary</th>
                      <th>Tax</th>
                      <th>Med Exp</th>
                      <th>T Deduct</th>
                      <th>Paid</th>
                      <th>Date</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <?php  while($row1 = $result1->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $row1['stid'] ?></td>
                      <td><?php echo $row1['empid'] ?></td>
                      <td><?php echo $row1['f_name'].' '.$row1['l_name'] ?></td>
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
          </div>



          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Wage</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="wage" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>E_ID</th>
                      <th>Name</th>
                      <th>Hours Worked</th>
                      <th>Hour Rate</th>
                      <th>Total Salary Paid</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  while($row2 = $result2->fetch_assoc()) { ?>
                    <tr>
                      <td><?php echo $row2['wtid'] ?></td>
                      <td><?php echo $row2['empid'] ?></td>
                      <td><?php echo $row2['f_name'].' '.$row2['l_name'] ?></td>
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
          </div>
        </div>
        <!-- /.container-fluid -->


<?php include "elements/footer.php" ?>
