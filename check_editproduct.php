<?php
  $pro_name1 =$_POST['p_name'];
  $disciption1 =$_POST['p_detail'];
  $price1 =$_POST['p_price'];
  $cid =$_POST['c_id'];
  include "connect.php";
    if( !empty($_FILES["p_img"]["name"]) ){
      $mig = PATHINFO(basename($_FILES['p_img']['name']), PATHINFO_EXTENSION);
      $new_image = 'img_'.uniqid().".".$mig;
      $path = "img/";
      $upimage = $path.$new_image;
      $suc = move_uploaded_file($_FILES['p_img']['tmp_name'],$upimage);
      $pro_image = $new_image;
    }
    elseif( !empty($_POST["p_checkimg"]) ){
      $pro_image = $_POST["p_checkimg"];
    }
    else{
      $pro_image = "";
    }
		$sql = "UPDATE product SET p_name = '$pro_name1' , p_detail = '$disciption1'  ,p_price = '$price1' , p_pic = '$pro_image' , c_id = '$cid' WHERE p_id = ".$_POST['ai'];
    $result = mysqli_query($conn,$sql);
      if ($result){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ !!')</script>";
	      echo "<meta http-equiv='refresh' content='0;url=index.php' />";
      } else {
        echo "error". mysqli_error($conn);
      }
     mysqli_close($conn);
    ?>
