<!DOCTYPE html>
<style>

.wa{
	width:1000px;
}
.abc{
background-color:#FFFFFF;
border-radius: 4px;
border-style: solid;
border-color:#DEB887;
padding: 8px;
}
.ccc{
border-radius: 4px;
border-color:;
}
body {
	-webkit-animation: colorchange 40s infinite;
	animation: colorchange 40s infinite;
}


@-webkit-keyframes colorchange {

	 0%  {background: #ffd9cc;}
	25%  {background: #ffffff;}
	50%  {background: #ffd9cc;}
	75%  {background: #ffffff}
	100% {background: #ffd9cc;}
}


@keyframes colorchange {
	 0%  {background: #ffd9cc;}
	25%  {background: #ffffff;}
	50%  {background: #ffd9cc;}
	75%  {background: #ffffff;}
	100% {background: #ffd9cc;}
}

@font-face {
	font-family: Helvetica;
	src: url('https://www.fontsquirrel.com/fonts/kaushan-script.ttf');
}
</style>
<?php
	session_start();

	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
    header("location:product.php");
		exit();
	}
	$username = $_SESSION['UserID'];
  include("connect.php");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."' ";
	$qsql = mysqli_query($conn, $strSQL);
	$result = mysqli_fetch_array($qsql);
?>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <title>แก้ไขข้อมูลสมาชิก</title>

    <style>
div.row div{
		border:none;
		}
.crad {
	border:none;
}
body {
 font-family: 'Itim', cursive;
}
.table thead th {
    border-bottom: none;
}

body {
	background: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZTTFK6t4St2jKxxQvWccis1DdOVczQ6pkdXrqCNFXvVAKtVIZhA") no-repeat center center fixed;
	background-size: cover;
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 300;
	margin: 0;
	color: #666;
}

</style>

  <script src="Scripts/swfobject_modified.js" type="text/javascript"></script>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="styles.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="file:///D|/trap/source/cssmenu/script.js"></script>
   <title><i class="ion-ios-cart" ></i>CSS MenuMaker</title>
   <!--
   <body style="

    background-repeat: no-repeat;
    background-size: cover;
    background-position: top center;
    background-image:url(pic/%E0%B8%812.jpg)"
     >
     -->
     <link rel="stylesheet" href="ccad.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Itim" rel="stylesheet">
   <link rel="stylesheet" href="ionicons-2.0.1/css/ionicons.css">
   <link rel="stylesheet" href="ionicons-2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="ionicons-2.0.1/scss/_ionicons-font.scss">
   <link rel="stylesheet" href="ionicons-2.0.1/scss/_ionicons-icons.scss">
   <link rel="stylesheet" href="ionicons-2.0.1/scss/_ionicons-variables.scss">
   <link rel="stylesheet" href="ionicons-2.0.1/scss/ionicons.scss">

   <!-- Google Fonts -->
 	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

 	<link rel="stylesheet" href="css/animate.css">
 	<!-- Custom Stylesheet -->
 	<link rel="stylesheet" href="top1.css">

 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

	<script language="javascript">
	function check() {
		 if (form1.Passwd.value == '') {
			alert('กรุณากรอก PASSWORD')
			form1.Passwd.focus()
			return false
		}
		else if (form1.Name.value == '') {
			alert('กรุณากรอก NAME')
			form1.Name.focus()
			return false
		}
		else if (form1.Status.value == '') {
			alert('กรุณากรอก STATUS')
			form1.phone.focus()
			return false
		}
	}
	</script>

</head>
<body>

	<!--เมนู-->

<!--Endเมนู-->
<form id="form1" name="form1" method="post" action="check_editprofile.php" onsubmit="return check();">
  <center>
		<br>
	<div class="container">
		<div class="top">
			<br>
		</div>
		<div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>แก้ไขข้อมูลสมาชิก</h2>
			</div>
			<br>
      <?PHP
include("connect.php");
$strSQL ="SELECT * FROM member WHERE UserID='".$_SESSION["UserID"]."'";
$objQuery = mysqli_query($conn, $strSQL);
$objResult = mysqli_fetch_array($objQuery);
?>
  <table width="500" border="0" align="center" cellpadding="0"
           cellspacing="0">
    <tr>
      <td height="39">รหัสประจำตัว : </td>
      <td height="39" align="left"><?PHP echo $result['UserID'];?></td>
    </tr>

    <tr>
      <td height="39">ชื่อผู้ใช้ : </td>
      <td align="left"><?PHP echo $result['Username'];?></td>
    </tr>

    <tr>
      <td height="41">รหัสผ่าน : </td>
      <td align="left">
      <input  name="Passwd" type="password" id="Passwd"
            value="<?PHP echo $result['Password'];?>" /></td>
    </tr>

    <tr>
      <td width="141" height="39">ชื่อเล่น :</td>
      <td width="253" height="39" align="left">
      <input name="Name" type="text" id="Name"
            value="<?PHP echo $result['Name'];?>" size="40" /></td>
    </tr>

		<tr>
			<td height="39">สถานะ : </td>
			<td align="left"><?PHP echo $result['Status'];?></td>
		</tr>

    <tr>
      <td height="36" colspan="2" align="center">
				<br>
      <input type="submit" name="button" id="button" value="ตกลง" />
      <input type="reset" name="Reset" id="Reset" value="เคลียร์ข้อความ" />
    </td>
    </tr>

  </table>
		</div>
	</div>
</center>

</script>
</body>
</html>
