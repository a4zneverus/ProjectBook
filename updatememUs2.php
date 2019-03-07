<?PHP
session_start();
$Mname = $_REQUEST['MName'];
$Mtel = $_REQUEST['MTel'];
$Mpass = $_REQUEST['MPassword'];
$Matm = $_REQUEST['Matm'];
$Mid = $_REQUEST['ID'];
include "ConnectDB.php";
$sql = "UPDATE member SET Mam_name = '$Mname' , Mem_Tel = '$Mtel', Mem_password = '$Mpass' WHERE Mem_id = ".$Mid;
$result = mysqli_query($dbconnect,$sql);
if ($result)
{
	echo "Record Update Complete!!";
	echo "<meta http-equiv='refresh' content='2;url=showmem1.php' />";
}
else
{
	echo "Update Error!! Please Try Again later !!";
	echo "<meta http-equiv='refresh' content='2;url=showmem1.php' />";
}
?>
