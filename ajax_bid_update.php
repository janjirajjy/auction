<?php 
//require('./conf.php');
require('condb.php');
//session_start();
//$cus_id = $_SESSION['cus_id'];

// Pull data from Items
$itemid = $_REQUEST['itemid'];
$sql = "SELECT *
FROM auction  as a
INNER JOIN detailproduct as p ON a.product_id=p.product_id
WHERE a.auction_id=$itemid";
$result = mysqli_query($condb, $sql);
$row = mysqli_fetch_array($result);



// Pull data from users
$cus_id = $_REQUEST['userid'];
$sql_user = "SELECT * FROM customer WHERE cus_id = $cus_id";
$result_user = mysqli_query($condb, $sql_user);
$row_user = mysqli_fetch_array($result_user);

//Export data
$username = $row['cus_id'];
$actual_price = $row['product_price_bid'];
$itemclosedate = $row['auction_end'];
//$simoleon = $row_user['user_Credit'];
$status = $row['auction_status'];

$return['bidder'] = $username;
$return['price'] = $actual_price;
$return['date'] = $itemclosedate;
//$return['simoleon'] = $simoleon;
$return['status'] = $status;

echo json_encode($return);

mysqli_close($condb);
?>