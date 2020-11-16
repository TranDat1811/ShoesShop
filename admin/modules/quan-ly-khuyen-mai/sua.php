<?php  
	$ct_maso = $_GET['ct_maso'];
	$sql_sua = mysqli_query($conn, "SELECT * FROM chuongtrinhkhuyenmai WHERE ct_maso = '$ct_maso' ");
	$row_sua = mysqli_fetch_array($sql_sua);
?>
<form action="modules/quan-ly-khuyen-mai/xuly.php?ct_maso=<?php echo $row_sua['ct_maso'] ?>" method="post" enctype="multipart/form-data" id="them_nhom">
	<table class="table" >
		<thead>
			<h3 class="text-center">Sửa chương trình khuyến mãi</h3>
		</thead>
		<tbody>
			<tr>
				<td class="col"><input type="hidden" name="ct_maso" value="<?php echo $row_sua['ct_maso'] ?>"></td>
				<td></td>
			</tr>
			<tr>
				<td>Tên chương trình</td>
				<td class="col"><input type="text" name="ct_ten" value="<?php echo $row_sua['ct_ten'] ?>"></td>				
			</tr>	
			<tr>
				<td>Giảm giá</td>
				<td class="col"><input type="text" name="ct_giamgia" value="<?php echo $row_sua['ct_giamgia'] ?>"> %</td>				
			</tr>		
			<tr>
				<td>Ngày bắt đầu</td>
				<td class="col"><input type="date" name="ct_ngaybatdau" value="<?php echo $row_sua['ct_ngaybatdau'] ?>"></td>				
			</tr>
			<tr>
				<td>Ngày kết thúc</td>
				<td class="col"><input type="date" name="ct_ngayketthuc" value="<?php echo $row_sua['ct_ngayketthuc'] ?>"></td>				
			</tr>
			<tr>
				<td class="col" colspan="2" ><button class="btn btn-primary" name="sua_ct" type="submit">Sửa</button></td>
			</tr>
		</tbody>

	</table>
</form>