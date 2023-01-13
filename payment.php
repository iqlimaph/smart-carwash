<?php

$conn = mysqli_connect("localhost","root","","carwash");
if(isset($_POST["bookBtn"])){
    $schedule = $_POST["schedule"];
    $location = $_POST["location"];
    $carType = $_POST["carType"];
    $serviceType = $_POST["serviceType"];

    $query = "INSERT INTO booking VALUES('$schedule','$location','$carType','$serviceType')";
    mysqli_query($conn, $query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="stylepay.css">

</head>
<body>

<div class="container">

    <form action="">

        <div class="row">

            <div class="col">

                <h3 class="title">total payment</h3>

                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email"">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text"">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text">
                </div>
            </div>
    
        </div>

        <input type="submit" value="proceed to checkout" class="submit-btn">

    </form>

</div>    
    
</body>
</html>