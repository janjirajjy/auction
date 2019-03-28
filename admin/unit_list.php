<?php 
$query = "SELECT * FROM unit" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 

echo "<table  class='table table-bordered table-hover' >";
//หัวข้อตาราง
echo "
<tr align='center' class='danger'>
<td width='5%'>รหัส</td>
<td width='75%'>หน่วยสินค้า</td>
<td width='5%'>แก้ไข</td>
<td width='5%'>ลบ</td>
</tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["unit_id"] .'.'  ."</td> "; 
  echo "<td>" .$row["unit_detail"] .  "</td> ";
  //แก้ไขข้อมูล
  echo "<td align='center'>
  <a href='unit.php?ID=$row[0]&act=edit' class='btn btn-warning btn-xs'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='unit_del_db.php?id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
//$i++;
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>