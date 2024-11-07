<?php 
    include("connect.php");
    $id=$_GET['this_id'];
    $sql= "SELECT * FROM thongtin WHERE id= ".$id;
    $query=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($query);
    if(isset($_POST["btn"])){
        $name=$_POST['name'];
        $img=$_FILES['img']['name'];
        $img_tmp=$_FILES['img']['tmp_name'];
        $gia=$_POST['price'];
        $baoHanh=$_POST['baoHanh'];
        $sql_1="UPDATE FROM thongtin name='$name',hinhanh='$img', gia='$gia',baoHanh='$baoHanh' WHERE id =  ".$this_id;
        mysqli_query($conn, $sql_1);
        move_uploaded_file($img_tmp,"D:\XAMPP\htdocs\DuAn_CaNhan\img\product".$img);
    }
?>
 <form action="sua.php" method="post" enctype="multipart/form-data">
    name : <input type="text" name="name" value="<?php echo $row['name'] ?>"><br>
    img : <img src="img/product/<?php echo $row['hinhanh'] ?>">
    <input type="file" name="img">
    <br>
    Giá : <input type="number" name="price" value="<?php echo $row['gia'] ?>" ><br>
    Bảo hành : <input type="text" name="baoHanh" value="<?php echo $row['baoHanh'] ?>" ><br>
    <button type="submit" name="btn">Sửa</button>
 </form>