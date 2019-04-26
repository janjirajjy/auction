<?php
$query = "
SELECT p.*,u.*,a.*,c.*, s.*
FROM detailproduct as  p
INNER JOIN unit as u  ON p.unit_id=u.unit_id
INNER JOIN auction as a  ON p.product_id=a.product_id
INNER JOIN customer as c  ON a.cus_id=c.cus_id 
INNER  JOIN productstatus as s  ON a.productstatus_id=s.productstatus_id 
WHERE a.auction_status=1
AND a.cus_id='$cus_id'
ORDER BY p.product_id ASC" ;
$result = mysqli_query($condb, $query); 
echo "<table id='example' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'><center>รหัส</center></th>
<th width='10%'>ภาพ</th>
<th width='30%'>ชื่อสินค้า</th>
<th width='10%'><center>ราคาชนะประมูล</center></th>
<th width='10%'>สถานะ</th>
<th width='5%'>เปิดดู</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["auction_id"] .'.'."</td> "; 
  echo "<td>"."<img src='../".$row["product_photo"]."' width='100%'>"."</td>";
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
  echo "<td align='right'>" .number_format($row["product_price_bid"],2) .  "</td> ";
  echo "<td>";
  $st = $row['productstatus_id'];
  echo  $row["status"];;
   echo "<br>";
  if($st==1){
      echo "<a href='index.php?id=$row[auction_id]&act=pay&p=$row[product_price_bid]&do=payform' class='btn btn-warning btn-xs' target='_blank'>ชำระเงิน</a>";
  }else{

     echo "<a href='index.php?auction_id=$row[auction_id]&act=showslip&p=$row[product_price_bid]&do=payform' class='btn btn-success btn-xs' target='_blank'>การชำระเงิน</a>";

  
  }

 echo "</td> "; 
  echo "<td align='center'>
  <a href='../bid.php?id=$row[auction_id]' class='btn btn-info btn-xs' target='_blank'>VIEW</a></td> ";

  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>