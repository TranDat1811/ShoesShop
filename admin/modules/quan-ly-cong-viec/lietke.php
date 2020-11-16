<h2 class="text-center" style="color:red">Danh sách công việc</h2>
<table class="table" id="lietke_nhom">
	<thead>
		<tr>
			<th class="col">Mã số công việc</th>
			<th class="col">Tên công việc</th>
			<th class="col">Mức lương</th>
			<th class="col" colspan="2">Thao tác</th>

		</tr>
	</thead>
	<tbody>
		<?php  
			while($row=mysqli_fetch_array($congviec)){
		?>
		<tr>
			<td class="col"><?php echo $row['cv_maso'] ?></td>
			<td class="col"><?php echo $row['cv_ten'] ?></td>
			<td class="col"><?php echo number_format($row['cv_luong']).' đ' ?></td>
			<td class="col"><a href="?quanly=quan-ly-cong-viec&ac=sua&cv_maso=<?php echo $row['cv_maso'] ?>" class="btn btn-warning">Sửa</a></td>
			<td class="col"><a href="modules/quan-ly-cong-viec/xuly.php?cv_maso=<?php echo $row['cv_maso'] ?>" class="btn btn-danger"  onclick="return confirm('Bạn có chắc không ?');">&times;</a></td>
		</tr>
		<?php  
			}
		?>
	</tbody>
</table>