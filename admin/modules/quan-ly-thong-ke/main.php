<?php
	include ('../connect.php'); 
	// $hoadon = mysqli_query($conn,"SELECT * FROM hoadon1");
	$hoadon = mysqli_query($conn,"SELECT * FROM hoadon1");
?>
<!-- <div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='sua'){
			include('modules/quan-ly-thong-ke/sua.php');
		}else{
			include('modules/quan-ly-thong-ke/them.php');
		}
	?>
</div> -->

<div class="right">
	<?php
		include('modules/quan-ly-thong-ke/lietke.php');
	?>
</div>