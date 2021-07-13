<?php include "elements/header.php" ?>
<?php include "script/create_payroll_next_script.php" ?>


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
          <form action="invoice.php" method= "post" >
           <input type="hidden" name="emp_id" value="<?php echo $_GET['emp_id']?>">
            <input type="hidden" name="stype" value="<?php echo $row['salary_type']?>">   
            <div class="form-group col-md-5">
              <label>Employee Name</label>
              <p><?php echo $row['f_name']; ?> </p>
            </div>
            <?php 
            if ($row['salary_type'] == 1) {
            ?>
            <div class="form-group col-md-5">
              <label>Basic salary</label>

              <input type="text" value="<?php echo $row1['basic_salary']; ?>" class="form-control" name="bsalary">
            </div>
            <div class="form-group col-md-5">
              <label>Tax</label>
              <input type="text" value="<?php echo $row1['tax'];?>" class="form-control" name="tax">
            </div>
            <div class="form-group col-md-5">
              <label>Medical Expense</label>
              <input type="text" value="<?php echo $row1['medical_expense']; ?>" class="form-control" name="medexpense">
            </div>
            <div class="form-group col-md-5">
              <label>Other Deductions</label>
              <input type="text" class="form-control" name="deductions">
            </div>

            <?php } 

            elseif ($row['salary_type'] == 2) 
            {
            ?>
            <div class="form-group col-md-5">
              <label>Hours Worked</label>
              <input type="text"  class="form-control" name="hworked">
            </div>
            <div class="form-group col-md-5">
              <label>Hour Rate</label>
              <input type="text"  value="<?php echo $row2['hour_rate']; ?>" class="form-control" name="hrate">
            </div>
            <?php } ?>

            <div class="col-md-5">
              <button type="submit" class="btn btn-primary">Generate Payroll</button>
            </div>
          </form>

        </div>
        <!-- /.container-fluid -->


<?php include "elements/footer.php" ?>
