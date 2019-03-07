<?PHP
session_start();
$Cname   = $_POST['Name'];
$Cpass   = $_POST['Passwd'];
include "connect.php";
$sql = "UPDATE member SET Name = '$Cname' , Passwd = '$Cpass' WHERE  UserID = ".$_SESSION['UserID'];
$result = mysqli_query($conn,$sql);
if ($result)
{
	echo "แก้ไขข้อมูลสำเร็จ!!";
	echo "<meta http-equiv='refresh' content='2;url=index.php' />";
}
else
{
	echo "แก้ไขข้อมูลล้มเหลว กรุณาลองใหม่อีกครั้ง!!";
	echo "<meta http-equiv='refresh' content='2;url=edit_profile.php' />";
}
?>
