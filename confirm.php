<?php
	session_start();
    include("connect.inc");
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Checkout</title>

<script>
<!-- อย่ายุ่ง กะ script นะจ๊ะเดียวกุงง ลองดับเบิลคลิกพื้นหลังดูดิ -
function makeRandom(range) {
	rand=Math.floor(range*Math.random())
    return rand
}
function makeHexa(thiscol) {
    var colhex_left = Math.floor(thiscol/16)
    var colhex_right= thiscol-(colhex_left*16)
    if (colhex_left == 10) {colhex_left="A"}
    if (colhex_left == 11) {colhex_left="B"}
    if (colhex_left == 12) {colhex_left="C"}
    if (colhex_left == 13) {colhex_left="D"}
    if (colhex_left == 14) {colhex_left="E"}
    if (colhex_left == 15) {colhex_left="F"}
    if (colhex_right == 10) {colhex_right="A"}
    if (colhex_right == 11) {colhex_right="B"}
    if (colhex_right == 12) {colhex_right="C"}
    if (colhex_right == 13) {colhex_right="D"}
    if (colhex_right == 14) {colhex_right="E"}
    if (colhex_right == 15) {colhex_right="F"}
    var colhex =""+colhex_left+colhex_right
    return colhex
}
function dblclick() {
	var redcolor=makeRandom(255)
	redcolor=makeHexa(redcolor)
	var greencolor=makeRandom(255)
	greencolor=makeHexa(greencolor)
	var bluecolor=makeRandom(255)
	bluecolor=makeHexa(bluecolor)
    document.bgColor=""+redcolor+greencolor+bluecolor
}
if (document.layers) {
document.captureEvents(Event.ONDBLCLICK);
}
document.ondblclick=dblclick;
// - อย่ายุ่ง กะ script นะจ๊ะเดียวกุงง ลองดับเบิลคลิกพื้นหลังดูดิ - -->
</SCRIPT>


</head>
<body>

<form id="frmcart" name="frmcart" method="post" action="saveorder.php">
  <table width="600" border="0" align="center" class="square">
    <tr>
      <td width="1558" colspan="4" bgcolor="#FA560B">
      <strong>สั่งซื้อสินค้า</strong></td>
    </tr>
    <tr>
      <td bgcolor="#F9D5E3">สินค้า</td>
      <td align="center" bgcolor="#F9D5E3">ราคา</td>
      <td align="center" bgcolor="#F9D5E3">จำนวน</td>
      <td align="center" bgcolor="#F9D5E3">รวม/รายการ</td>
    </tr>
<?php
	$total=0;
	foreach($_SESSION['cart'] as $p_id=>$qty)
	{
		$sql	= "select * from product where p_id=$p_id";
		$query	= mysqli_query($conn, $sql);
		$row	= mysqli_fetch_array($query);
		$sum	= $row['p_price']*$qty;
		$total	+= $sum;
    echo "<tr>";
    echo "<td>" . $row["p_name"] . "</td>";
    echo "<td align='right'>" .number_format($row['p_price'],2) ."</td>";
    echo "<td align='right'>$qty</td>";
    echo "<td align='right'>".number_format($sum,2)."</td>";
    echo "</tr>";
	}
	echo "<tr>";
    echo "<td  align='right' colspan='3' bgcolor='#F9D5E3'><b>รวม</b></td>";
    echo "<td align='right' bgcolor='#F9D5E3'>"."<b>".number_format($total,2)."</b>"."</td>";
    echo "</tr>";
?>
</table>
<p>
<table border="0" cellspacing="0" align="center">
<tr>
	<td colspan="2" bgcolor="#CCCCCC">รายละเอียดในการติดต่อ</td>
</tr>
<tr>
    <td bgcolor="#EEEEEE">ชื่อ</td>
    <td><input class="form-control"  name="name" type="text" id="name" required/></td>
</tr>
<tr>
    <td width="22%" bgcolor="#EEEEEE">ที่อยู่</td>
    <td width="78%">
    <textarea class="form-control" name="address" cols="35" rows="5" id="address" required></textarea>
    </td>
</tr>
<tr>
  	<td bgcolor="#EEEEEE">อีเมล</td>
  	<td><input  class="form-control" name="email" type="email" id="email"  required/></td>
</tr>
<tr>
  	<td bgcolor="#EEEEEE">เบอร์ติดต่อ</td>
  	<td><input class="form-control" name="phone" type="text" id="phone" required /></td>
</tr>
<tr>
	<td colspan="2" align="center" bgcolor="#CCCCCC">
	<input class="form-control" type="submit" name="Submit2" value="สั่งซื้อ" />
</td>
</tr>
</table>
</form>
</body>
</html>
