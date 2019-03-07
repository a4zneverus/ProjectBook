<?PHP
session_start();
$Cid = $_REQUEST['p_id'];
	include("connect.inc");
$dsql = "DELETE FROM product WHERE p_id=$Cid";
$sql = mysqli_query($conn,$dsql);
if ($sql)
{
	echo "ลบสำเร็จ !!";
	echo "<meta http-equiv='refresh' content='2;url=index.php' />";
}
else
{
	echo "ลบไม่สำเร็จ กรุณาลองใหม่อีกครั้ง !!";
	echo "<meta http-equiv='refresh' content='2;url=index.php' />";
}
?>
