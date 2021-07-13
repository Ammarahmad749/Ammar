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
          <?php if($_POST['stype'] == 1) : ?>
          <h1>Salary Details</h1>
          <?php else : ?>
          <h1>Wage Details</h1>
          <?php endif ?>
          <hr>
          <form action="script/employee_add_script.php" method="post">
            <input type="hidden" name="fname" value="<?php echo $_POST['fname']?>">
            <input type="hidden" name="lname" value="<?php echo $_POST['lname']?>">
            <input type="hidden" name="address" value="<?php echo $_POST['address']?>">
            <input type="hidden" name="phone" value="<?php echo $_POST['phone']?>">
            <input type="hidden" name="email" value="<?php echo $_POST['email']?>">
            <input type="hidden" name="cnic" value="<?php echo $_POST['cnic']?>">
            <input type="hidden" name="dob" value="<?php echo $_POST['dob']?>">
            <input type="hidden" name="jdate" value="<?php echo $_POST['jdate']?>">
            <input type="hidden" name="stype" value="<?php echo $_POST['stype']?>">

            <?php if($_POST['stype'] == 1) : ?>
            <div class="form-group col-md-5">
              <label>Basic salary</label>
              <input type="text" class="form-control" name="bsalary">
            </div>
            <div class="form-group col-md-5">
              <label>Tax</label>
              <input type="text" class="form-control" name="tax">
            </div>
            <div class="form-group col-md-5">
              <label>Medical Expense</label>
              <input type="text" class="form-control" name="medexpense">
            </div>
            <?php else : ?>
            <div class="form-group col-md-5">
              <label>Hour Rate</label>
              <input type="text" class="form-control" name="hrate">
            </div>
            <?php endif ?>
            <div class="col-md-5">
              <button type="submit" class="btn btn-primary">Add</button>
            </div>
          </form>

        </div>
        <!-- /.container-fluid -->


<?php include "elements/footer.php" ?>
