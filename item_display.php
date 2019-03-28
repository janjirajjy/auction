<?php
require('conf.php');
$sql_update = "UPDATE items SET item_Status = 1 WHERE (UNIX_TIMESTAMP(item_Close_Date) - UNIX_TIMESTAMP()) <0";
$result = mysqli_query($connect, $sql_update);
//echo $sql_update;
$sql = "SELECT * FROM items WHERE item_Status = 0 ORDER BY UNIX_TIMESTAMP(item_Close_Date)";
$result = mysqli_query($connect, $sql);
//echo $sql;
while ($row = mysqli_fetch_array($result)) {
	$id[] = $row['item_ID'];
	$name[] = $row['item_Name'];
	$price[] = $row['item_Actual_Price'];
	$highest_bidder[] = $row['user_Name'];
	$date[] = $row['item_Close_Date'];
	$path[] = str_replace('..','.',$row['item_Path']);
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
	echo '<div id="item'.$id[$i].'" class="col-xs-3 col-md-3 itemBox1" align="center">';
			echo '<p class="item_head" align="center"><strong>'.$name[$i].'</strong></p>';
		echo '<a href="bid.php?id='.$id[$i].'">
				<img src="'.$path[$i].'" width="100%" alt="" />
		</a>';
		echo '<p class="item_price">'.' ราคา ' .$price[$i].' บาท'.'</p>';
			echo '<p class="item_highest_bidder">'.$highest_bidder[$i].'</p>';
		echo '<div id="item_time_'.$id[$i].'" class="item_time">'.$date[$i].'</div>';
		echo '<a href="bid.php?id='.$id[$i].'">
			<img class"item_image" src="./images/buttons/open.png" alt="Bid Now" width="100" height="47" />
		</a>';
echo '</div>';
}
}
?>
<?php
mysqli_close($connect);
?>