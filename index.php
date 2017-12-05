<?php  
  if(!@$_SESSION)
  {
    session_start();
  }
  require('include/user.php');

  if(@$_POST['submit'])
  {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = new user;

    $user->login($email,$password);
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
    <link href="css/index.css" rel="stylesheet">

  </head>

  <body>

    <div class="container-fluid">
      <?php require_once('partials/header.php'); ?>

      <div class="row">
        <div class="container">
          <div class="col-md-offset-4 col-md-4 login-box">
            <h3 class="text-center">Login To Continue</h3>
            <?php include_once('partials/status.php'); ?>
            <div class="col-md-12">
              <form action="" method="POST" class="form form-horizontal">
              
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" name="email" value="<?php print @$_SESSION['email'];$_SESSION['email']=''; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="password">Password:</label>
                  <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                  <!-- <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-sign-in"></i> Sign In</button> -->
                  <input type="submit" name="submit" class="btn btn-success btn-sm" value="Sign In">
                </div>

                <div class="form-group">
                  <p>Do not have account? Register <a href="register.php">here</a></p>
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
