<?php
	session_start();
	  include("connect.php");
	$strSQL = "SELECT * FROM member WHERE Username = '".$_POST['txtUsername']."' and Password = '".$_POST['txtPassword']."'";
	$objQuery = mysqli_query($conn, $strSQL);
	$objResult = mysqli_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();

			if($objResult["Status"] == "ADMIN")
			{
				header("location:index.php");
			}
			else
			{
				header("location:product.php");
			}
	}
	mysql_close();
?>
