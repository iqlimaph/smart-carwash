<?php

$conn = mysqli_connect("localhost","root","","carwash");
if(isset($_POST["bookBtn"])){
    $schedule = $_POST["schedule"];
    $location = $_POST["location"];
    $carType = $_POST["carType"];
    $serviceType = $_POST["serviceType"];
    $kecil = 10000;
    $sedang = 20000;
    $besar = 30000;
    $cucimobil = 10000;
    $sedotdebu = 20000;
    $paket = 30000;

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
   <title>Booking</title>
   <link rel="stylesheet" href="stylebook.css">

</head>

<body>


<section class="book">
    <form action="" method="post">
        <h3>BOOKING</h3>
        <?php
        if(isset($error)){
            foreach($error as $error){
                echo '<span class="error-msg">'.$error.'</span>';
            };
        };
        ?>
    <div class="container flex">
        <div class="input grid">
            <div class="box">
                <label>Schedule:</label>
                <input type="date" name="schedule" required placeholder="Schedule">
            </div>
            <div class="box">
                <label>Location:</label>
                <input type="text" name="location" required placeholder="Location">
            </div>
            <div class="box">
                <label>Car Type:</label> 
                <select name="carType">
                    <option value="kecil">Kecil</option>
                    <option value="sedang">Sedang</option>
                    <option value="besar">Besar</option>
                </select>
            </div>
            <div class="box">
                <label>Services Type:</label> 
                <select name="serviceType">
                    <option value="cucimobil">Cuci Mobil</option>
                    <option value="sedotdebu">Sedot Debu</option>
                    <option value="paket">Paket</option>
                </select>
            </div>
            
            <tr>
                <td clospan="3" align="center"><button type="submit" name="bookBtn">
                    Book Now</button>

                </td>
            </tr>
        </div>
        
    </div>
</section>

</body>

</html>

<?php 
