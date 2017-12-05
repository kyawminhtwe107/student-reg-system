<?php  
  require('include/user.php');

  if(@$_POST['submit'])
  {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    $info = array(
      'name' => $name,
      'email' => $email,
      'phone' => $phone,
      'address' => $address,
      'password' => $password,
      'cpassword' => $cpassword,
    );

    $user = new user($con);

    $user->register($info);
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">

    <title>Student Registration System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/register.css" rel="stylesheet">

  </head>

  <body>

    <div class="container-fluid">
     <?php require_once('partials/header.php'); ?>

      <div class="row">
        <div class="container">
          <div class="col-md-offset-3 col-md-6 register-box">
            <h3 class="text-center">Register Form</h3>
            <?php include('partials/status.php'); ?>

            <div class="col-md-12">
              <form action="" method="POST" class="form form-horizontal">
              
                <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" name="name" value="<?php print @$_SESSION['name'];$_SESSION['name']=''; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" name="email" value="<?php print @$_SESSION['email'];$_SESSION['email']=''; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" name="address" value="<?php print @$_SESSION['address'];$_SESSION['address']=''; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="phone">Phone Number:</label>
                  <input type="text" name="phone" value="<?php print @$_SESSION['phone'];$_SESSION['phone']=''; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" class="form-control" minlength="5" maxlength="20">
                </div>

                <div class="form-group">
                  <label for="cpassword">Confirm Password:</label>
                  <input type="password" name="cpassword" class="form-control" minlength="5" maxlength="20">
                </div>

                <div class="form-group">
                  <!-- <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-registered"></i> Register</button> -->
                  <input type="submit" name="submit" class="btn btn-success btn-sm" value="Register">
                </div>

                <div class="form-group">
                  <p>Do you have already account? Login In <a href="index.php">here</a></p>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
