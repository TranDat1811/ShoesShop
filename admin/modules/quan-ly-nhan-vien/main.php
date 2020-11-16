<?php
	include ('../connect.php'); 
	$nhanvien = mysqli_query($conn,"SELECT * FROM nhanvien");
?>
<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='sua'){
			include('modules/quan-ly-nhan-vien/sua.php');
		}else{
			include('modules/quan-ly-nhan-vien/them.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('modules/quan-ly-nhan-vien/lietke.php');
	?>
</div>