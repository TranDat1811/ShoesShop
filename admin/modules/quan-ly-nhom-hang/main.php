<?php
	include ('../connect.php'); 
	$nhom_hang = mysqli_query($conn,"SELECT * FROM nhomhang");
?>
<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='sua'){
			include('modules/quan-ly-nhom-hang/sua.php');
		}else{
			include('modules/quan-ly-nhom-hang/them.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('modules/quan-ly-nhom-hang/lietke.php');
	?>
</div>