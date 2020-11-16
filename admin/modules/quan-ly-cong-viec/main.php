<?php
	include ('../connect.php'); 
	$congviec = mysqli_query($conn,"SELECT * FROM congviec");
?>
<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='sua'){
			include('modules/quan-ly-cong-viec/sua.php');
		}else{
			include('modules/quan-ly-cong-viec/them.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('modules/quan-ly-cong-viec/lietke.php');
	?>
</div>