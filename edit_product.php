<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>devbanban.com</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script language="javascript">
function check() {
   if (addprd.p_name.value == '') {
    alert('กรุณากรอก ชื่อสินค้า')
    addprd.p_name.focus()
    return false
  }
  else if (addprd.p_detail.value == '') {
    alert('กรุณากรอก รายละเอียดสินค้า')
    addprd.p_detail.focus()
    return false
  }
  else if (addprd.p_price.value == '') {
    alert('กรุณากรอก ราคาสินค้า')
    addprd.p_price.focus()
    return false
  }
  else if (addprd.p_img.value == '') {
    alert('กรุณาใส่รูปสินค้า')
    addprd.p_img.focus()
    return false
  }
  }

</script>
</head>

<body>
  <?php
  $_SESSION['id']=$_REQUEST['p_id'];
  $Mid = $_REQUEST['p_id'];
  include("connect.inc");// เรียกใช้งาน ConnectDB.php
  $sql = "SELECT * FROM product WHERE p_id='$Mid'";
  $result = mysqli_query($conn,$sql);
  $obresult = mysqli_fetch_array($result);

  $path = 'img/'; //---->เช่น 'images/';
 ?>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <br />
      <h4 align="center"> ฟอร์มเพิ่มสินค้า </h4>
      <hr />
      <center> <img src="<?php echo "img/".$obresult['p_pic']?>" width="450px" height="250px"> </center>
      <form action="check_editproduct.php" method="POST" enctype="multipart/form-data"  name="addprd" class="form-horizontal" id="addprd" onsubmit="return check();">
        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="ai" class="form-control" value="<?php echo $obresult['p_id']?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่อสินค้า</p>
            <input type="text"  name="p_name" class="form-control" value="<?php echo $obresult['p_name']?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> ประเภทของสินค้า </p>
            <input type="text" name="c_id" class="form-control" value="<?php echo $obresult['c_id']?>" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> รายละเอียดสินค้า </p>
            <textarea name="p_detail" class="form-control"  rows="3"><?php echo $obresult['p_detail']?></textarea>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> ราคา (บาท) </p>
            <input type="text"  name="p_price" class="form-control" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" value="<?php echo $obresult['p_price']?>" />
          </div>
          <div class="col-sm-8 info">
            <p> ภาพสินค้า </p>
            <input type="file" name="p_img" class="form-control" />
            <?php echo $obresult['p_pic']?>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" name="btnadd"> + แก้ไขสินค้า </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
