<?php
	$_SESSION['cart']="yes";
	$h_maso = $_GET['h_maso'];
	$sql_hang = mysqli_query($conn,"SELECT * FROM hanghoa where h_maso = '".$h_maso."' ");
	$row_hang = mysqli_fetch_assoc($sql_hang);
		$name = $row_hang['h_ten'];
		$h_gia = $row_hang['h_gia'];
		$color = $row_hang['h_mau'];
		$size = $row_hang['h_kichco'];
		$describe = $row_hang['h_mota'];
		$ct_maso = $row_hang['ct_maso'];
		$soluong = $row_hang['h_soluong'];
	
	$sql_ct = mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai where ct_maso = '".$ct_maso."' ");
	$row_ct = mysqli_fetch_array($sql_ct);
		if($row_hang['ct_maso']!=''){
			$today = date("Y/m/d");
			$ct_ngaybd = $row_ct['ct_ngaybatdau'];
			$ct_ngaykt = $row_ct['ct_ngayketthuc'];
			if(strtotime($today)>=strtotime($ct_ngaybd) && strtotime($today)<=strtotime($ct_ngaykt)){
				// phan tram (%) giam gia
				$bonus = $row_ct['ct_giamgia'];
				//gia sau khi khuyen mai
				$price_bonus=$h_gia-($h_gia*$bonus)/100;
			}
			else{
				$price_bonus = $h_gia;
			}
		}else{
			$price_bonus = $h_gia;
		}				
				
?>
<div class="container">
	

<h2 class="text-center" style="width:100%;">Chi tiết sản phẩm</h2>

<div class="detail_product">
	<img src="modules/quan-ly-hang/uploads/<?php echo $row_hang['h_hinhanh'] ?>" alt="<?php echo $row_hang['h_ten'] ?>">
	<div class="infor">
		<div class="name">Giày : <?php echo $name ?></div>
		<div class="price">Giá : 
			<?php 
				echo number_format($price_bonus).' đ' ;
			?>
		</div>
		<div class="color">Màu : <?php echo $color ?></div>
		<div class="size">Size : <?php echo $size ?>
		</div>
		<div class="describe">Mô tả : <?php echo $describe ?></div>
		<form action="" class="themvaogio">
			<input type="hidden" name="quanly" value="gio-hang">
			<input type="number" min="1" max="<?php echo $soluong ?>" value="1" name="quantity" class="quantity" />
			<input type="hidden" value="<?php echo $price_bonus ?>" name='price'>
			<input type="hidden" value="<?php echo $h_maso ?>" name="h_maso">
			<input type="submit" name="add_cart" value="Mua sản phẩm" class="btn btn-primary">
		</form>
		
	</div>

</div>

<!-- Sản phẩm cùng loại -->
<?php
	$nh_maso=$_GET['nh_maso'];
	$sql_sp_cungloai = mysqli_query($conn, "SELECT * FROM hanghoa WHERE nh_maso = '$nh_maso' and hanghoa.h_maso<>$h_maso");
?>
<h2 class="text-center" style="width:100%;">Sản phẩm cùng loại</h2>

<?php  
	while($row_sp_cungloai=mysqli_fetch_array($sql_sp_cungloai)){
		$h_gia_2=$row_sp_cungloai['h_gia'];
?>
	<a href="?quanly=chitiet_giay&h_maso=<?php echo $row_sp_cungloai['h_maso'] ?>&nh_maso=<?php echo $row_sp_cungloai['nh_maso'] ?>" class="product">
	<img src="modules/quan-ly-hang/uploads/<?php echo $row_sp_cungloai['h_hinhanh'] ?>" alt="<?php echo $row_sp_cungloai['h_ten'] ?>">
	<div class="name"><?php echo $row_sp_cungloai['h_ten'] ?></div>
	
		<?php
		$sql_ct_2 = mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai WHERE ct_maso = '$row_sp_cungloai[ct_maso]' ");
		$row_ct_2 = mysqli_fetch_array($sql_ct_2); 
			$bonus_2 = $row_ct_2['ct_giamgia'];
			$ct_ngaybd_2 = $row_ct_2['ct_ngaybatdau'];
			$ct_ngaykt_2 = $row_ct_2['ct_ngayketthuc'];
			$today = date("Y/m/d");
			$price_bonus_2 = $h_gia_2-(($h_gia_2*$bonus_2)/100);


			if($row_sp_cungloai['ct_maso']!=''){
				if(strtotime($today)>=strtotime($ct_ngaybd_2) && strtotime($today)<=strtotime($ct_ngaykt_2)){
					echo '<div class="giamgia">'.$bonus_2.'%</div>';
						echo '<div class="ngaykt">'.'Giảm giá đến hết ' . date('d-m-Y',strtotime($ct_ngaykt_2)).'</div>';
						echo '<div class="price" style="text-decoration: line-through;">'.number_format($h_gia_2). ' đ' .'</div>';
						echo '<div class="price_bonus">'.number_format($price_bonus_2). ' đ' .'</div>';	
				}else{
					$price_bonus = $h_gia_2;
					echo '<div class="price">'.number_format($price_bonus_2). ' đ' .'</div>';
				}
			}else{
				echo '<div class="price">'.number_format($price_bonus_2). ' đ' .'</div>';
			}
		?>
		<div class="size">Size :<?php echo $row_sp_cungloai['h_kichco'] ?></div>	
</a>
<?php  
	}
?>
</div>