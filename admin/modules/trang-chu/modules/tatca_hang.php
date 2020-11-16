<?php  
	$giay ="SELECT * FROM hanghoa WHERE h_active='1' and h_soluong>0 ";
	$query_giay = mysqli_query($conn, $giay);

	$ctkm ="SELECT * FROM chuongtrinhkhuyenmai ";
	$query_ctkm = mysqli_query($conn, $ctkm);

	
?>
<div class="container">
	<a class="btn btn-primary cart" href="?quanly=gio-hang" title="Giỏ hàng">Giỏ hàng</a>

	<h2 class="text-center" style="width:100%;font-size: 1.4em;">Sản phẩm</h2>
	<?php  
		while($row_giay=mysqli_fetch_array($query_giay)){
			$h_gia = $row_giay['h_gia'];

		$sql_ct = mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai where ct_maso = '".$row_giay['ct_maso']."' ");
		$row_ct = mysqli_fetch_array($sql_ct);

		$today = date("Y/m/d");
		$ct_ngaybd = $row_ct['ct_ngaybatdau'];
		$ct_ngaykt = $row_ct['ct_ngayketthuc'];
		
	?>
	<a href="?quanly=chitiet_giay&h_maso=<?php echo $row_giay['h_maso'] ?>&nh_maso=<?php echo $row_giay['nh_maso'] ?>" class="product">
		
		<img src="modules/quan-ly-hang/uploads/<?php echo $row_giay['h_hinhanh'] ?>" alt="<?php echo $row_giay['h_ten'] ?>">
		<div class="name"><?php echo substr($row_giay['h_ten'],0,30).'...' ?></div>
			<?php 
				if($row_giay['ct_maso']!=''){
					if(strtotime($today)>=strtotime($ct_ngaybd) && strtotime($today)<=strtotime($ct_ngaykt)){
						// phan tram (%) giam gia
						$bonus = $row_ct['ct_giamgia'];
						//gia sau khi khuyen mai
						$price_bonus=$h_gia-($h_gia*$bonus)/100;
						echo '<div class="giamgia">'.$bonus.'%</div>';
						echo '<div class="ngaykt">'.'Giảm giá đến hết ' . date('d-m-Y',strtotime($ct_ngaykt)).'</div>';
						echo '<div class="price" style="text-decoration: line-through;">'.number_format($h_gia). ' đ' .'</div>';
						echo '<div class="price_bonus">'.number_format($price_bonus). ' đ' .'</div>';
					}
					else{
						$price_bonus = $h_gia;
						echo '<div class="price">'.number_format($price_bonus). ' đ' .'</div>';
					}
				}else{
					$price_bonus = $h_gia;
					echo '<div class="price">'.number_format($price_bonus). ' đ' .'</div>';
				}	
			?>
		<div class="size">Size : <?php echo $row_giay['h_kichco'] ?></div>	
			
		
	</a>
	<?php  
		}
	?>
</div>	