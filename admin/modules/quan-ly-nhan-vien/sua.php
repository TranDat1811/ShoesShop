<?php
	$nv_maso = $_GET['nv_maso'];
	$sql_sua = mysqli_query($conn, "SELECT * FROM nhanvien WHERE nv_maso = '$nv_maso' ");
	$row_sua = mysqli_fetch_array($sql_sua);

	// Validate
	
?>
<form action="modules/quan-ly-nhan-vien/xuly.php?nv_maso=<?php echo $row_sua['nv_maso']; ?>" method="post" enctype="multipart/form-data" id="them_nhom">
	<table class="table" >
		<thead>
				<h2 class="text-center">Sửa thông tin nhân viên</h2>
		</thead>
		<tbody>
			<tr>
				<td class="col">Tên</td>
				<td class="col"><input type="text" name="nv_ten" value="<?php echo $row_sua['nv_ten'] ?>"></td>
				<td><span class="required" >*</span></td>

			</tr>
			<tr>
				<td class="col">Số CMND</td>
				<td class="col"><input type="text" id="nv_cmnd" name="nv_cmnd" value="<?php echo $row_sua['nv_cmnd'] ?>"></td>
				<td><span class="required" >*</span></td>
				
			</tr>
			<tr>
				<td class="col">Tuổi</td>
				<td class="col"><input type="text" name="nv_tuoi" value="<?php echo $row_sua['nv_tuoi'] ?>"></td>
				<td><span class="required" >*</span></td>

			</tr>
			<tr>
				<td class="col">Địa chỉ</td>
				<td class="col"><input type="text" name="nv_diachi" value="<?php echo $row_sua['nv_diachi'] ?>"></td>
				<td><span class="required" >*</span></td>

			</tr>
			<tr>
				<td class="col">Số điện thoại</td>
				<td class="col"><input type="number" name="nv_sodienthoai" value="<?php echo $row_sua['nv_sodienthoai'] ?>"></td>	
				<td><span class="required" >*</span></td>

			</tr>
			<tr>
				<td class="col">Giới tính</td>
				<td class="col"><input type="text" name="nv_gioitinh" value="<?php echo $row_sua['nv_gioitinh'] ?>"></td>
				<td><span class="required" >*</span></td>

			</tr>
			<tr>
				<td class="col">Công việc</td>
				<td class="col">
					<select name="cv_maso">
						<?php  
							$sql_congviec=mysqli_query($conn,"SELECT * FROM congviec");
							while ($row_congviec=mysqli_fetch_array($sql_congviec)) {
								if($row_sua['cv_maso']==$row_congviec['cv_maso']){
						?>
						<option selected="selected" value="<?php echo $row_congviec['cv_maso'] ?>"><?php echo $row_congviec['cv_ten'] ?></option>
						<?php  
								}else{
						?>
						<option value="<?php echo $row_congviec['cv_maso'] ?>"><?php echo $row_congviec['cv_ten'] ?></option>
						<?php  
								}
							}
						?>
					</select>
				</td>
				<td><span class="required" >*</span></td>
				
			</tr>
			<tr>
				<td class="col">Ghi chú</td>
				<td class="col"><textarea  name="nv_ghichu" class="form-control" id="nv_ghichu"></textarea>
			</tr>
			<tr>
				<td class="col" colspan="2" ><button class="btn btn-primary" name="sua_nhanvien" type="submit" >Sửa</button></td>
			</tr>
		</tbody>
	</table>
</form>