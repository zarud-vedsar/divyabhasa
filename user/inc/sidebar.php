<?php
$userid = $_SESSION['user_id'];
$user = runFatch("SELECT * FROM tbl_users WHERE id = '{$userid}'");
// $currentBatch = runFatch("SELECT * FROM zarud_batch WHERE userid = {$userid} AND status = 0");
$today = date('Y-m-d');
$endDate = $user[0]['endDate'];

// if (!empty($endDate) && $endDate != '0000-00-00') {
//     if ($endDate < $today) { // Checks if the endDate is before today
//         $duration = $user[0]['duration'];
//         $amount = $user[0]['amount'];
//         $activateDate = $user[0]['activateDate'];
//         // Insert into plan history
//         $response = runInsert("INSERT INTO zarud_plan_history (userid, amount, duration, activateDate, endDate, expireAt) 
//         VALUES ('$userid', '$amount', '$duration', '$activateDate', '$endDate', '$today')");

//         // Update user's membership status
//         $response = runUpdate("UPDATE tbl_users SET membership = 0, amount = '', duration = 0, activateDate = '', endDate = '' WHERE id = '$userid'");
//     }
// }
// if($currentBatch){
// 	$batchId = $currentBatch[0]['id'];
// 	$classid = $currentBatch[0]['classid'];
// 	$check = runFatch("SELECT id, end_date FROM tbl_class WHERE id = '{$classid}'");
// 	if($check){
// 		$endDate = $check[0]['end_date'];
// 		if ($endDate < $today) { 
// 			$response = runUpdate("UPDATE zarud_batch SET status = 1 WHERE id = $batchId");
// 		}
// 	}
// }
?>
<style>
	#sidebar-menu ul li a{
		font-size: 14px;
	}
</style>
<!-- Sidebar -->
<div class="sidebar" id="sidebar">
	<div class="sidebar-inner slimscroll">
		<div id="sidebar-menu" class="sidebar-menu">
			<ul>
				<li><a href="./index.php"><i class="feather-grid"></i> <span> Dashboard</span> </a></li>
				<li><a href="./classes.php"><i class="feather-grid"></i> <span> Batches</span> </a></li>
				<li><a href="./zarud-learning.php"><i class="feather-grid"></i> <span> My Learning</span> </a></li>
				<!-- <li><a href="./zarud-previous.php"><i class="feather-grid"></i> <span> My Previous Batches</span> </a></li> -->
				<li><a href="./mem-zarud-history.php"><i class="feather-grid"></i> <span> Batch Purchase History</span> </a></li>
			</ul>
		</div>
	</div>
</div>
<!-- /Sidebar -->