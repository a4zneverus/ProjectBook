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
		$sql = "UPDATE product SET p_name = '$pro_name1' , p_detail = '$pro_name1'  ,p_price = '$price1' , p_pic = '$pro_image' , c_id = '$cid' WHERE p_id = ".$_POST['ai'];
    $result = mysqli_query($conn,$sql);
      if ($result){
        echo "upload เสร็จสิ้น";
        header("Location: index.php");
      } else {
        echo "error". mysqli_error($conn);
      }
     mysqli_close($conn);
    ?>
