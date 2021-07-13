<?php include "script/connection.php" ?>
<?php include "script/invoice_script.php" ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Payroll</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <style > 
    .card-width {
    max-width: 45rem;
    }
    </style>
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-width mx-auto mt-5">
       <div class= "card card-header ">
          <h1>INVOICE</h1>
       </div>
        <div class="card-body">
          <h4>Fist Name : <?php echo $row['f_name'];?> </h4>
          <h4>Last Name : <?php echo $row['l_name'];?> </h4>
          <h4>Email : <?php echo $row['email'];?> </h4>
          <h4>Phone # : <?php echo $row['phone'];?> </h4>
          <?php if ($stype == 1) { ?>
          <h4>Basic : <?php echo $basic;?> </h4>
          <h4>Expense : <?php echo $medical_expense;?></h4>
          <h4>Tax : <?php echo $tax;?></h4>
          <h4>Total Deductions : <?php echo $total_deductions;?></h4>
          <h4>Salary Paid : <?php echo $paid;?></h4>
          <?php }  elseif ($stype == 2) {?>
            

          <h4>Hour Rate : <?php echo $hour_rate;?> </h4>
          <h4>Hours Worked : <?php echo $hours;?> </h4>
          <h4>Salary Paid : <?php echo $paid1;?></h4>
          <?php } ?>
          
        
           <a href="dashboard.php" class="btn btn-primary">Done</a>
          
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></scrip>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
