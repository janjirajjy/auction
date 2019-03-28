
<?php

//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM tbl_prd_type ORDER BY t_id asc" or die("Error:" . mysqli_error());

// echo $query;
// exit; 

//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($condb, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 

echo "<table class='table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<tr align='center' class='danger'>
<td width='5%'>รหัส</td>
<td width='75%'>ประเภทสินค้า</td>
<td width='10%'>แก้ไข</td>
<td width='10%'>ลบ</td>
</tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["t_id"] .'.'. "</td> "; 
  echo "<td>" .$row["t_name"] .  "</td> "; 
  //แก้ไขข้อมูล
  echo "<td>
  <a href='UserUpdateForm.php?ID=$row[0]' class='btn btn-warning btn-xs'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td>
  <a href='UserDelete.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>