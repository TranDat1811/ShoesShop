<?php  
	$nh_maso = $_GET['nh_maso'];
	$sql_sua = mysqli_query($conn, "SELECT * FROM nhomhang WHERE nh_maso = '$nh_maso' ");
	$row_sua = mysqli_fetch_array($sql_sua);
?>
<form action="modules/quan-ly-nhom-hang/xuly.php?nh_maso=<?php echo $row_sua['nh_maso'] ?>" method="post" enctype="multipart/form-data" id="them_nhom">
	<table class="table" >
		<thead>
			<tr>
				<th class="col">Tên nhóm</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="col"><input type="text" name="nh_ten" value="<?php echo $row_sua['nh_ten'] ?>"></td>
			</tr>
			<tr>
				<td class="col text-center" colspan="2" ><button class="btn btn-primary" name="sua_nhom" type="submit">Sửa</button></td>
			</tr>
		</tbody>

	</table>
</form>