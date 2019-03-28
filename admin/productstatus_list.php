<?php 
$query = "SELECT * FROM productstatus" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 

echo "<table  class='table table-bordered table-hover' >";
//หัวข้อตาราง
echo "
<tr align='center' class='danger'>
<td width='5%'>รหัส</td>
<td width='75%'>สถานะ</td>
<td width='5%'>แก้ไข</td>
<td width='5%'>ลบ</td>
</tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["productstatus_id"] .'.'  ."</td> "; 
  echo "<td>" .$row["status"] .  "</td> ";
  //แก้ไขข้อมูล
  echo "<td align='center'>
  <a href='productstatus.php?ID=$row[0]&act=edit' class='btn btn-warning btn-xs'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='productstatus_del_db.php?id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
//$i++;
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>