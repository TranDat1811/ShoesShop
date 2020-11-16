<h2 class="text-center" style="color:red">Hoá đơn</h2>
<table class="table" id="lietke_nhom">
	<thead>
		<tr>
			<th class="col">STT</th>
			<th class="col">Tổng tiền</th>
			<th class="col">Ngày lập</p></th>
			<th class="col">Nhân viên tiếp khách</th>
			<th class="col" colspan="2">Thao tác</th>

		</tr>
	</thead>
	<tbody>
		<?php
			while($row=mysqli_fetch_array($hoadon)){
				$nhanvien = mysqli_query($conn, "SELECT * FROM nhanvien WHERE nv_maso = '".$row['nv_maso']."' ");
				$row_nv = mysqli_fetch_array($nhanvien);
		?>
		<tr>
			<td class="col"><?php echo $row['hd_maso'] ?></td>
			<td class="col"><?php echo number_format($row['hd_tongtien']).' đ' ?></td>
			<td class="col"><?php echo $row['hd_ngaylap'] ?></td>
			<td class="col"><?php echo $row_nv['nv_ten'] ?></td>
			
			<td class="col"><a href="?quanly=quan-ly-hoa-don&ac=xem&hd_maso=<?php echo $row['hd_maso'] ?>" class="btn btn-primary">Xem</a></td>
		</tr>
		<?php  
			}
		?>
	</tbody>
</table>