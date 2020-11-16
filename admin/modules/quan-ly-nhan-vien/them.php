<form action="modules/quan-ly-nhan-vien/xuly.php" method="post" enctype="multipart/form-data" id="them_nhom">
	<table class="table" >
		<thead>
				<h2 class="text-center">Thêm nhân viên</h2>
		</thead>
		<tbody>
			<tr>
				<td class="col"><label for="nv_ten">Tên</label></td>
				<td class="col"><input type="text" name="nv_ten" class="form-control" id="nv_ten"></td>
				<td><span class="required" >*</span></td>
			</tr>
			<tr>
				<td class="col"><label for="nv_cmnd">Số CMND</label></td>
				<td class="col"><input type="text" name="nv_cmnd" class="form-control" id="nv_cmnd"></td>
				<td><span class="required" >*</span></td>
			</tr>
			<tr>
				<td class="col"><label for="nv_tuoi">Tuổi</label></td>
				<td class="col"><input type="text" name="nv_tuoi" class="form-control" id="nv_tuoi"></td>
				<td><span class="required" >*</span></td>
			</tr>
			<tr>
				<td class="col"><label for="nv_diachi">Địa chỉ</label></td>
				<td class="col"><input type="text" name="nv_diachi" class="form-control" id="nv_diachi"></td>
				<td><span class="required" >*</span></td>
			</tr>
			<tr>
				<td class="col"><label for="nv_sodienthoai">Số điện thoại</label></td>
				<td class="col"><input type="text" name="nv_sodienthoai" class="form-control" id="nv_sodienthoai"></td>	
				<td><span class="required" >*</span></td>
			</tr>
			<tr>
				<td class="col"><label for="nv_gioitinh">Giới tính</label></td>
				<td class="col"><input type="text" name="nv_gioitinh" class="form-control" id="nv_gioitinh"></td>
				<td><span class="required" >*</span></td>
			</tr>
			<tr>
				<td class="col"><label for="cv_maso">Công việc</label></td>
				<td class="col">
					<?php  
						$sql_congviec=mysqli_query($conn,"SELECT * FROM congviec")
					?>
					<select name="cv_maso" id="cv_maso" class="form-control">
						<?php  
							while($row_congviec=mysqli_fetch_array($sql_congviec)){
						?>
						<option value="<?php echo $row_congviec['cv_maso'] ?>"><?php echo $row_congviec['cv_ten'] ?></option>
						<?php  
							}
						?>
					</select>
				</td>
				<td><span class="required" >*</span></td>
			</tr>
			<tr>
				<td class="col"><label for="nv_ghichu">Ghi chú</label></td>
				<td class="col"><textarea  name="nv_ghichu" class="form-control" id="nv_ghichu"></textarea>
			</tr>
			<tr>
				<td class="col" colspan="2" ><button class="btn btn-primary" name="them_nhanvien" type="submit">Thêm nhân viên</button></td>
			</tr>
		</tbody>
	</table>
</form>