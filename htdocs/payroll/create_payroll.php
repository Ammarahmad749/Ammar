<?php include "elements/header.php" ?>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Create Payroll</li>
          </ol>

          <!-- Page Content -->
          <h1>Generate Payroll</h1>

          <hr>
          <form action="create_payroll_next.php" method="get" >
            <div class="form-group col-md-5">
              <label>Employee ID</label>
              <input type="text" class="form-control" name="emp_id">
            </div>
            
            <div class="col-md-5">
              <button type="submit" class="btn btn-primary">Next</button>
            </div>
          </form>

        </div>
        <!-- /.container-fluid -->


<?php include "elements/footer.php" ?>
