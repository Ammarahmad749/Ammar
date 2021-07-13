<?php include "elements/header.php" ?>

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="dashboard.php">Home</a>
            </li>
            <li class="breadcrumb-item active">Add Employee</li>
          </ol>

          <!-- Page Content -->
          <h1>Add Employee</h1>
          <hr>
          <form action="salary_type.php" method="post">
            <div class="form-group col-md-5">
              <label>First Name</label>
              <input type="text" class="form-control" name="fname" required pattern="[A-Z][a-z]+">
            </div>
            <div class="form-group col-md-5">
              <label>Last Name</label>
              <input type="text" class="form-control" name="lname" required pattern="[A-Z][a-z]+">
            </div>
            <div class="form-group col-md-5">
              <label>Address</label>
              <input type="text" class="form-control" name="address" required>
            </div>
            <div class="form-group col-md-5">
              <label>Phone</label>
              <input type="text" class="form-control" name="phone" required pattern="^\d{11}$">
            </div>
            <div class="form-group col-md-5">
              <label>Email</label>
              <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group col-md-5">
              <label>CNIC</label>
              <input type="text" class="form-control" name="cnic" required  pattern="^[0-9+]{5}-[0-9+]{7}-[0-9]{1}$">
            </div>
            <div class="form-group col-md-5">
              <label>Date Of Birth <i>(dd/mm/yyyy)</i></label>
              <input type="text" class="form-control" name="dob" required pattern="^([0]?[1-9]|[1|2][0-9]|[3][0|1])[/]([0]?[1-9]|[1][0-2])[/]([0-9]{4}|[0-9]{2})$">
            </div>
            <div class="form-group col-md-5">
              <label>Joining Date <i>(dd/mm/yyyy)</i></label>
              <input type="text" class="form-control" name="jdate" required pattern="^([0]?[1-9]|[1|2][0-9]|[3][0|1])[/]([0]?[1-9]|[1][0-2])[/]([0-9]{4}|[0-9]{2})$">
            </div>
            <div class="form-group col-md-5">
              <label>Salary Type</label>
              <select class="form-control" name="stype">
                <option value=""> Choose </option>
                <option value="1"> Salary </option>
                <option value="2"> Wage </option>
              </select> 
            </div>

          <div class="col-md-5">
              <button type="submit" class="btn btn-primary">Next</button>
            </div>
        </form>
        </div>
        <!-- /.container-fluid -->


<?php include "elements/footer.php" ?>
