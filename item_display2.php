<?php
require('condb.php');
$sql_update = "UPDATE auction SET auction_status = 1 WHERE (UNIX_TIMESTAMP(auction_end) - UNIX_TIMESTAMP()) < 0";
$result = mysqli_query($condb, $sql_update);
//echo $sql_update;
$sdate = date('Y-m-d');
$edate = date('Y-m-d H:i:s');
//echo $cdate;
$sql = "SELECT * 
FROM auction  as a 
INNER JOIN detailproduct as p ON a.product_id=p.product_id
WHERE a.auction_status = 0 
AND '$sdate' >= a.auction_startdate 
AND '$edate' <= a.auction_end
ORDER BY UNIX_TIMESTAMP(a.auction_end)";
$result = mysqli_query($condb, $sql);
//echo $sql;
while ($row = mysqli_fetch_array($result)) {
	$id[] = $row['auction_id'];
	$name[] = $row['product_name'];
	$price[] = $row['product_price_bid'];
	$highest_bidder[] = $row['user_Name'];
	$date[] = $row['auction_end'];
	$path[] = $row['product_photo'];

	//echo $path;
}
?>
<link href="css/jquery.countdown.css" rel="stylesheet" type="text/css" />
<!-- Include Scripts -->
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript">
function highlight(periods) {
		if ($.countdown.periodsToSeconds(periods) <= 30) {
	$(this).addClass('highlight');
	}
		else {
			$(this).removeClass('highlight');
		}
	}
$(document).ready(function(){
<?php
	for($i=0;$i<count($id);$i++) {
		echo '$("#item_time_'.$id[$i].'").countdown({
			until: new Date("'.$date[$i].'"),
			format: "dHMS",
			onTick: highlight,
			onExpiry: function() {
				$.ajax({
					type: "POST",
					url: "ajax_bid_winner_process.php",
					data: {
						itemid:'.$id[$i].'
					},
					dataType: "json",
					success: function(data) {
						$("#bid").attr("id","ended");
						$("#ended").attr("src","./images/buttons/ended.png");
						$("#time_box").countdown("destroy");
					}
				});
			}
		});';
	}
?>
});
</script>
<?php
if (isset($id)) {
for($i=0;$i<count($id);$i++) {
	echo '<div id="item'.$id[$i].'" class="col-xs-3 col-md-3 itemBox1" align="center" style="margin-bottom:20px;">';
			//echo '<p class="item_head1" align="center"><strong>'.$name[$i].'</strong></p>';
		echo '<a href="bid.php?id='.$id[$i].'">
				<img src="'.$path[$i].'" width="100%"/>
		</a>';
		//echo '<p class="item_price"> 
		//<strong>'.$name[$i].'</strong>
		//</p>
		
		echo 
		 '<p>'
		 .number_format($price[$i],2).' บาท'.'</p>';
		echo '<p class="item_highest_bidder">'.$highest_bidder[$i].'</p>';
		echo '<div id="item_time_'.$id[$i].'" class="item_time">'.$date[$i].'</div>';
		echo '<a href="bid.php?id='.$id[$i].'" class="btn btn-info" style="width:100%">
		<span class="glyphicon glyphicon-shopping-cart"> </span> 
		      ประมูล 
			 
		</a>';
echo '</div>';
}
}
//<img class"item_image" src="./images/buttons/open.png" alt="Bid Now" width="100" height="47" />
?>
<?php
mysqli_close($condb);
?>