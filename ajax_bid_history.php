<?php 
//require("./conf.php");
require('condb.php');

$itemid = $_REQUEST['itemid'];
$cus_id = $_REQUEST['cus_id'];

$sql = "SELECT * FROM history  as h 
INNER JOIN customer as c ON h.cus_id=c.cus_id
WHERE h.auction_id = $itemid ORDER BY UNIX_TIMESTAMP(h.biddate) DESC";
$result = mysqli_query($condb, $sql);

//echo $sql;
while ($row = mysqli_fetch_array($result)) {
	$username[] = $row['cus_name'];
	$date[] = $row['biddate'];
	$price[] = $row['bid_price'];
}
?>
<h4> รายการประมูล </h4>
<table class="table table-hover table-striped table-bordered">
<tr class="info">
<th width="20%"><center>ผู้ประมูล</center></th>
<th width="50%">ระยะเวลา</th>
<th width="30%"><center>ราคาที่ประมูล</center></th>
</tr>
<?php 
if (isset($username)) {
for($i=0; $i<count($username); $i++) {
	echo "<tr>";
    echo "<td>".'- '.$username[$i]."</td>";
    echo "<td>".date('d/m/Y H:i:s',strtotime($date[$i]))."</td>";
	echo "<td align='right'>"."<font color='red'>".number_format($price[$i],2)."</font>"."</td>";
	echo "</tr>";
}
}
mysqli_close($condb);
?>
</table>