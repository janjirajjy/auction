<?php 
$query = "SELECT * FROM customer" or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 

echo "<table id='example' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'>รหัส</th>
<th width='35%'>ชื่อ-นามสกุล</th>
<th width='10%'>Uername</th>
<th width='10%'>Password</th>
<th width='30%'>ที่อยู่</th>
<th width='5%'>สถานะ</th>
<th width='5%'>แก้ไข</th>
<th width='5%'>ลบ</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["cus_id"] .'.'  ."</td> "; 
  echo "<td>" .$row["cus_name"].' '.$row["cus_lastname"] . "</td> ";
  echo "<td>" .$row["cus_email"] .  "</td> ";
  echo "<td>" .$row["cus_password"] .  "</td> ";
  echo "<td>" .$row["cus_address"] .  "<br> "
  .' เบอร์โทร '
  .$row["cus_tel"] .  "</td> ";
  echo "<td>"; 
  $st = $row["cus_status"];
  if($st=='ONLINE'){
    echo '<font color="green">';
    echo $st;
    echo '</font>';
  }else{
    echo '<font color="red">';
    echo $st;
    echo '</font>';
  }
  echo "</td> ";
  //แก้ไขข้อมูล
  echo "<td align='center'>
  <a href='customer.php?ID=$row[0]&act=edit' class='btn btn-warning btn-xs'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='customer_del_db.php?id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";
  echo "</tr>";
  //UserDelete.php?ID=$row[0]
//$i++;
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>