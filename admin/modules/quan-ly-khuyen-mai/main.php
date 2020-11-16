<?php
	include ('../connect.php'); 
	$chuongtrinhkhuyenmai = mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai");
?>
<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='sua'){
			include('modules/quan-ly-khuyen-mai/sua.php');
		}else{
			include('modules/quan-ly-khuyen-mai/them.php');
		}
	?>
</div>

<div class="right">
	<?php
		include('modules/quan-ly-khuyen-mai/lietke.php');
	?>
</div>