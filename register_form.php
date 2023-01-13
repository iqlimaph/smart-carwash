<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $id_customer = mysqli_real_escape_string($conn, $_POST['idcustomer']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $no_telp = mysqli_real_escape_string($conn, $_POST['no_telp']);

   $select = " SELECT * FROM customer WHERE id_customer = '$id_customer' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO customer(id_customer, password, no_telp) VALUES('$id_customer','$pass','$no_telp')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>REGISTER</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="idcustomer" required placeholder="enter your ID">
      <input type="no_telp" name="no_telp" required placeholder="enter your phone number">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="password" name="cpassword" required placeholder="confirm your password">
      <input type="submit" name="submit" value="register now" class="form-btn">
      <p>already have an account? <a href="login_form.php">login</a></p>
   </form>

</div>

</body>
</html>