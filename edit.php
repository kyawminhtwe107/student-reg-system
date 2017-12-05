<?php 
 session_start();
 include_once('include/user.php'); 

 $user = new user;
 $id = $_GET['id'];

 $u = $user->edit($id);

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

    <style type="text/css">
      .pass{
        display: none;
      }
    </style>

  </head>

  <body>

    <div class="container-fluid">
      <?php require_once('partials/header.php'); ?>

      <div class="row">
        <div class="container">
          <div class="col-md-offset-3 col-md-6 register-box">
            <h3 class="text-center">Information Edit</h3>
            <?php include_once('partials/status.php'); ?>
            <div class="col-md-12">
              <form action="update.php" method="POST" class="form form-horizontal">
                <input type="hidden" name="id" value="<?php print $id; ?>">
                 <div class="form-group">
                  <label for="name">Name:</label>
                  <input type="text" name="name" value="<?php print $u['name']; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="text" name="email" value="<?php print $u['email']; ?>" readonly class="form-control">
                </div>

                <div class="form-group">
                  <label for="address">Address:</label>
                  <input type="text" name="address" value="<?php print $u['address']; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label for="phone">Phone Number:</label>
                  <input type="text" name="phone" value="<?php print $u['phone']; ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Do you want to Change Password ?</label><br/>
                  <input type="radio" name="change" id="yes" value="yes"> Yes &nbsp;&nbsp;&nbsp;
                  <input type="radio" name="change" value="no" id="no" checked> No
                </div>

                <div class="form-group pass">
                  <label for="password">Password:</label>
                  <input type="password" name="password" class="form-control" minlength="5" maxlength="20">
                </div>

                <div class="form-group pass">
                  <label for="cpassword">Confirm Password:</label>
                  <input type="password" name="cpassword" class="form-control" minlength="5" maxlength="20">
                </div>

                <div class="form-group">
                  <!-- <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-registered"></i> Register</button> -->
                  <input type="submit" name="submit" class="btn btn-success btn-sm" value="Update">
                  <a href="list.php" class="btn btn-danger btn-sm">
                    <i class="fa fa-reply"></i> Back
                  </a>
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

    <script type="text/javascript">
      $(document).ready(function(){

        $('#yes').click(function(){
          $('.pass').css('display','block');
          // alert('yes');
        });

        $('#no').click(function(){
          $('.pass').css('display','none');
          // alert('yes');
        });

      });
    </script>
  </body>
</html>
