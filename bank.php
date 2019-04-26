<?php
session_start();
require('condb.php');
include('header.php');
include('menu.php');
include('banner.php');
?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h2>::การชำระเงิน:: </h2>
			<?php
			$query = "SELECT * FROM account" or die("Error:" . mysqli_error());
			$result = mysqli_query($condb, $query);
			echo "<table id='example' class='display table table-bordered table-hover'>";
				//หัวข้อตาราง
				echo "
				<thead>
					<tr align='center' class='danger'>
						<th width='5%'>รหัส</th>
						<th width='20%'>ชื่อบัญชี</th>
						<th width='20%'>เลขบัญชี</th>
						<th width='20%'>ประเภทบัญชี</th>
						<th width='20%'>ชื่อธนาคาร</th>
					</tr>
				</thead>";
				while($row = mysqli_fetch_array($result)) {
				echo "<tr>";
					echo "<td align='center'>" .$row["account_id"] .'.'  ."</td> ";
					echo "<td>" .$row["account_name"] .  "</td> ";
					echo "<td>" .$row["account_number"] .  "</td> ";
					echo "<td>" .$row["account_type"] .  "</td> ";
					echo "<td>" .$row["bank_name"] .  "</td> ";
				echo "</tr>";
				//$i++;
				}
			echo "</table>";
			//5. close connection
			mysqli_close($condb);
			?>
		</div>
	</div>
</div>
<?php
//include('list_prd.php');
include('footer.php');
?>