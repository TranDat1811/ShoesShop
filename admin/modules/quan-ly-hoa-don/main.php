<?php
	include ('../connect.php'); 
	$hoadon = mysqli_query($conn,"SELECT * FROM hoadon1");
?>
<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='xem'){
			include('modules/quan-ly-hoa-don/xem.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('modules/quan-ly-hoa-don/lietke.php');
	?>
</div>