<?php  
	$h_maso = $_GET['h_maso'];
	$sql_sua = mysqli_query($conn, "SELECT * FROM hanghoa WHERE h_maso = '$h_maso' ");
	$row_sua = mysqli_fetch_array($sql_sua);
?>
<form action="modules/quan-ly-hang/xuly.php?h_maso=<?php echo $row_sua['h_maso'] ?>" method="post" enctype="multipart/form-data" id="them_hang">
	<table class="table" >
		<thead>
			<h2 class="text-center">Chỉnh sửa sản phẩm </h2>
		</thead>
		<tbody>
			<tr>
				<td></td>
				<td class="col" colspan="2"><input type="hidden" name="h_maso" value="<?php echo $row_sua['h_maso'] ?>"></td>
			</tr>
			<tr>
				<td class="col"colspan="">Tên</td>
				<td class="col"><input type="text" name="h_ten" value="<?php echo $row_sua['h_ten'] ?>"></td>
			</tr>
			<tr>
				<td class="col"colspan="">Giá nhập</td>
				<td class="col"><input type="text" name="h_gianhap" value="<?php echo $row_sua['h_gianhap'] ?>"> đ</td>
			</tr>
			<tr>
				<td class="col"colspan="">Giá bán</td>
				<td class="col"><input type="text" name="h_gia" value="<?php echo $row_sua['h_gia'] ?>"> đ</td>
			</tr>
			<tr>
				<td class="col"colspan="">Hình</td>
				<td class="col"><input type="file" name="h_hinhanh"></td>
			</tr>
			<tr>
				<td class="col"colspan="">Kích cỡ</td>
				<td class="col"><input type="number" name="h_kichco" value="<?php echo $row_sua['h_kichco'] ?>"></td>
			</tr>
			<tr>
				<td class="col"colspan="">Màu</td>
				<td class="col"><input type="text" name="h_mau" value="<?php echo $row_sua['h_mau'] ?>"></td>
			</tr>
			<tr>
				<td class="col"colspan="">Số lượng</td>
				<td class="col"><input type="number" name="h_soluong" value="<?php echo $row_sua['h_soluong'] ?>"></td>
			</tr>
			<tr>
				<td class="col"colspan="">Mô tả</td>
				<td class="col">
					<textarea name="h_mota" cols="40" rows="10" ><?php echo $row_sua['h_mota'] ?></textarea>
				</td>
			</tr>
			<tr>
				<td class="col">Active</td>
				<td class="col"><input type="number" min="0" max="1" name="h_active" value="<?php echo $row_sua['h_active'] ?>"></td>
			</tr>
			<tr>
				<td class="col"colspan="">Mã số nhóm</td>
				<td class="col">
					<select name="nh_maso">
						<?php  
							$hang_nhom=mysqli_query($conn,"SELECT * FROM nhomhang");
							while ($row_hang_nhom=mysqli_fetch_array($hang_nhom)) {
								if($row_sua['nh_maso']==$row_hang_nhom['nh_maso']){
						?>
						<option selected="selected" value="<?php echo $row_hang_nhom['nh_maso'] ?>"><?php echo $row_hang_nhom['nh_ten'] ?></option>
						<?php  
								}else{
						?>
						<option value="<?php echo $row_hang_nhom['nh_maso'] ?>"><?php echo $row_hang_nhom['nh_ten'] ?></option>
						<?php  
								}
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td class="col"colspan="">Mã số khuyến mãi</td>
				<td class="col">
					<?php
					$hang_ct=mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai");
							while ($row_hang_ct=mysqli_fetch_array($hang_ct)) {
					?>
						<input type="radio" style="text-align:left;" name="ct_maso" id="ct_maso" value="<?php echo $row_hang_ct['ct_maso'] ?>"><?php echo $row_hang_ct['ct_ten'] ?><br/>
					<?php  
					}
					?>
					<!-- <select name="ct_maso">
						<?php
							$hang_ct=mysqli_query($conn,"SELECT * FROM chuongtrinhkhuyenmai");
							while ($row_hang_ct=mysqli_fetch_array($hang_ct)) {
						?>

						<option value="<?php echo $row_hang_ct['ct_maso'] ?>"><?php echo $row_hang_ct['ct_ten'] ?></option>
						<?php  
							}
						?>
					</select> -->
				</td>
			</tr>
			<tr>
				<td class="col text-center" colspan="2"><button class="btn btn-primary" name="sua_hang" type="submit">Sửa</button></td>
			</tr>
		</tbody>
	</table>
</form>