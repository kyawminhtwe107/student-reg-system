<!DOCTYPE html>
<html>
<head>
	<title>View student record</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/favicon.png">

    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
        <link href="css/index.css" rel="stylesheet">


</head>
<body>

<div class="container-fluid">
      <?php require_once('partials/header.php'); ?>

      <div class="row">
        <div class="container">
          <div class="col-md-offset-4 col-md-4 view-box">
            <h3 class="text-center">View student record</h3>
             <img src="image/1.png" style="width:40px height:40px;">

            <table class=" table table-stripped" style="margin-top:15px;">
                  <tbody>
                   <tr>
                       <th>Id</th><td>1cst1</td>
                    </tr>
                    <tr>
                       <th>Name</th><td>Doe</td>
                    </tr>
                    <tr>
                       <th>Email</th><td>Doe@gmail.com</td>
                    </tr>

                    <tr>
                       <th>Password</th><td>1234556</td>
                    </tr>

                    <tr>
                       <th>Confirm password</th><td>12345</td>
                    </tr>



                      
                   </tbody>

  
                </table>




             
          </div>

          </div>
        </div>
      </div>

    </div>


</body>
</html>