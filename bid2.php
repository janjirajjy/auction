<?php
session_start();
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
require('condb.php');
include('header.php');
include('menu.php');
//include('banner.php');
//include('banner.php');
/*
<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/slimbox2.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Oswald|Droid+Sans:400,700' rel='stylesheet' type='text/css' />
<link href="css/start/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
*/
?>
<!-- Include Scripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.lite.min.js"></script>
<script type="text/javascript" src="js/jquery.pngFix.pack.js"></script>
<script type="text/javascript" src="js/jquery.color.js"></script>
<script type="text/javascript" src="js/hoverIntent.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/slimbox2.js"></script>
<script type="text/javascript" src="js/slides.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript">
	setInterval("item_display()", 2000);
	function item_display() {
		$("#itemContain").load("item_display2.php");
	}
	
$(document).ready(function() {
			$("#dialog-login").dialog("destroy");
			$("#login").click(function(){
				$("#dialog-login").dialog({
					height: 200,
					width: 200,
					modal: true,
					buttons: {
						"Sign In": function() {
							$("#login-form").submit();
						},
						"Cancel": function() {
							$(this).dialog("close");
						}
					}
				});
				return false;
			});
			item_display();
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
		<!-- START MAIN CONTAINER -->
		<div class="centerBox">
			<div class="container">
				<div id="dialog-login" style="display:none" title="Login Box">
					<form id="login-form" action="login.php" method="POST">
						<fieldset>
							<label for="username">Username</label><br />
							<input type="text" name="username" id="username" class="text ui-widget-content ui-corner-all" /><br />
							<label for="password">Password</label><br />
							<input type="password" name="password" id="password" class="text ui-widget-content ui-corner-all" />
						</fieldset>
					</form>
				</div>
				<!-- START Auction Item CONTAINER -->
				<h1>Live Auctions</h1>
				<div class="container">
					<div class="row">
				<div id="itemContain" class="itemContain">
				</div>
			</div>
			</div>
				<!-- END Auction Item CONTAINER -->
				
				
				
				</div><!-- END MAIN CONTAINER -->
				<br class="clear" />
				<br class="clear" />
				<br class="clear" />
			</div>
			<?php
			//include('list_prd.php');
			include('footer.php');
			?>