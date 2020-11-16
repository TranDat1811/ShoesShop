<form action="modules/quan-ly-khuyen-mai/xuly.php" method="post" enctype="multipart/form-data" id="them_nhom">
	<table class="table" >
		<thead>
			<h3 class="text-center">Thêm chương trình khuyến mãi</h3>
		</thead>
		<tbody>
			<tr>
				<td class="col"><input type="hidden" name="ct_maso"></td>
			</tr>
			<tr>
				<td>Tên chương trình</td>
				<td class="col"><input type="text" name="ct_ten"></td>				
			</tr>	
			<tr>
				<td>Giảm giá</td>
				<td class="col"><input type="text" name="ct_giamgia"> %</td>				
			</tr>
			<tr>
				<td>Ngày bắt đầu</td>
				<td class="col"><input type="date" name="ct_ngaybatdau"></td>				
			</tr>
			<tr>
				<td>Ngày kết thúc</td>
				<td class="col"><input type="date" name="ct_ngayketthuc"></td>				
			</tr>		
			<tr>
				<td class="col" colspan="2" ><button class="btn btn-primary" name="them_ct" type="submit">Thêm nhóm</button></td>
			</tr>
		</tbody>

	</table>
</form>