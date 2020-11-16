<?php
	include ('connect.php');
	$nh_maso=$_GET['nh_maso'];
	$sql_hang=mysqli_query($conn,"SELECT * FROM hanghoa WHERE nh_maso='".$nh_maso."' ");

	$sql_nh=mysqli_query($conn,"SELECT * FROM nhomhang WHERE nh_maso='".$nh_maso."' ");
	$row_nh = mysqli_fetch_array($sql_nh);
?>

<h2 class="text-center" style="width:100%;">Nhóm <?php echo $row_nh['nh_ten'] ?></h2>
<?php  
	while($row_hang=mysqli_fetch_array($sql_hang)){
		$h_gia = $row_hang['h_gia'];
?>
	<a href="?xem=chitiet_giay&id=<?php echo $row_hang['h_maso'] ?>&nh_maso=<?php echo $row_hang['nh_maso'] ?>" class="product">
	<img src="admin/modules/quan-ly-hang/uploads/<?php echo $row_hang['h_hinhanh'] ?>" alt="<?php echo $row_hang['h_ten'] ?>">
	<div class="name"><?php echo $row_hang['h_ten'] ?></div>
	<?php  
		$sql_ct = mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai where ct_maso = '".$row_hang['ct_maso']."' ");
		$row_ct = mysqli_fetch_array($sql_ct);
			$today = date("Y/m/d");
			$ct_ngaybd = $row_ct['ct_ngaybatdau'];
			$ct_ngaykt = $row_ct['ct_ngayketthuc'];
	?>
		<?php 
			if($row_hang['ct_maso']!=''){
				if(strtotime($today)>=strtotime($ct_ngaybd) && strtotime($today)<=strtotime($ct_ngaykt)){
					$bonus = $row_ct['ct_giamgia'];
							//gia sau khi khuyen mai
							$price_bonus=$h_gia-($h_gia*$bonus)/100;
							echo '<div class="giamgia">'.$bonus.'%</div>';
							echo '<div class="ngaykt">'.'Giảm giá đến hết ' . date('d-m-Y',strtotime($ct_ngaykt)).'</div>';
							echo '<div class="price" style="text-decoration: line-through;">'.number_format($h_gia). ' đ' .'</div>';
							echo '<div class="price_bonus">'.number_format($price_bonus). ' đ' .'</div>';
					}
					else
					{
							$price_bonus = $h_gia;
							echo '<div class="price">'.number_format($price_bonus). ' đ' .'</div>';
					}
			}else{
				echo '<div class="price">'.number_format($row_hang['h_gia']). ' đ' .'</div>';
			}
		?>
		<div class="size">Size : <?php echo $row_hang['h_kichco'] ?></div>
</a>
<?php  
	}
?>

