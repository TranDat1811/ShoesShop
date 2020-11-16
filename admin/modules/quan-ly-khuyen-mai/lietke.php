<h2 class="text-center" style="color:red">Chương trình khuyến mãi</h2>
<table class="table" id="lietke_nhom">
	<thead>
		<tr>
			<th class="col">Mã số chương trình</th>
			<th class="col">Tên chương trình</th>
			<th class="col">Giảm giá</th>
			<th class="col">Ngày bắt đầu</th>
			<th class="col">Ngày kết thúc</th>
			<th class="col" colspan="2">Thao tác</th>

		</tr>
	</thead>
	<tbody>
		<?php  
			while($row=mysqli_fetch_array($chuongtrinhkhuyenmai)){
		?>
		<tr>
			<td class="col"><?php echo $row['ct_maso'] ?></td>
			<td class="col"><?php echo $row['ct_ten'] ?></td>
			<td class="col"><?php echo $row['ct_giamgia'] ?></td>
			<td class="col"><?php echo $row['ct_ngaybatdau'] ?></td>
			<td class="col"><?php echo $row['ct_ngayketthuc'] ?></td>
			<td class="col"><a href="?quanly=quan-ly-khuyen-mai&ac=sua&ct_maso=<?php echo $row['ct_maso'] ?>" class="btn btn-warning">Sửa</a></td>
			<td class="col"><a href="modules/quan-ly-khuyen-mai/xuly.php?ct_maso=<?php echo $row['ct_maso'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc không ?');">&times;</a></td>
		</tr>
		<?php  
			}
		?>
	</tbody>
</table>