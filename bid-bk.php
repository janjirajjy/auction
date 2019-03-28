<?php
session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
require('condb.php');
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
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="UTF-8" />
    <title>SimpleAuction - Bidding</title>

    <!-- Include CSS -->
    <link href="./css/reset.css" rel="stylesheet" type="text/css" />
    <link href="./css/style.css" rel="stylesheet" type="text/css" />
    <link href="./css/slimbox2.css" rel="stylesheet" type="text/css" />
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
			}
			else {
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

<!-- START HEADER -->
<div id="header">

	<div class="container">
    
    	<div id="primary-nav" class="header-right">
        
            <ul class="sf-menu">
                <li class="current"><a href="./index.php">Home</a></li>                <li><a href="./ended.php">Ended Auctions</a></li>
                <li><a href="./about.php">About Us</a></li>	
                <?php
				if($_SESSION['cus_id'] != "")
					echo '<li id="member"><a href="./member.php">Member</a></li>';
				
				?>
                
             </ul>
        </div>
        
        <!-- LOGO -->        
    	<a href="./index.php"><img src="./images/logo.png" border="0" alt="Simple Auction" /></a>
        
        <br class="clear" />
 
    </div>
    
</div><!-- END HEADER -->


<!-- HEADER DIVIDER -->
<div id="head-break">
<div class="outer">
<div id="login-reg">
	<?php
				if($_SESSION['cus_id'] == "") {
	?>
	<a id="login" href="#" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('login_button','','images/buttons/login_hover.png',1)"><img src="images/buttons/login.png" name="login_button" width="100" height="34" border="0" id="login_button" /></a>
	<a id="register" href="./register.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('signup_button','','images/buttons/signup_hover.png',1)"><img src="images/buttons/signup.png" name="signup_button" width="100" height="34" border="0" id="signup_button" /></a>
	<?php 
	}
	else {
		$cus_id = $_SESSION['cus_id'];
		$sql = "
		SELECT *
		FROM customer WHERE cus_id = $cus_id";
		$result = mysqli_query($condb, $sql);
		$row = mysqli_fetch_array($result);
		//echo $sql;

	    //print_r($row);
	    //exit;
		echo "<h6>Weclome back , <b>".$row[0]."</b></h6>";
		//echo "<h6>You have : <b><span id='simoleon'>".$row[1]."</span> Simoleons</b> in your account. </h6>";
	?>
    	<a id="logout" href="./logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('logout_button','','images/buttons/logout_hover.png',1)"><img src="images/buttons/logout.png" name="logout_button" width="100" height="34" border="0" id="logout_button" /></a>
    <?php 
		}	
	?>
		
				
</div>
</div>
</div><!-- END HEADER DIVIDER -->


<!-- START MAIN CONTAINER -->
<div class="centerBox">
<div class="container">
	<div id="dialog-login" style="display:none" title="Login Box">
    	<form id="login-form" action="login.php" method="POST">
        <fieldset>
        	<label for="cus_id">cus_id</label><br />
            <input type="text" name="cus_id" id="cus_id" class="text ui-widget-content ui-corner-all" /><br />
            <label for="password">Password</label><br />
            <input type="password" name="password" id="password" class="text ui-widget-content ui-corner-all" />
        </fieldset>
        </form>
    </div>
	<!-- START Auction Item CONTAINER -->
    <h1>Auction Details</h1>
  <div id="itemContain" class="itemContain">
  		
    	<div id="bid_image">
    		 
        	<img src="<?php echo $row_item['product_photo'];?>" width="100%"/>
        	<br/>
        	price : <?php  echo $row_item['product_price']; ?>
            <h4>
            	<?php  echo $row_item['auction_product']; ?>
            	<br/>

            </h4>
        </div>
        
        <div id="bid_history" style="text-align:center"></div>
       
        <div id="bid_box">
         <h5 style="margin:0px;">Current Highest Bidder<br />
         	<span id="highest_bidder" style="color:orange">
         		<?php  echo $row_item['cus_id']; ?>
         		</span></b>
         	</h5>
         <h5 style="margin:0px;color:red">
         	
         	<span id="actual_price">
         		<?php echo $row_item['product_price']; ?>
         			
         		</span></h5>  
        <div id="time_box">
        </div>
        <?php 
		if ($row_item['auction_status'] == 0) {
        echo '<img id="bid" style="margin-top:20px;" src="images/buttons/bid.png" /><br />';
		}

		?>
        <span id="ended" style="display: none;"><img style="margin-top:20px;" src="./images/buttons/ended.png" /><br /></span>
         <?php 
		if ($row_item['auction_status'] == 0) {
			?>
        <b><span id="price_per_bid" style='color: green'>บาท	
        	<?php  echo $row_item['auction_price']; ?></b> per bid</span>
        <?php 
		}
		?>
        </div>
        <div id="bid_description">
        	<h3 style="margin-top: 50px"> Description </h3>
			<?php  echo $row_item['product_detail']; ?>
        </div>
        </div>
    </div>

  <!-- END Auction Item CONTAINER -->
    
    
    
</div><!-- END MAIN CONTAINER -->

 <br class="clear" />
  <br class="clear" />
   <br class="clear" />
</div>

<!-- START FOOTER -->
<div id="footer">

	<div class="container">
    
    	<div id="footer-right">
        
        	Created for CP2013 - Software Engineering Project<br />
            <strong>Team Members</strong><br />
           
            
        </div>
        
        <br class="clear" />
    
  </div>
    
</div><!-- END FOOTER -->
</body>
</html>
<?php 
echo '<hr>';
echo 'total = ';
echo $row_item['product_price_bid'];
echo ' ';
echo  $row_item['auction_price'];
//echo $actual_price;
echo '<hr>';
echo '<pre>';
print_r($row_item );
echo '</pre>';

echo $itemname;


mysqli_close($condb);
?>