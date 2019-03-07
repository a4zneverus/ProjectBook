<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Store System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <style>
	.abc{
  background-color:#FFFFFF;
  border-radius: 4px;
  border-style: solid;
  border-color:#DCDCDC;
}
	.ccc{
	 background-color:#F5F5DC;
  border-radius: 4px;
}
  </style>
  <body>

<?php include("connect.inc"); ?>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" class="table table-bordered">
	<br><br><tr>
		<td colspan="6" align="right" bgcolor="#F7F7F7" class="ccc"><center><b>ข้อมูลการสั่งซื้อสินค้า<b><center><br>
		</td>
			</tr>
			<tr>
				<td width="50" align="center" class="abc"><strong>รหัสสั่งซื้อ</strong></td>
				<td width="100" align="center" class="abc"><strong>ชื่อลูกค้า</strong></td>
				<td width="150" align="center" class="abc"><strong>ที่อยู่</strong></td>
				<td width="100" align="center" class="abc"><strong>อีเมล์</strong></td>
				<td width="50" align="center" class="abc"><strong>เบอร์โทร</strong></td>
				<td width="50" align="center" class="abc"><strong>แสดง</strong></td>
			</tr>
			<?php
				include("connect.inc");
				$strSQL = "SELECT * FROM order_head order by o_id desc";
				$objQuery =mysqli_query($conn, $strSQL);
				$num = mysqli_num_rows($objQuery);
				for($i=1;$i<=$num;$i++){
						$objResult = mysqli_fetch_array($objQuery);
				?>
				<tr>
					<td align="left"><?php echo  $objResult['o_id']?></td>
					<td align="center"><?php echo  $objResult['o_name']?></td>
					<td align="center"><?php echo  $objResult['o_addr']?></td>
					<td align="center"><?php echo  $objResult['o_email']?></td>
					<td align="center"><?php echo  $objResult['o_phone']?></td>
					<td align="center"><a href="orderdetail.php?o_id=<?php echo  $objResult['o_id']?>">แสดง</a></td>
					</tr>
					<?php
						}
					?>
			</table>
      <center>
			<?php
				echo "<br><a href='index.php'>กลับสู่หน้าหลัก</a>";
				?>
      </center>
</body>
