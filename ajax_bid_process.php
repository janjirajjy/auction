<?php 
//require('./conf.php');
//session_start();
//$cus_id = $_SESSION['cus_id'];
require('condb.php');
//$cus_id = $_SESSION['cus_id'];
$itemid = $_POST['itemid'];
$cus_id = $_POST['cus_id'];
$currentdate = date("Y/m/d H:i:s");

// Select Items Data
$sql_item = "
SELECT a.*,p.*
FROM auction  as a
INNER JOIN detailproduct as p ON a.product_id=p.product_id
WHERE a.auction_id=$itemid";
$result_item = mysqli_query($condb, $sql_item);
$row_item = mysqli_fetch_array($result_item);
//echo $sql_item;
//print_r($row_item);



// Select customer Data
$sql_user = "SELECT * FROM customer WHERE cus_id = '$cus_id'";
$result_user = mysqli_query($condb, $sql_user);
$row_user = mysqli_fetch_array($result_user);

if ( $row_item['cus_id'] ==  $cus_id ) {
	$return['error'] = 1;
}
else 
{


//Updated Bidding Data
//$actual_price = ($row_item['product_price'] + $row_item['auction_price']);
$itemclosedate = $row_item['auction_end'];
$itemclosedate = strtotime($itemclosedate);
$itemclosedate = strtotime("+30 second", $itemclosedate);
$itemclosedate = date("Y/m/d H:i:s", $itemclosedate);
$itemname = $row_item['product_name'];

$product_price_bid = $row_item['product_price_bid'];
$auction_price =  $row_item['auction_price']; 
 

// Record bidding in Bid Table
$sql_update_bid = "
INSERT INTO history 
(cus_id, auction_id,  product_name,  bid_price) 
VALUES 
($cus_id, $itemid,   '$itemname',  ($product_price_bid+$auction_price))";
mysqli_query($condb, $sql_update_bid) or die ("Error in query: $sql_update_bid " . mysqli_error());;

// Update Items Table
$sql_update_item = "UPDATE auction SET 
auction_end = '$itemclosedate', 
product_price_bid = ($product_price_bid+$auction_price), 
cus_id =$cus_id, 
auction_status = 0 
WHERE auction_id = $itemid";
mysqli_query($condb, $sql_update_item);

//Update customer Table
// $sql_update_user = "UPDATE customer SET 
// user_Credit = user_Credit - 1 WHERE cus_id = '$cus_id'";
// mysqli_query($condb, $sql_update_user);

 //    echo "<script type='text/javascript'>";
	// echo "alert('บันทึกข้อมูลสำเร็จ');";
	// //echo "window.history.back();";
	// echo "window.location = 'bid.php?id=8&do=ok'; ";
	// echo "</script>";

}
echo json_encode($return);


 



mysqli_close($condb);
?>