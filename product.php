<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>รายการสินค้า</title>
</head>

<style>
body {
    -webkit-animation: colorchange 40s infinite;
    animation: colorchange 40s infinite;
}


@-webkit-keyframes colorchange {

     0%  {background: #ffd9cc;}
    25%  {background: #ffffff;}
    50%  {background: #ffd9cc;}
    75%  {background: #ffffff;}
    100% {background: #ffd9cc;}
}


@keyframes colorchange {
     0%  {background: #ffd9cc;}
    25%  {background:#ffffff;}
    50%  {background: #ffd9cc;}
    75%  {background: #ffffff;}
    100% {background: #ffd9cc;}
}
</style>

<?php
session_start();
$userid = $_SESSION["UserID"];
if($_SESSION["UserID"]==""){
	echo "Please Login!";
	exit();
}
	if($_SESSION["Status"] !="USER")
	{
		echo "This page for User only!";
		exit();
	}
	 include("connect.inc");
	$strSQL ="SELECT * FROM member WHERE UserID='".$_SESSION["UserID"]."'";
	$objQuery =mysqli_query($conn, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>

<body>
		<img src="img\bettermoon.jpg" width="13%"  align ="right" />

			<div class="b1">
			<b>ยินดีต้อนรับคุณ : </b><?php echo $objResult["Name"];?>
			<a href="edit_profile.php">แก้ไขข้อมูลส่วนตัว</a>&nbsp;
			<a href="logout.php">ออกจากระบบ</a>
			</div>





	<table width="100%" class="table table-bordered" bordercolor="#ff99cc">
  <tr><h1 align="center" class="f3">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    ขนมหวาน</h1>
    <td width="91" align="center" bgcolor="#CCCCCC"><strong>ภาพ</strong></td>
    <td width="200" align="center" bgcolor="#CCCCCC"><strong>ชื่อสินค้า</strong></td>
    <td width="44" align="center" bgcolor="#CCCCCC"><strong>ราคา</strong></td>
    <td width="100" align="center" bgcolor="#CCCCCC"><strong>รายละเอียดสินค้า</strong></td>
  </tr>
  <?php
  //connect db
  include("connect.inc");
  $sql = "select * from product order by p_id";
  $result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result))
  {
  	echo "<tr>";
	echo "<td align='center'><img src='img/" . $row["p_pic"] ." ' width='80'></td>";
	echo "<td align='left'>" . $row["p_name"] . "</td>";
    echo "<td align='center'>" .number_format($row["p_price"],2). "</td>";
    echo "<td align='center'><a href='product_detail.php?p_id=$row[p_id]'>คลิก</a></td>";
	echo "</tr>";
  }
  ?>
	<div align="center">
		<!-- Footer -->
		<?php include("footer.php"); ?>
	</div>
</table>
</body>
