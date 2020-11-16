<div class="content">
	
	<?php  
		if (isset($_GET['quanly']))
		{
			$temp = $_GET['quanly'];
		}
		else
		{
			$temp='';
		}
		if($temp=='quan-ly-nhom-hang')
		{
			include ("modules/quan-ly-nhom-hang/main.php");
		}
		elseif($temp=='quan-ly-hang')
		{
			include ("modules/quan-ly-hang/main.php");
		}
		elseif($temp=='quan-ly-khuyen-mai')
		{
			include ("modules/quan-ly-khuyen-mai/main.php");
		}
		elseif($temp=='quan-ly-nhan-vien')
		{
			include ("modules/quan-ly-nhan-vien/main.php");
		}
		elseif($temp=='quan-ly-cong-viec')
		{
			include ("modules/quan-ly-cong-viec/main.php");
		}
		elseif($temp=='quan-ly-hoa-don')
		{
			include ("modules/quan-ly-hoa-don/main.php");
		}
		elseif($temp=='trang-chu'){
			include("modules/trang-chu/modules/tatca_hang.php");
		}
		elseif($temp=='chitiet_giay'){
			include("modules/trang-chu/modules/chitiet_giay.php");
		}
		elseif($temp=='gio-hang'){
			include("modules/gio-hang/cart.php");
		}
		elseif($temp=='quan-ly-thong-ke'){
			include("modules/quan-ly-thong-ke/main.php");
		}
		else{
			echo "<h2 style='color:red;' class='text-center' >Welcome Adminator Page</h2>";
		}
		
		
		
	?>
</div>