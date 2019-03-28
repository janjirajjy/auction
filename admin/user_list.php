<?php 
$query = "SELECT * FROM user" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 

echo "<table id='example' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'>รหัส</th>
<th width='40%'>ชื่อ-นามสกุล</th>
<th width='10%'>Uername</th>
<th width='10%'>Password</th>
<th width='15%'>เบอร์โทร</th>
<th width='5%'>แก้ไข</th>
<th width='5%'>ลบ</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["user_id"] .'.'  ."</td> "; 
  echo "<td>" 
  .$row["user_name"]
  .' '
  .$row["user_lastname"] 
  . "</td> ";
  echo "<td>" .$row["user_username"] .  "</td> ";
  echo "<td>" .$row["user_password"] .  "</td> ";
  echo "<td>" .$row["user_tel"] .  "</td> ";
  //แก้ไขข้อมูล
  echo "<td align='center'>
  <a href='user.php?ID=$row[0]&act=edit' class='btn btn-warning btn-xs'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='user_del_db.php?id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
//$i++;
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>