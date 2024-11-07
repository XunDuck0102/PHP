<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <tbody>
        
        <tr>
        <?php 
            include "connect.php";
            $sql="SELECT * FROM thongtin";
            $result=mysqli_query($conn,$sql);
            // if(file_exists("D:\XAMPP\htdocs\DuAn_CaNhan\img\product\IP11prm.png")){
            //     echo " ảnh tồn tại ";
            // }else{
            //     echo "ảnh không tồn tại";
            // }
            while($row=mysqli_fetch_array($result))
            {?>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><img width="30" height="40" src="D:\XAMPP\htdocs\DuAn_CaNhan\img\product\IP11prm.png" alt=""></td>
                <td><?php echo $row['gia'] ?></td>
                <td><?php echo $row['baoHanh'] ?></td>
                <span><a href="delete.php?this_id=<?php echo $row['id'] ?>">Xóa</a></span>
                <span><a href="sua.php?this_id=<?php echo $row['id'] ?>"> Sửa</a></span>
                <br>
            <?php 
            };
            ?>
        </tr>
    </tbody>
</body>
</html>