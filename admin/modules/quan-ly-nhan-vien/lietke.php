<h2 class="text-center" style="color:red">Danh sách nhân viên</h2>
<table class="table" id="lietke_nhom">
	<thead>
		<tr>
			<th class="col">Mã số nhân viên</th>
			<th class="col">Tên</th>
			<th class="col">Số CMND</th>
			<th class="col">Tuổi</th>
			<th class="col">Địa chỉ</th>
			<th class="col">Số điện thoại</th>
			<th class="col">Giới tính</th>
			<th class="col">Mã số công việc</th>
			<th class="col">Ghi chú</th>
			<th class="col" colspan="2">Thao tác</th>

		</tr>
	</thead>
	<tbody>
		<?php  
			while($row=mysqli_fetch_array($nhanvien)){
		?>
		<tr>
			<td class="col"><?php echo $row['nv_maso'] ?></td>
			<td class="col"><?php echo $row['nv_ten'] ?></td>
			<td class="col"><?php echo $row['nv_cmnd'] ?></td>
			<td class="col"><?php echo $row['nv_tuoi'] ?></td>
			<td class="col"><?php echo $row['nv_diachi'] ?></td>
			<td class="col"><?php echo $row['nv_sodienthoai'] ?></td>
			<td class="col"><?php echo $row['nv_gioitinh'] ?></td>
			<td class="col">
				<?php 
					$sql_cv = mysqli_query($conn, "SELECT cv_ten FROM congviec WHERE cv_maso = '".$row['cv_maso']."' ");
					$row_cv = mysqli_fetch_array($sql_cv);
					echo $row_cv['cv_ten'];
				?>
					
			</td>			
			<td class="col"><?php echo $row['nv_ghichu'] ?></td>
			<td class="col"><a href="?quanly=quan-ly-nhan-vien&ac=sua&nv_maso=<?php echo $row['nv_maso'] ?>" class="btn btn-warning">Sửa</a></td>
			<td class="col"><a href="modules/quan-ly-nhan-vien/xuly.php?nv_maso=<?php echo $row['nv_maso'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xoá nhân viên ?');">&times;</a></td>
		</tr>
		<?php  
			}
		?>
	</tbody>
</table>