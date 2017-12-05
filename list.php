<?php  
  session_start();
  include_once('include/user.php');

  $user = new user;

  $users = $user->getUserList();
  // print_r($users);


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
          <div class="col-md-12 listbox" style="margin-top: 50px;">
            <?php include_once('partials/status.php'); ?>
              <div class="row">
                <div class="col-md-9"><h4>Student List Table</h4></div>
                <div class="col-md-3">
                  <a href="register.php" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-plus"></span> Add New</a>
                  <a href="logout.php" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-sign-out"></span> Logout</a><br/>
                </div>
              </div>
              <table class=" table table-bordered" style="margin-top:15px;">
                  <thead>
                   <tr>
                       <th>Id</th>
                        <th>Name</th>
                       <th>Email</th>
                       <th>Phone</th>
                       <th>Address</th>
                       <th width="230px">Action</th>
                      </tr>
                   </thead>
                    <tbody>
                      <?php $x =1; ?>
                      <?php foreach($users as $u): ?>
                        <tr>
                          <td><?php print $x; ?></td>
                          <td><?php print $u['name']; ?></td>
                          <td><?php print $u['email']; ?></td>
                          <td><?php print $u['phone']; ?></td>
                          <td><?php print $u['address']; ?></td>
                          <td>
                            <a href="detail.php?id=<?php print $u['id']; ?>" class="btn btn-success btn-sm">
                              <i class="fa fa-eye"> view</i>
                            </a>
                            <a href="edit.php?id=<?php print $u['id']; ?>" class="btn btn-info btn-sm">
                              <i class="fa fa-edit"> Edit</i>
                            </a>
                            <a href="delete.php?id=<?php print $u['id']; ?>" class="btn btn-danger btn-sm">
                              <i class="fa fa-trash"> Delete</i>
                            </a>
                          </td>
                        </tr>
                        <?php $x++; ?>
                      <?php endforeach; ?>

                     </tbody>
              

  
                </table>
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
