<?php
	$h_maso = $_GET['id'];
	$sql_hang = mysqli_query($conn,"SELECT * FROM hanghoa where h_maso = '".$h_maso."' ");
	$row_hang = mysqli_fetch_assoc($sql_hang);
		$name = $row_hang['h_ten'];
		$price = $row_hang['h_gia'];
		$color = $row_hang['h_mau'];
		$size = $row_hang['h_kichco'];
		$describe = $row_hang['h_mota'];
		$ct_maso = $row_hang['ct_maso'];
	
	$sql_ct = mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai where ct_maso = '".$ct_maso."' ");
	$row_ct = mysqli_fetch_array($sql_ct);

		$today = date("Y/m/d");
		$ct_ngaybd = $row_ct['ct_ngaybatdau'];
		$ct_ngaykt = $row_ct['ct_ngayketthuc'];
		// phan tram (%) giam gia
		$bonus = $row_ct['ct_giamgia'];
		//gia sau khi khuyen mai
		$price_bonus=$price-($price*$bonus)/100;
?>
<h2 class="text-center" style="width:100%;">Chi tiết sản phẩm</h2>

<div class="detail_product">
	<img src="admin/modules/quan-ly-hang/uploads/<?php echo $row_hang['h_hinhanh'] ?>" alt="<?php echo $row_hang['h_ten'] ?>">
	<div class="infor">
		<div class="name">Giày : <?php echo $name ?></div>
		<div class="price">Giá : 
			<?php 
				if($ct_maso!=''){
					if(strtotime($today)>=strtotime($ct_ngaybd) && strtotime($today)<=strtotime($ct_ngaykt)){
						echo number_format($price_bonus).' đ' ;
						
					}else{
						echo number_format($price).' đ' ;
					}
				}else{
					echo number_format($price).' đ' ;
				}
			?>
		</div>
		<div class="color">Màu : <?php echo $color ?></div>
		<div class="size">Size : <?php echo $size ?>
		</div>
		<div class="describe">Mô tả : <?php echo $describe ?></div>
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
?>
	<a href="?xem=chitiet_giay&id=<?php echo $row_sp_cungloai['h_maso'] ?>&nh_maso=<?php echo $row_sp_cungloai['nh_maso'] ?>" class="product">
		<img src="admin/modules/quan-ly-hang/uploads/<?php echo $row_sp_cungloai['h_hinhanh'] ?>" alt="<?php echo $row_sp_cungloai['h_ten'] ?>">
		<div class="name"><?php echo $row_sp_cungloai['h_ten'] ?></div>
		<?php
		$sql_ct_2 = mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai WHERE ct_maso = '$row_sp_cungloai[ct_maso]' ");
		$row_ct_2 = mysqli_fetch_array($sql_ct_2);
			$today = date("Y/m/d");
			$ct_ngaybd_2 = $row_ct_2['ct_ngaybatdau'];
			$ct_ngaykt_2 = $row_ct_2['ct_ngayketthuc'];
			$bonus = $row_ct_2['ct_giamgia'];
			if($row_sp_cungloai['ct_maso']!=''){
				if(strtotime($today)>=strtotime($ct_ngaybd_2) && strtotime($today)<=strtotime($ct_ngaykt_2)){
					echo '<div class="giamgia">'.$bonus.'%</div>';
					echo '<div class="ngaykt">'.'Giảm giá đến hết ' . date('d-m-Y',strtotime($ct_ngaykt)).'</div>';
					echo '<div class="price" style="text-decoration: line-through;">'.number_format($row_sp_cungloai['h_gia']). ' đ' .'</del></div>';
					echo '<div class="price_bonus">'.number_format($row_sp_cungloai['h_gia']-($row_sp_cungloai['h_gia']*$row_ct_2['ct_giamgia'])/100). ' đ' .'</div>';
				}else{
					echo '<div class="price">'.number_format($row_sp_cungloai['h_gia']). ' đ' .'</div>';
				}
			}else{
				echo '<div class="price">'.number_format($row_sp_cungloai['h_gia']). ' đ' .'</div>';
			}
		?>
	<div class="size">Size : <?php echo $row_sp_cungloai['h_kichco'] ;?></div>	
</a>
<?php  
	}
?>