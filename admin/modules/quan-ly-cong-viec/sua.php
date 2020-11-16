<?php  
	$cv_maso = $_GET['cv_maso'];
	$sql_sua = mysqli_query($conn, "SELECT * FROM congviec WHERE cv_maso = '$cv_maso' ");
	$row_sua = mysqli_fetch_array($sql_sua);
?>
<form action="modules/quan-ly-cong-viec/xuly.php?cv_maso=<?php echo $row_sua['cv_maso'] ?>" method="post" enctype="multipart/form-data" id="them_nhom">
	<table class="table" >
		<thead>
			<h2 class="text-center">Sửa thông tin công việc</h2>
		</thead>
		<tbody>
			<tr>
				<td class="col">Tên công việc</td>
				<td class="col"><input type="text" name="cv_ten" value="<?php echo $row_sua['cv_ten'] ?>"></td>
			</tr>
			<tr>
				<td class="col">Mức lương</td>
				<td class="col"><input type="number" name="cv_luong" value="<?php echo $row_sua['cv_luong'] ?>"></td>
			</tr>
			<tr>
				<td class="col text-center" colspan="2" ><button class="btn btn-primary" name="sua_congviec" type="submit">Sửa</button></td>
			</tr>
		</tbody>

	</table>
</form>