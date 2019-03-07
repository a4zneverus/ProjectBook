<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-874">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mc</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <style>
	.wa{
  background-color:#ff99cc;
  border-radius: 4px;
  border-style: solid;
border-color:#ff99cc;
padding-top:10%;
padding: 4px;
}
  </style>
  <body style="margin-top: 10px;">
 <?php
 $conn = mysqli_connect('localhost', 'root', '', 'book2');
 $sql = "SELECT * FROM product";
	$query = mysqli_query($conn,$sql);
  $num_rows = mysqli_num_rows($query);

 $per_page = 5;   // Per Page
 $page  = 1;

 if(isset($_GET["Page"]))
 {
 	$page = $_GET["Page"];
 }

 $prev_page = $page-1;
 $next_page = $page+1;

 $row_start = (($per_page*$page)-$per_page);
 if($num_rows<=$per_page)
 {
 	$num_pages =1;
 }
 else if(($num_rows % $per_page)==0)
 {
 	$num_pages =($num_rows/$per_page) ;
 }
 else
 {
 	$num_pages =($num_rows/$per_page)+1;
 	$num_pages = (int)$num_pages;
 }
 $row_end = $per_page * $page;
 if($row_end > $num_rows)
 {
 	$row_end = $num_rows;
 }
$sql .= " ORDER BY p_id DESC LIMIT $row_start ,$row_end ";

$query = mysqli_query($conn,$sql);
 ?>



<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href="style.css" rel="stylesheet" type="text/css"/>
<table align="center" class="table table-bordered">

  <tr>
	<td width="50" align="center" class="wa"><strong>รหัสสินค้า</strong></td>
	<td width="200" align="center" class="wa"><strong>ภาพสินค้า</strong></td>
	<td width="300" align="center" class="wa"><strong>ชื่อสินค้า</strong></td>
	<td width="100" align="center" class="wa"><strong>ราคา</strong></td>
	<td width="40" align="center" class="wa"><strong>หมวดหมู่</strong></td>
	<td width="50" align="center" class="wa"><strong>แก้ไข</strong></td>
	<td width="60" align="center" class="wa"><strong>ลบ</strong></td>
	</tr>

  <?php while ($result = mysqli_fetch_assoc($query)) { ?>
    <?php/*
   $strSQL = "SELECT * FROM product ORDER BY p_id DESC";
   $objQuery =mysqli_query($conn, $strSQL);*/
   ?>
   <tr>
   <td><?php echo $result['p_id']?></td>
   <td><?php
   if(file_exists("img/{$result['p_pic']}"))
   {
   ?>
     <img src="img/<?php echo $result['p_pic']?>" width="80" border="0"/>
     <?php
     }
     ?></td>
   <td><?php echo $result['p_name'] ?></td>
   <td><?php echo $result['p_price'] ?></td>
   <td align="center"><?php echo $result['c_id']?></td>
   <td><a href="edit_product.php?p_id=<?php echo $result['p_id']?>">edit</a></td>
   <td><a href="delpro.php?p_id=<?php echo $result['p_id']?>"
   onclick="return confirm('Are you sure??');">delete</a></td>
   </tr>
 <?php } ?>
</table>

 <br>
จากสินค้าทั้งหมด : <?php echo $num_rows;?> ชิ้น ปัจจุบันอยู่หน้าที่ : <?php echo $num_pages;?> ไปยังหน้า :
<?php
if($prev_page)
{
	echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$prev_page'><< Back</a> ";
}

for($i=1; $i<=$num_pages; $i++){
	if($i != $page)
	{
		echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i'>$i</a> ]";
	}
	else
	{
		echo "<b> $i </b>";
	}
}
if($page!=$num_pages)
{
	echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$next_page'>Next>></a> ";
}
$con2 = null;
?>

 <script src="bootstrap/js/bootstrap.min.js"></script>
 <table>
   <tr>
     <td><a href="index.php?page=addproduct" target="rightframe"><input type="button" value="เพิ่มสินค้า" class="btn"/></a></td>
   </tr>
 </table>
</body>
</html>
