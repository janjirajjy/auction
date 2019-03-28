<?php
include('header.php');
include('menu.php');
//include('banner.php');
//include('banner.php');
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<b> เกี่ยวกับร้านค้า </b>
				</div>
			</div>
			<img src="img/sild.jpg" width="100%">
			<br><br>
			<b> รายการชนะประมูล </b>
			 <?php 
			 if($m_id!=''){
			 	 include('win_list_m.php');
			 }else{
			 	echo  '<p align="center"> -ต้อง Login เท่านั้น </p>';
			 }
			 ?>
		</div>
	</div>
</div>
<?php
//include('list_prd.php');
include('footer.php');
?>