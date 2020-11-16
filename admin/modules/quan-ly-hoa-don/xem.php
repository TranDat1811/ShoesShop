<?php  
	$hd_maso = $_GET['hd_maso'];
	$chitiet_hd = mysqli_query($conn, "SELECT * FROM chitiet_hd WHERE hd_maso = '".$hd_maso."' ");
?>
<table id="them_nhom" class='table'>
<h2 class="" style="color: red;">Chi tiết hoá đơn số <?php echo $hd_maso; ?></h2>
	<tr>
		<th>STT</th>
		<th>Tên sản phẩm</th>
		<th>Kích cỡ</th>
		<th>Số lượng</th>
		<th>Giá</th>
		<!-- <th>Giá gốc</th>
		<th>Tiền lời</th> -->
	</tr>
	<?php  
		$i = 0;
		while ($row_chitiet_hd=mysqli_fetch_array($chitiet_hd)){
			$h_maso = $row_chitiet_hd['h_maso'];
			$hang = mysqli_query($conn, "SELECT * FROM hanghoa WHERE h_maso = '".$h_maso."' ");
				$row_hang = mysqli_fetch_array($hang);
				$h_ten = $row_hang['h_ten'];
				$h_kichco = $row_hang['h_kichco'];
				$h_gia = $row_hang['h_gia'];
				$h_gianhap = $row_hang['h_gianhap'];
			

		$i++;
	?>
	<tr>
		<td><?php echo $i ?></td>
		<td><?php echo $h_ten ?></td>
		<td><?php echo $h_kichco ?></td>
		<td><?php echo $row_chitiet_hd['cthd_soluong']; ?></td>
		<td><?php echo number_format($row_chitiet_hd['cthd_gia']).' đ' ?></td>
		<!-- <td><?php echo number_format($h_gianhap*$row_chitiet_hd['cthd_soluong']).' đ' ?></td>
		<td><?php echo number_format($row_chitiet_hd['cthd_gia']-($h_gianhap*$row_chitiet_hd['cthd_soluong'])).' đ' ?></td> -->
	</tr>
	<?php  
	
		}
		
	?>
</table>