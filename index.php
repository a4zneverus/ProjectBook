<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bettermoon Cafe'</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
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
  <body>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874">
</head>
<?php
session_start();
if($_SESSION["UserID"]==""){
	echo "Please Login!";
	exit();
}
	if($_SESSION["Status"] !="ADMIN")
	{
		echo "This page for Admin only!";
		exit();
	}
	include("connect.php");
	$strSQL ="SELECT * FROM member WHERE UserID='".$_SESSION["UserID"]."'";
	$objQuery =mysqli_query($conn, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>
<body>
<!-- Header -->
	<?php include("header.php");?>
  &nbsp;&nbsp;&nbsp;
  <b>ยินดีต้อนรับคุณ:</b>&nbsp;<?php echo $objResult["Name"];?>
  <a href="edit_profile.php">แก้ไขข้อมูลส่วนตัว</a>&nbsp;
  <a href="logout.php">ออกจากระบบ</a>

<table width="100%" class="table table-bordered">

  <tr>
    <td width="10%" valign="top"><div align="center" >

	<!-- Container -->
	<?php
	if (empty($_GET["page"])){
		$_GET["page"]="home";
	}
	switch ($_GET["page"]) {
	case "home":
		include("page_home.php");
		break;
  case "addproduct":
    include("addproduct.php");
    break;
	case "service":
		include("page_service.php");
		break;
	case "order":
		include("page_order.php");
		break;
	case "aboutus":
		include("page_aboutus.php");
		break;
	case "contactus":
		include("page_contactus.php");
		break;
	case "logout":
		include("page_logout.php");
		break;
	default:
		include("page_home.php");
	}
	?>
	</td>
  </tr>
</table>
<div align="center">
	<!-- Footer -->
	<?php include("footer.php"); ?>
	</div>
</body>
</html>
