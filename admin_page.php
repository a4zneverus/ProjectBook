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
	include("connect.inc");
	$strSQL ="SELECT * FROM member WHERE UserID='".$_SESSION["UserID"]."'";
	$objQuery =mysqli_query($conn, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
?>
<html>
<head>
<title>Book Store System</title>
</head>
<body><center>
	Welcome to Admin Page!</center><br>
	<table border="1" style="width: 300px" align="center">
	<tbody>
	<tr>
 <center><img border="0" src="img/book.jpg" width="13%"><br><br></center></tr>
<tr>
		<tr>
			<td width="87">&nbsp;Username</td>
			<td width="197"><?php echo $objResult["Username"];?></td>
		</tr>
		<tr>
			<td>&nbsp;Name</td>
			<td><?php echo $objResult["Name"];?></td>
		</tr>
	</tbody>
	</table>
	<br><center>
	<h4><a href="edit_profile.php">Edit</a>&nbsp;
	<a href="logout.php">Logout</a>&nbsp;
	<?php include("index.php"); ?>
</center>
<center>
  <br><br><br> <?php include("footer.php"); ?>
</center>
</body>
</html>