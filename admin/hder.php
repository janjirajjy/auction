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
		<style type="text/css">
			@media print{
				#hd{
					display: none;
				}
			}
		</style>
	</head>
	<?php
	include('../condb.php');
	session_start();
	//print_r($_SESSION);
	$user_level = $_SESSION['user_level'];
	if($user_level!='A'){
		header("Location: ../logout.php ");
	}
	$user_name = $_SESSION['user_name'];
	?>