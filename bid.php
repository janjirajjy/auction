<?php
session_start();
// echo '<pre>';
// 	print_r($_SESSION);
// echo '</pre>';
require('condb.php');
include('header.php');
include('menu.php');
if ($_SESSION['cus_id'] == "" )
header("Location: login.php");
else {
$itemid = $_GET['id'];
$user = $_SESSION['cus_id'];
$sql_user = "SELECT * FROM customer WHERE cus_id = $user";
$result_user = mysqli_query($condb, $sql_user);
$row_user = mysqli_fetch_array($result_user);

$sql_item = "
SELECT *
FROM auction  as a
INNER JOIN detailproduct as p ON a.product_id=p.product_id
WHERE a.auction_id=$itemid
";
$result_item = mysqli_query($condb, $sql_item);
$row_item = mysqli_fetch_array($result_item);


//last auction id
$sqll = "SELECT *
FROM history  as h
LEFT JOIN customer as c ON h.cus_id=c.cus_id
WHERE h.auction_id=$itemid
ORDER BY h.bid DESC
LIMIT 1";
$resultl = mysqli_query($condb, $sqll);
$rowl = mysqli_fetch_array($resultl);
@extract($rowl);
$cus_name = $rowl['cus_name'];
//echo $sqll;
//print_r($rowl);
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8" />
		<title>SimpleAuction - Bidding</title>
		
		<!-- Include CSS -->
		<!-- <link href="./css/reset.css" rel="stylesheet" type="text/css" />
		<link href="./css/style.css" rel="stylesheet" type="text/css" /> -->
		<!-- <link href="./css/slimbox2.css" rel="stylesheet" type="text/css" /> -->
		<link href='http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700' rel='stylesheet' type='text/css' />
		<link href="./css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
		<link href="./css/jquery.countdown.css" rel="stylesheet" type="text/css" />
		
		<!-- Include Scripts -->
		<script type="text/javascript" src="./js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.lite.min.js"></script>
		<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script>
		<script type="text/javascript" src="js/jquery.color.js"></script>
		<script type="text/javascript" src="js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish.js"></script>
		<script type="text/javascript" src="js/slimbox2.js"></script>
		<script type="text/javascript" src="js/slides.min.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		<script type="text/javascript" src="./js/jquery-ui-1.8.16.custom.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-timepicker-addon.js"></script>
		<script type="text/javascript" src="./js/jquery.countdown.js"></script>
		<script type="text/javascript">
			setInterval("update()", 1000);
			function update() {
				$.getJSON('ajax_bid_update.php',
					{
		itemid: <?php echo $_GET['id'];?>,
		userid: <?php echo $user;?>
		},function(data) {
		$("#highest_bidder").text(data.bidder);
		$("#actual_price").text(data.price);
		if(data.status == 1) {
		$("#time_box").countdown("destroy");
		$("#bid").hide(0);
		$("#ended").show(0);
		}else {
		$("#time_box").countdown('change', {
		until: new Date(data.date)
		});
		}
		//$("#simoleon").text(data.simoleon);
		$("#bid_history").load('ajax_bid_history.php',
		{
		itemid: <?php echo $_GET['id'];?>,
		userid: <?php echo $user;?>
		} );


		$("#bid_history2").load('ajax_bid_history2.php',
		{
		itemid: <?php echo $_GET['id'];?>,
		userid: <?php echo $user;?>
		} );

		$("#bid_lastprice").load('ajax_bid_lastprice.php',
		{
		auction_id: <?php echo $_GET['id'];?>
		} );





		});
		}
		function highlight(periods) {
		if ($.countdown.periodsToSeconds(periods) <= 30) {
		$(this).addClass('highlight');
		}
		else {
		$(this).removeClass('highlight');
		}
		}
		
		$(document).ready(function() {
		$("#time_box").countdown({
		until: new Date("2018/12/31 19:38:41"),
		onTick: highlight,
		onExpiry: function() {
		$.ajax({
		type: 'POST',
		url: 'ajax_bid_winner_process.php',
		data: {
		itemid: <?php echo $_GET['id'];?>					},
		dataType: 'json',
		success: function(data) {
		$("#bid").hide(0);
		$("#ended").show(0);
		$("#time_box").countdown("destroy");
		}
		});
		}
		});
		$("#bid").click(function() {
		$.ajax({
		type: 'POST',
		url: 'ajax_bid_process.php',
		data: {
		cus_id: <?php echo $user;?>,
		itemid: <?php echo $_GET['id'];?>			},
		dataType: 'json',
		success: function(data) {
		if (data.error === 1) {
		alert("คุณได้ประมูลไปแล้ว");
		}else {
		update();
		$("#time_box").removeClass('highlight');
		}
		}
		});
		});
		
		});
		function MM_swapImgRestore() { //v3.0
		var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
			}
			function MM_preloadImages() { //v3.0
			var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
			var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
				if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
				}
				function MM_findObj(n, d) { //v4.01
				var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
				d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
				if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
				for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
				if(!x && d.getElementById) x=d.getElementById(n); return x;
				}
				function MM_swapImage() { //v3.0
				var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
				if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
				}
				</script>
			</head>
			<body onload="MM_preloadImages('images/buttons/login_hover.png')">
				<!-- START MAIN CONTAINER -->
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>ประมูล</h1>
							<div class="col-sm-5">
								<h4 style="margin:0px;color:red;">
								<span>
									
									เวลาคงเหลือ
									
								</span>
								</h4>
								<div id="time_box">
								</div>
								<br>
								<img src="<?php echo $row_item['product_photo'];?>" width="100%"/>
								<br/>
								
							</div>
							<div class="col-sm-2"></div>
							<div class="col-sm-5">
								<h3><?php echo $row_item['product_name'];?></h3>
								วันที่เริ่มประมูล :  
								<input type="text" name="" value="<?php echo date('d/m/Y',strtotime($row_item['auction_startdate']));?>" readonly>
								<br><br>
								วันจบประมูล : 
								<input type="text" name="" value="<?php echo date('d/m/Y',strtotime($row_item['auction_enddate']));?>" readonly>
								<br><br>
								เวลาปิดประมูล : 
								<input type="text" name="" value="<?php echo date('H:i:s',strtotime($row_item['auction_endtime']));?>" readonly>

								<!-- <br><br>
								สิ้นสุดประมูล : 
								<input type="text" name="" value="xxxxx" readonly> -->
								<br><br>
								<b>
								ราคาตอนนี้ 
								</b>
								<div class="row">
									<div class="col-xs-4">
										<h4>
										<div id="bid_lastprice"></div>
										
										
										</h4>
									</div>
									<div class="col-xs-5">
										<h4 style="color:blue;">
										<div id="bid_history2"></div>
										</h4>
									</div>
								</div>
								<div id="bid_box">
									
									<div class="row">
										<div class="col-xs-4">
											<h5> 
											ราคาประมูลต่อไป
										</h5>
											<?php 
											$lprice = $row_item['product_price_bid'];
											$pbid = $row_item['auction_price'];
											$tprice = ($lprice+$pbid);
											echo '<h4>';
											echo '<font color="red">';
											echo number_format($tprice,2);
											echo ' '.' THB';
											echo '</font>';
											echo '</h4>';
											?>
										</div>
										<div class="col-xs-6">
											<?php
												if ($row_item['auction_status'] == 0) {
													?>

												<a id="bid" href=""  onclick="return confirm('ยืนยัน');">
													<img style="margin-top:20px;" src="images/buttons/bid.png"/>

													<br />

												</a>
											<?php 
												}
											?>
											<span id="ended" style="display: none;">
												<img style="margin-top:20px;" src="images/buttons/ended.png" /><br />
											</span>
											<?php
												if($row_item['auction_status'] == 0){
											?>
											<!-- <b>
											<span id="price_per_bid" style='color: green'>บาท
											<?php  echo $row_item['auction_price']; ?></b> per bid</span>
											</b> -->
											<?php
													}
											?>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12">
								<div class="col-xs-7">
								<div id="bid_history"></div>
							</div>
							</div>
						</div>
					</div>
					<!-- END Auction Item CONTAINER -->
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div id="bid_description">
									<h4 style="margin-top: 10px;">รายละเอียดสินค้า</h4>
									<b>รหัสการประมูล : <?php echo $_GET['id'];?>
									</b>
									<br>
									<b>ข้อมูลสินค้า</b> <br>
									<?php  echo $row_item['product_detail']; ?>
								</div>
								
							</body>
						</html>
						<?php
						mysqli_close($condb);
							/*
						<div id="bid_description">
															<h3 style="margin-top: 50px;"> Description </h3>
							<?php  echo $row_item['product_detail']; ?>
						</div>
						*/
						?>