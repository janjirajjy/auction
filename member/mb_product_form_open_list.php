<?php
$query = "
SELECT p.*,u.*,a.*
FROM detailproduct as  p
INNER JOIN unit as u  ON p.unit_id=u.unit_id
INNER JOIN auction as a  ON p.product_id=a.product_id  WHERE p.product_customerid='$cus_cus_email' AND a.productstatus_id IN (1) 
ORDER BY p.product_id ASC" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 

echo '<h4>::รายการสินค้าที่เปิดประมูล::</h4>';
echo "<table id='example' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'>รหัส</th>
<th width='7%'>ภาพ</th>
<th width='30%'>ชื่อสินค้า</th>
<th width='7%'>ราคา</th>
<th width='10%'>ราคาบิด</th>
<th width='10%'>สถานะ</th>
<th width='3%'>แก้ไข</th>
<th width='3%'>ลบ</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["auction_id"] .'.'."</td> "; 
  echo "<td>"."<img src='../".$row['product_photo']."' width='100'>"."</td>";
  echo "<td>" 
  .$row["product_name"]
  .' จำนวน '
  .$row["auction_amount"].' '.$row["unit_detail"]
  .'<br>'
  .'<font color="blue">'
  .'เปิด '
  .date('d/m/Y',strtotime($row["auction_startdate"]))
  .'</font>'
  .' , '
  .'<font color="red">'
  .' ปิด '
  .date('d/m/Y H:i:s',strtotime($row["auction_end"]))
  .'</font>'
  .'<br>'
  .' วันที่บันทึกข้อมูล '
  .date('d/m/Y H:i:s',strtotime($row["datesave"]))
  ."</td> "; 
  echo "<td align='right'>" .number_format($row["product_price"],2) .  "</td> "; 
  echo "<td align='right'>" .number_format($row["auction_price"],2) .  "</td> ";  
  echo "<td align='center'>";
  $st = $row["auction_status"];
  if($st==1){
    echo '<font color="red">';
    echo 'ปิดประมูล';
    echo '</font>';
  }else{
    echo '<font color="green">';
    echo 'เปิดประมูล';
    echo '</font>';
  }
  echo "</td> ";

  //แก้ไขข้อมูล
  echo "<td align='center'>
  <a href='addproduct.php?ID=$row[auction_id]&act=openedit' class='btn btn-warning btn-xs'>edit</a></td> ";
  
  //ลบข้อมูล
  echo "<td align='center'>
  <a href='mb_product_open_del_db.php?aid=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>del</a></td> ";

  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>