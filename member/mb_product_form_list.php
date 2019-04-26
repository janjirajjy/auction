<?php
$query = "
SELECT p.*,u.*
FROM detailproduct as  p
INNER JOIN unit as u  ON p.unit_id=u.unit_id WHERE p.product_customerid='$cus_cus_email'
ORDER BY p.product_id ASC" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 
echo "<table id='example' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
//<th width='7%'>ราคา</th>
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'>รหัส</th>
<th width='10%'>ภาพ</th>
<th width='50%'>ชื่อสินค้า</th>

<th width='7%'>หน่วย</th>
<th width='5%'>เปิด</th>
<th width='5%'>แก้ไข</th>
<th width='5%'>ลบ</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["product_id"] .'.'."</td> "; 
  echo "<td>"."<img src='../".$row['product_photo']."' width='100'>"."</td>";
  echo "<td>" .$row["product_name"] .  "</td> "; 
  //echo "<td>" .$row["product_price"] .  "</td> ";  
  echo "<td align='center'>" .$row["unit_detail"] .  "</td> ";

  //open bid
  echo "<td align='center'>
  <a href='addproduct.php?ID=$row[0]&act=open' class='btn btn-info btn-xs'>OPEN</a>
  </td> ";

  //แก้ไขข้อมูล
  echo "<td align='center'>
  <a href='addproduct.php?ID=$row[0]&act=edit' class='btn btn-warning btn-xs'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='mb_product_del_db.php?id=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";

  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>