<h2 class="text-center" style="color:red">Danh sách nhóm</h2>
<table class="table" id="lietke_nhom">
	<thead>
		<tr>
			<th class="col">Mã số nhóm</th>
			<th class="col">Tên nhóm</th>
			<th class="col" colspan="2">Thao tác</th>

		</tr>
	</thead>
	<tbody>
		<?php  
			while($row=mysqli_fetch_array($nhom_hang)){
		?>
		<tr>
			<td class="col"><?php echo $row['nh_maso'] ?></td>
			<td class="col"><?php echo $row['nh_ten'] ?></td>
			<td class="col"><a href="?quanly=quan-ly-nhom-hang&ac=sua&nh_maso=<?php echo $row['nh_maso'] ?>" class="btn btn-warning">Sửa</a></td>
			<td class="col"><a href="modules/quan-ly-nhom-hang/xuly.php?nh_maso=<?php echo $row['nh_maso'] ?>" class="btn btn-danger" onclick = "return confirm('Bạn có chắc không ?');">&times;</a></td>
		</tr>
		<?php  
			}
		?>
	</tbody>
</table>