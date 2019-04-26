<?php
$query = "
SELECT p.*,u.*,a.*,c.*,h.*
FROM detailproduct as  p
INNER JOIN unit as u  ON p.unit_id=u.unit_id
INNER JOIN auction as a  ON p.product_id=a.product_id
INNER JOIN customer as c  ON a.cus_id=c.cus_id 
INNER JOIN history as h ON a.auction_id=h.auction_id
WHERE a.cus_id=$cus_id AND a.auction_status=1
ORDER BY p.product_id ASC" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 
echo "<table id='example' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'><center>No.</center></th>
<th width='5%'>ภาพ</th>
<th width='30%'>ชื่อสินค้า</th>
<th width='10%'><center>ราคาประมูล</center></th>
<th width='10%'><center>ว/ด/ป</center></th>
<th width='5%'>เปิดดู</th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$i+=1 .'.'."</td> "; 
  //echo "<td align='center'>" .$row["auction_id"] .'.'."</td> "; 
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
  echo "<td align='right'>" .number_format($row["bid_price"],2) .  "</td> ";
  echo "<td align='center'>" .date('d/m/Y H:i:s',strtotime($row["biddate"])) .  "</td> ";
  echo "<td align='center'>
  <a href='../bid.php?id=$row[auction_id]' class='btn btn-info btn-xs' target='_blank'>VIEW</a></td> ";

  echo "</tr>";
}
echo "</table>";
//5. close connection
mysqli_close($condb);
?>