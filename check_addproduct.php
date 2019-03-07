<?php
$pro_image1 =$_POST['p_img'];
$pro_name1 =$_POST['p_name'];
$disciption1 =$_POST['p_detail'];
$price1 =$_POST['p_price'];
$cid =$_POST['c_id'];
include "connect.php";
$mig = PATHINFO(basename($_FILES['p_img']['name']), PATHINFO_EXTENSION);
$new_image = 'img_'.uniqid().".".$mig;
$path = "img/";
$upimage = $path.$new_image;
$suc = move_uploaded_file($_FILES['p_img']['tmp_name'],$upimage);
$pro_image = $new_image;
    $insql = "INSERT INTO product (p_id,p_name,p_detail,p_price,p_pic,c_id) VALUES('','$pro_name1','$disciption1','$price1','$pro_image','$cid')";
    $result = mysqli_query($conn,$insql);
      if ($result){
        echo "upload เสร็จสิ้น";
        header("Location: index.php");
      } else {
        echo "error". mysqli_error($conn);
      }
     mysqli_close($conn);
    ?>
