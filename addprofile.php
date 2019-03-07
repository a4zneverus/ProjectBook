<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body background="" bgproperties="fixed"></body>
<link rel="stylesheet" href="style.css">
<title>หน้าสมัครสมาชิก</title>

</style>
<script language="javascript">
function check() {
	if (form1.username.value == '')
	{
		alert('กรุณากรอก ชื่อผู้ใช้ !!')
		form1.username.focus()
		return false
	}
	else if (username.value.length<8 || username.value.length>12)
	{
		alert('กรุณากรอก ชื่อผู้ใช้ ไม่เกิน 8-12 ตัวอักษร !!')
		form1.username.focus()
		return false
	}
	else if (form1.password.value == '')
	{
		alert('กรุณากรอก รหัสผ่าน !!')
		form1.password.focus()
		return false
	}
	else if (password.value.length<8 || username.value.length>12)
	{
		alert('กรุณากรอก รหัสผ่าน ไม่เกิน 8-12 ตัวอักษร !!')
		form1.password.focus()
		return false
	}
	else if (form1.name.value == '')
	{
		alert('กรุณากรอก ชื่อเล่น !!')
		form1.name.focus()
		return false;
	}
}
</script>

<script type="text/javascript">
function CheckTextuser()
{
var elem = document.getElementById('username').value;
if(!elem.match(/^([a-z0-9])+$/i))
  {
alert("(ชื่อผู้ใช้)กรุณากรอกเฉพาะตัวอักษร และ ตัวเลข เท่านั้น !!");
document.getElementById('username').value = "";
return false;
  }
}
</script>

<script type="text/javascript">
function ChekTextpass()
{
var elem = document.getElementById('password').value;
if(!elem.match(/^([a-z0-9])+$/i))
	{
alert("(รหัสผ่าน)กรุณากรอกเฉพาะตัวอักษร และ ตัวเลข เท่านั้น !!");
document.getElementById('password').value = "";
return false;
	}
}
</script>

</head>

<body>
<form id="form1" name="form1" method="post" action="check_register.php" onsubmit="return check();">
  <h1><p align="center">สมัครสมาชิก</p></h1>
  <table width="500" border="0" align="center" cellpadding="0" cellspacing="0">
		<tr>
			<td height="40">ชื่อผู้ใช้ :</td>
			<td><label for="username"></label>
			<input type="text" name="username" id="username" onblur="return CheckTextuser();">
		</td>
		</tr>
		<tr>
			<td height="40">รหัสผ่าน :</td>
			<td><label for="password"></label>
			<input type="password" name="password" id="password" onblur="return CheckTextpass();">
		</td>
		</tr>
    <tr>
      <td height="40">ชื่อเล่น :</td>
      <td <label for="name"></label>
      <input type="text" name="name" id="name" onblur="return CheckTextname();">
		</td>
    </tr>
    <tr>
      <td height="39" colspan="2" align="center">
				<input class="btn btn-primary" type="submit" value="ตกลง">
      	<input class="btn btn-primary" type="reset" value="ยกเลิก">
			</td>
    </tr>
  </table>
</form>
</body>
</html>
