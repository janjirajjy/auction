<?php 
//require("./conf.php");
require('condb.php');

$auction_id = $_REQUEST['auction_id'];
//$cus_id = $_REQUEST['cus_id'];
//$auction_id = $_GET['id'];

$sql_item = "
SELECT *
FROM auction  as a
INNER JOIN detailproduct as p ON a.product_id=p.product_id
WHERE a.auction_id=$auction_id 
";
$result_item = mysqli_query($condb, $sql_item);
$row_item = mysqli_fetch_array($result_item);


//echo $sql_item;
echo number_format($row_item['product_price_bid'],2).' THB';

//echo $sql;
 /*
while ($row_item = mysqli_fetch_array($result_item)) {
	$product_price_bid[] = $row_item['product_price_bid'];
}

if (isset($product_price_bid)) {
for($i=0; $i<count($product_price_bid); $i++) {
    echo $product_price_bid[$i];
}
}
//mysqli_close($condb);

*/



?>
 