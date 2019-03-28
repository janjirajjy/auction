<?php
$query = "
SELECT p.*,u.*,a.*,c.*, s.*
FROM detailproduct as  p
INNER JOIN unit as u  ON p.unit_id=u.unit_id
INNER JOIN auction as a  ON p.product_id=a.product_id
INNER JOIN customer as c  ON a.cus_id=c.cus_id 
INNER  JOIN productstatus as s  ON a.productstatus_id=s.productstatus_id 
WHERE a.productstatus_id IN (2,3)
ORDER BY a.auction_id DESC" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 
echo "<table id='example' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'><center>รหัส</center></th>
<th width='10%'>ภาพ</th>
<th width='30%'>ชื่อสินค้า</th>
<th width='20%'><center>ผู้ชนะประมูล</center></th>
<th width='10%'>สถานะ</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["auction_id"] .'.'."</td> "; 
  echo "<td>"."<img src='../".$row['product_photo']."' width='100%'>"."</td>";
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
  ."</td> "; 
  echo "<td>"
  ."คุณ" 
  .$row["cus_name"]
  ." "
  .$row["cus_lastname"]
  ."<br>"
  ." โทร. "
  .$row["cus_tel"]  
  ."</td> ";
  echo "<td>";
  $st = $row['productstatus_id'];
  echo  $row["status"];;
   echo "<br>";
  // if($st==1){
  //     echo "<a href='pay.php?id=$row[auction_id]&act=pay&p=$row[product_price_bid]&do=payform' class='btn btn-warning btn-xs' target='_blank'>ชำระเงิน</a>";
  // }else{

     echo "<a href='pay.php?auction_id=$row[auction_id]&act=showslip&p=$row[product_price_bid]&do=payform' class='btn btn-success btn-xs' target='_blank'>เปิดดู</a>";

  
  //}


  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>