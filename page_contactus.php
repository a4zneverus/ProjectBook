<link rel="stylesheet" href="style.css">
<?php
if($_SESSION["UserID"]==""){
	echo "Please Login!";
	exit();
}
	if($_SESSION["Status"] !="ADMIN")
	{
		echo "This page for Admin only!";
		exit();
	}
?>
<table width="569" height="255"  border="0" class="square">
  <tr>
    <td bgcolor="#ff99cc">
			<div align="center"><h1 class="f1">Contact Us</h1></div>
			<h5 class="f1" align="center">คุณไข่มุก เบอร์โทรศัพท์ : 0123456789</h5>
			<h5 class="f1" align="center">คุณทิป เบอร์โทรศัพท์ : 0987654321</h5>
			<h5 class="f1" align="center">คุณโต้ง เบอร์โทรศัพท์ : 0159753456</h5>
		</td>
  </tr>
</table>
