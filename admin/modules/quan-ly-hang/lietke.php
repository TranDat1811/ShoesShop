
<h2 class="text-center">Danh sách sản phẩm</h2>
<table class="table" id="lietke_hang" st>
	<thead>
		<tr>
			<th class="col">Mã số</th>
			<th class="col">Tên</th>
			<th class="col">Giá Nhập</th>
			<th class="col">Giá Bán</th>
			<th class="col">Hình ảnh</th>
			<th class="col">Kích cỡ</th>
			<th class="col">Màu</th>
			<th class="col">Số lượng</th>
			<th class="col">Mô tả</th>
			<th class="col">Active</th>
			<th class="col">Mã số nhóm</th>
			<th class="col">Mã số khuyến mãi</th>
			<th class="col" colspan="2">Thao tác</th>
		</tr>
	</thead>
	<tbody>
		<?php
			while($row=mysqli_fetch_array($hang)){
		?>
		<tr>
			<td class="col"><?php echo $row['h_maso'] ?></td>
			<td class="col"><?php echo $row['h_ten'] ?></td>
			<td class="col"><?php echo $row['h_gianhap'].' đ' ?></td>
			<td class="col"><?php echo $row['h_gia'].' đ' ?></td>
			<td class="col"><img src="modules/quan-ly-hang/uploads/<?php echo $row['h_hinhanh'] ?>" alt="<?php echo $row['h_ten'] ?>" style="width:100px;height:100px;"></td>
			<td class="col"><?php echo $row['h_kichco'] ?></td>
			<td class="col"><?php echo $row['h_mau'] ?></td>
			<td class="col"><?php echo $row['h_soluong'] ?></td>
			<td class="col"><?php echo $row['h_mota'] ?></td>
			<td class="col"><?php echo $row['h_active'] ?></td>
			<td class="col"><?php echo $row['nh_maso'] ?></td>
			<td class="col"><?php echo $row['ct_maso'] ?></td>
			<td class="col"><a href="?quanly=quan-ly-hang&ac=sua&h_maso=<?php echo $row['h_maso'] ?>" class="btn btn-warning">Sửa</a></td>
			<td class="col"><a href="modules/quan-ly-hang/xuly.php?h_maso=<?php echo $row['h_maso'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá sản phẩm ?');">&times;</a></td>
		</tr>
		<?php  
			}
		?>
	</tbody>
</table>
