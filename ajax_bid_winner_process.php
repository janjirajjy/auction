<?php 
//require("./conf.php");
require('condb.php');

$itemid = $_POST['itemid'];

$sql = "UPDATE auction  SET auction_status = 1 WHERE auction_id = '$itemid'";

mysqli_query($condb, $sql);

mysqli_close($condb);
?>