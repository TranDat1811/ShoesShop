<?php  
	if(isset($_POST['search_btn'])){
		$search = $_POST['search'];
		$sql_search = mysqli_query($conn, "SELECT * FROM hanghoa WHERE h_ten LIKE '%$search%' ");
	}
?>

<h2 class="text-center" style="width:100%;">KẾT QUẢ TÌM KIẾM</h2>
<?php  
	if($sql_search->num_rows>0){
		while ($row_search =mysqli_fetch_array($sql_search)) {
?>
	<a href="?xem=chitiet_giay&id=<?php echo $row_search['h_maso'] ?>&nh_maso=<?php echo $row_search['nh_maso'] ?>" class="product">
		<img src="admin/modules/quan-ly-hang/uploads/<?php echo $row_search['h_hinhanh'] ?>" alt="<?php echo $row_search['h_ten'] ?>">
		<div class="name"><?php echo $row_search['h_ten'] ?></div>
	<?php  
		$sql = mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai where ct_maso = '".$row_search['ct_maso']."' ");
		$row_ct = mysqli_fetch_array($sql);
	?>
		<?php 
			if($row_search['ct_maso']!=''){
				echo '<div class="price" style="text-decoration: line-through;">'.number_format($row_search['h_gia']). ' đ' .'</div>';
				echo '<div class="price_bonus">'.number_format($row_search['h_gia']-($row_search['h_gia']*$row_ct['ct_giamgia'])/100). ' đ' .'</div>';
			}else{
				echo '<div class="price">'.number_format($row_search['h_gia']). ' đ' .'</div>';
			}
		?>	
		
</a>
<?php  
		}
	}else{
		echo "<h3 class='text-center' style='width:100%;color:red;'>Không tìm thấy sản phẩm nào</h3>";
	}
?>