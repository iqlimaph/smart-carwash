<?php

try{
    $conn = mysqli_connect('localhost','root','','carwash');
}catch (mysqli_sql_exception $e) { 
    var_dump($e);
    exit;
}
?>