<?php
$query = "
SELECT o.*, c.*,p.*,a.*
FROM orders as o
INNER JOIN auction as a  ON o.auction_id=a.auction_id
INNER JOIN customer as c ON o.cus_id=c.cus_id 
INNER JOIN detailproduct as p ON a.product_id=p.product_id
GROUP BY DATE_FORMAT(o.ord_date, '%m%')
ORDER BY o.ord_id DESC" 
or die("Error:" . mysqli_error());
$result = mysqli_query($condb, $query); 

//echo $query;
echo '<h4>::รายงานยอดขายภาพรวมรายเดือน::</h4>';
echo "<table id='example1' class='display table table-bordered table-hover'>";
//หัวข้อตาราง
echo "
<thead>
<tr align='center' class='danger'>
<th width='30%'>เดือน</th>
<th width='10%'><center>ยอด</center></th>
</tr>
</thead>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" 
  .date('M-Y',strtotime($row["ord_date"]))
  .'<br>'
  .'<font color="blue">'
  ."</td> "; 

  echo "<td align='right'>" .number_format($row["trans_price"],2) ."</td> "; 
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