<?php 
    include("connect.php");
    if(isset($_POST["gui"])){
        $name=$_POST['name'];
        $img=$_FILES['img']['name'];
        // lấy đường dẫn của ảnh
        $img_tmp=$_FILES['img']['tmp_name'];
        $gia=$_POST['price'];
        $baoHanh=$_POST['baoHanh'];
        $sql="INSERT INTO thongtin(name,hinhanh,gia,baoHanh) 
        VALUES('$name','$img','$gia','$baoHanh')";
        mysqli_query($conn, $sql);
        move_uploaded_file($img_tmp,"img/product".$img);

    }

?>
 <form action="add.php" method="post" enctype="multipart/form-data">
    name : <input type="text" name="name"><br>
    img : 
    <input type="file" name="img"><br>
    Giá : <input type="number" name="price"><br>
    Bảo hành : <input type="text" name="baoHanh"><br>
    <button type="submit" name="gui">Tải lên</button>
 </form>