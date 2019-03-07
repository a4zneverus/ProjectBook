<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<BODY background="http://wallpapercraft.net/wp-content/uploads/2016/08/Red-Msi-Background.png" bgproperties="fixed"></BODY>
<title>Untitled Document</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="updatememUs2.php">

  <?PHP
  session_start();
  $_SESSION['id'] = $_REQUEST['ID'];
  $Cid = $_REQUEST['ID'];
  include "connect.php";
  $sql = "SELECT * FROM member WHERE UserID=$Cid";
  $qsql = mysqli_query($conn,$sql);
  $result = mysqli_fetch_array($qsql);
  ?>

  <h1><p align="center"> Member    </p></h1>
  <table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td height="39">ID : </td>
      <td height="39"><?PHP echo $result['UserID'];?></td>
    </tr>
    <tr>
      <td width="141" height="39">Username :</td>
      <td width="253" height="39"><label for="Username"></label>
      <input name="MName" type="text" id="MName" size="40" /><?PHP echo $result['Username'];?></td>
    </tr>
    <tr>
      <td width="141" height="39">Password :</td>
      <td width="253" height="39"><label for="Password"></label>
      <input name="MTel" type="text" id="MTel" size="40" /></td>
    </tr>
    <tr>
      <td height="39">Name: </td>
      <td><label for="Name"></label>
      <input type="text" name="Matm" id="Matm" size="40"></td>
    </tr>
    <tr>
      <td height="39">Status: </td>
      <td width="253" height="39"><label for="Status"></label>
      <input name="MPassword" type="text" id="MPassword" size="40" /><?PHP echo $result['Status'];?></td>
    </tr>




    <tr>
      <td height="36" colspan="2" align="center"><input type="submit" name="button" id="button" value="Submit" />
      <input type="reset" name="Reset" id="Reset" value="Reset" /></td>
    </tr>
  </table>
</form>
</body>
</html>
