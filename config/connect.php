<?php
    $conn= new mysqli("localhost","root","","website");
    if ($conn->connect_error) { 
        echo "Kết nối thất bại". $conn->connect_error;
    }
?>