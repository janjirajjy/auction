<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>my backend</title>
		<link href="../bt/css/bootstrap.min.css" rel="stylesheet">
		<link href="../bt/css/style.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css">
		<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.0.min.js"></script>
		<script type="text/javascript" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.min.js">
		</script>
<script>
$(document).ready(function() {
$('#example').DataTable( {
"aaSorting" :[[0,'desc']],
//"lengthMenu":[[20,50, 100, -1], [20,50, 100,"All"]]
});
} );
</script>
	</head>
<?php 	
include('../condb.php'); 
session_start();
//print_r($_SESSION);
$cus_status = $_SESSION['cus_status'];
if($cus_status!='ONLINE'){
	header("Location: ../logout.php ");	
}

$cus_id = $_SESSION['cus_id'];
 
$sql = "SELECT * FROM customer WHERE cus_id=$cus_id ";
$result = mysqli_query($condb, $sql) or die ("Error in query: $sql " . mysqli_error());
$row = mysqli_fetch_array($result);
extract($row);
$cus_name = $row['cus_name'];
$cus_cus_email=$row['cus_email'];
$u_cusid=$row['cus_id'];
?>
 