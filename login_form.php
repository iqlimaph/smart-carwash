<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $id_customer = mysqli_real_escape_string($conn, $_POST['idcustomer']);
   $pass = md5($_POST['password']);

   $select = "SELECT * FROM customer WHERE (id_customer = '$id_customer' && password = '$pass')";

   $result = mysqli_query($conn,$select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'incorrect id or password!';

   }else{
      
      header('location:booking.php');
   }
   


};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="Id Customer" name="idcustomer" required placeholder="enter your ID">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="Login" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register</a></p>
   </form>

</div>

</body>
</html>