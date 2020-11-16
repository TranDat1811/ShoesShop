<section>
	<div class="content">	
<?php
	if(isset($_GET['xem']))
	{
		$temp=$_GET['xem'];
	}else
	{
		$temp='';
	}
	if($temp=='chitiet_giay')
	{
		include 'modules/chitiet_giay.php';
	}
	elseif($temp=='nhomhang')
	{
		include 'modules/nhomhang.php';	
	}
	elseif($temp=='nhacungcap')
	{
		include 'modules/nhacungcap.php';	
	}
	elseif(isset($_POST['search_btn'])){
		include 'modules/timkiem.php';	
	}
	else
	{
		include 'modules/tatca_hang.php';
	}
?>
	</div>
</section>