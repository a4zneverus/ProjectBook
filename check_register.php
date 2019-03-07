<?PHP
$Muser 		= $_REQUEST['username'];
$Mpass 		= $_REQUEST['password'];
$Mname 		= $_REQUEST['name'];
include "connect.php";
$sql = "SELECT * FROM member WHERE UserID ='$Muser'";
$qsql = mysqli_query($conn,$sql);
$result = mysqli_fetch_array($qsql);
if ($result)
	{
	echo "Username is used";
	echo "<meta http-equiv='refresh' content='2;url=addprofile.php' />";
	}
else
{
	  $insql = "INSERT INTO member VALUES (NULL,'$Muser','$Mpass','$Mname','USER')";
	  $qinsql = mysqli_query($conn,$insql);
if($qinsql)
	{
		echo "Insert Complete!!";
		echo "<meta http-equiv='refresh' content='2;url=home.php' />";
	}
else
	{
		echo "Insert Error!! Please try agian later !!";
		echo "<meta http-equiv='refresh' content='2;url=home.php' />";
	}
}
?>
