<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mc</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <style>
	.wa{
  background-color:#ff99cc;
  border-radius: 4px;
  border-style: solid;
border-color:#ff99cc;
padding-top:10%;
padding: 4px;
}
  </style>
  <body>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="style.css" rel="stylesheet" type="text/css"/>
  <?php include("connect.php"); ?>
  <table width="1000" border="0" align="center" cellpadding="0" cellspacing="1" class="table table-bordered">
  	<br><br><tr>
  		<td colspan="6" align="right" bgcolor="#F7F7F7" class="ccc"><center><b>ข้อมูลการสั่งซื้อสินค้า<b><center><br>
  		</td>
  			</tr>
  			<tr>
  				<td width="70" align="center" class="wa"><strong>รหัสสั่งซื้อ</strong></td>
  				<td width="100" align="center" class="wa"><strong>ชื่อลูกค้า</strong></td>
  				<td width="150" align="center" class="wa"><strong>ที่อยู่</strong></td>
  				<td width="100" align="center" class="wa"><strong>อีเมล์</strong></td>
  				<td width="50" align="center" class="wa"><strong>เบอร์โทร</strong></td>
  				<td width="90" align="center" class="wa"><strong>แสดงออเดอร์</strong></td>
  			</tr>
  			<?php
  				include("connect.php");
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
</body>
</html>
