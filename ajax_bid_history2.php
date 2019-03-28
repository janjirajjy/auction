<?php 
//require("./conf.php");
require('condb.php');

$itemid = $_REQUEST['itemid'];
$cus_id = $_REQUEST['cus_id'];

$sql = "SELECT * FROM history  as h 
INNER JOIN customer as c ON h.cus_id=c.cus_id
WHERE h.auction_id = $itemid ORDER BY UNIX_TIMESTAMP(h.biddate) DESC LIMIT 1";
$result = mysqli_query($condb, $sql);

//echo $sql;
while ($row = mysqli_fetch_array($result)) {
	$username[] = $row['cus_name'];
}
?>
<?php 
if (isset($username)) {
for($i=0; $i<count($username); $i++) {
    echo '<span class="glyphicon glyphicon-tower"></span>'.' ' .$username[$i];
}
}
//mysqli_close($condb);
?>
 