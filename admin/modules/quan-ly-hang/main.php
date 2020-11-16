<?php
	include ('../connect.php'); 
	$hang = mysqli_query($conn,"SELECT * FROM hanghoa");
?>
<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='sua'){
			include('modules/quan-ly-hang/sua.php');
		}else{
			include('modules/quan-ly-hang/them.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('modules/quan-ly-hang/lietke.php');
	?>
</div>