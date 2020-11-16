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
?>
	<a href="?xem=chitiet_giay&id=<?php echo $row_hang['h_maso'] ?>&nh_maso=<?php echo $row_hang['nh_maso'] ?>" class="product">
	<img src="admin/modules/quan-ly-hang/uploads/<?php echo $row_hang['h_hinhanh'] ?>" alt="<?php echo $row_hang['h_ten'] ?>">
	<div class="name"><?php echo $row_hang['h_ten'] ?></div>
	<?php  
		$sql_ct = mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai where ct_maso = '".$row_hang['ct_maso']."' ");
		$row_ct = mysqli_fetch_array($sql_ct);
	?>
	
	
		<?php 
			if($row_hang['ct_maso']!=''){
				echo '<div class="price" style="text-decoration: line-through;">'.number_format($row_hang['h_gia']). ' đ' .'</div>';
				echo '<div class="price_bonus">'.number_format($row_hang['h_gia']-($row_hang['h_gia']*$row_ct['ct_giamgia'])/100). ' đ' .'</div>';
			}else{
				echo '<div class="price">'.number_format($row_hang['h_gia']). ' đ' .'</div>';
			}
		?>
</a>
<?php  
	}
?>

