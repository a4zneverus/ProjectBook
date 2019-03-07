<?PHP
session_start();
$Cname   = $_POST['Name'];
$Cpass   = $_POST['Passwd'];
include "connect.php";
$sql = "UPDATE member SET Name = '$Cname' , Password = '$Cpass' WHERE  UserID = ".$_SESSION['UserID'];
$result = mysqli_query($conn,$sql);
if ($result)
{
	echo "<script>alert('แก้ไขข้อมูลสำเร็จ !!')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php' />";
}
else
{
	echo "<script>alert('แก้ไขข้อมูลล้มเหลว กรุณาลองใหม่อีกครั้ง!!')</script>";
	echo "<meta http-equiv='refresh' content='0;url=index.php' />";
}
?>
