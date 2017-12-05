<?php  
  require('include/user.php');

  if(@$_POST['submit'])
  {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $change = $_POST['change'];

    $info = array(
      'id' => $id,
      'name' => $name,
      'email' => $email,
      'phone' => $phone,
      'address' => $address,
      'password' => $password,
      'cpassword' => $cpassword,
    );

    $user = new user($con);

    $user->update($info,$change,$id);
  }

?>