<?php
$query = "
SELECT o.*, c.*,p.*,a.*
FROM orders as o
INNER JOIN auction as a  ON o.auction_id=a.auction_id
INNER JOIN customer as c ON o.cus_id=c.cus_id 
INNER JOIN detailproduct as p ON a.product_id=p.product_id
GROUP BY o.auction_id
ORDER BY o.ord_id DESC" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 

//echo $query;
echo '<h4>::รายงานยอดขายภาพรวม::</h4>';
echo "<table id='example1' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='5%'><center>รหัส</center></th>
<th width='30%'>ชื่อสินค้า</th>
<th width='20%'><center>ผู้ชนะประมูล</center></th>
<th width='10%'><center>ยอด</center></th>
<th width='5%' id='hd'><center>view</center></th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td align='center'>" .$row["auction_id"] .'.'."</td> "; 
  echo "<td>" 
  .$row["product_name"]
  .'<br>'
  .'<font color="blue">'
  ."</td> "; 
  echo "<td>"
  ."คุณ" 
  .$row["cus_name"]
  ." "
  .$row["cus_lastname"]
  ."</td> ";
  echo "<td align='right'>" .number_format($row["trans_price"],2) ."</td> "; 
  echo "<td align='center' id='hd'>";
     echo "<a href='pay.php?auction_id=$row[auction_id]&act=showslip&p=$row[product_price_bid]&do=payform' class='btn btn-success btn-xs' target='_blank'>เปิดดู</a>";
    echo "</td>";
  echo "</tr>";
  $ptotal  += $row["trans_price"];
}
echo  "<tr class='info'>";
echo "<td>รวม</td>";
echo  "<td colspan='4'  align='right'>";
echo "<b>";
echo  number_format($ptotal)." "." บาท ";
echo "</b>";
echo  "</td>";
echo  "</tr>";
echo "</table>";
//5. close connection
mysqli_close($condb);

/*

.'เปิด '
  .date('d/m/Y',strtotime($row["auction_startdate"]))
  .'</font>'
  .' , '
  .'<font color="red">'
  .' ปิด '
  .date('d/m/Y H:i:s',strtotime($row["auction_end"]))
  .'</font>'

  */
?>