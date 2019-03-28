<?php 
$query = "SELECT * FROM account" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 

echo "<table id='example' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'>รหัส</th>
<th width='20%'>ชื่อบัญชี</th>
<th width='20%'>เลขบัญชี</th>
<th width='20%'>ประเภทบัญชี</th>
<th width='20%'>ชื่อธนาคาร</th>
<th width='5%'>แก้ไข</th>
<th width='5%'>ลบ</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["account_id"] .'.'  ."</td> "; 
  echo "<td>" .$row["account_name"] .  "</td> ";
  echo "<td>" .$row["account_number"] .  "</td> ";
  echo "<td>" .$row["account_type"] .  "</td> ";
  echo "<td>" .$row["bank_name"] .  "</td> ";
  //แก้ไขข้อมูล
  echo "<td align='center'>
  <a href='bank.php?ID=$row[0]&act=edit' class='btn btn-warning btn-xs'>edit</a></td> ";
  //UserUpdateForm.php?ID=$row[0]
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='bank_del_db.php?id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
//$i++;
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>