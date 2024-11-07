<?php
    include("connect.php");
    $id=$_GET['this_id'];
    $sql ="DELETE FROM thongtin WHERE id = '$id'";
    $result= mysqli_query($conn, $sql);
    if($result){
        echo "đã xóa thành công";

    }
?>