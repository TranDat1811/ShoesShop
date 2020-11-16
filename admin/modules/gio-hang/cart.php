<?php  
	include '../connect.php';
	

	if(isset($_POST['update'])){
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$name_id="id_".$i;
			$name_sl="sl_".$i;
			if(isset($_POST[$name_id]))
			{
				$_SESSION['id_them_vao_gio'][$i]=$_POST[$name_id];
				$_SESSION['sl_them_vao_gio'][$i]=$_POST[$name_sl];
			}
		}
	}

	if(isset($_POST['delete'])){
		$id_delete = $_POST['delete'];
		$_SESSION['sl_them_vao_gio'][$id_delete]=0;
	}

	if(isset($_GET['h_maso']) and $_SESSION['cart']=="yes")
	{
		$_SESSION['cart']="no";
		if(isset($_SESSION['id_them_vao_gio']))
		{
			$so=count($_SESSION['id_them_vao_gio']);
			$trung_lap="no";
			for($i=0;$i<$so;$i++)
			{
				if($_SESSION['id_them_vao_gio'][$i]==$_GET['h_maso'])
				{
					$trung_lap="yes";
					$vi_tri_trung_lap=$i;
					break;
				}
			}
			if($trung_lap=="no")
			{
				$_SESSION['id_them_vao_gio'][$so]=$_GET['h_maso'];
				$_SESSION['sl_them_vao_gio'][$so]=$_GET['quantity'];
			}
			if($trung_lap=="yes")
			{
				$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]=$_SESSION['sl_them_vao_gio'][$vi_tri_trung_lap]+$_GET['quantity'];
			}
		}
		else
		{
			$_SESSION['id_them_vao_gio'][0]=$_GET['h_maso'];
			$_SESSION['sl_them_vao_gio'][0]=$_GET['quantity'];

		}
	}

	$gio_hang="no";
	if(isset($_SESSION['id_them_vao_gio']))
	{
		$so_luong=0;
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++)
		{
			$so_luong=$so_luong+$_SESSION['sl_them_vao_gio'][$i];
		}
		if($so_luong!=0)
		{
			$gio_hang="yes";
		}
	}

if($gio_hang=="no"){
	echo "<h2 class='text-center' style='color:green;'>Chưa có sản phẩm nào trong giỏ</h2>";
	echo '<a href="?quanly=trang-chu" class="btn btn-primary" style="display:block;width: 300px; margin:0 auto;">Quay lại mua hàng</a>';
}else{

?>	
<form action='' method='post' >
	<table class="table" style="width: 100%; margin: 0 auto;font-size: 18px;">
		<tr>
			<th>STT</th>
			<th>Tên</th>
			<th>Màu</th>
			<th>Kích cỡ</th>
			<th>Hình</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Thành tiền</th>
			<th>Thao tác</th>
		</tr>
		<?php
			$total=0;
			for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++){
				$sql=mysqli_query($conn, "SELECT * FROM hanghoa WHERE h_maso= '".$_SESSION['id_them_vao_gio'][$i]."' ");
				$row=mysqli_fetch_array($sql);

				$h_ten = $row['h_ten'];
				$h_mau = $row['h_mau'];
				$h_kichco = $row['h_kichco'];
				$h_hinhanh = $row['h_hinhanh'];
				$h_gia = $row['h_gia'];
				$h_soluong = $row['h_soluong'];
				$ct_maso = $row['ct_maso'];

				$khuyenmai = mysqli_query($conn, "SELECT * FROM chuongtrinhkhuyenmai WHERE ct_maso = '".$ct_maso."' ");
				$row_khuyenmai = mysqli_fetch_array($khuyenmai);
					// Xét xem ngày mua hàng có nằm trong thời gian chương trình khuyến mãi không
					$today = date("Y/m/d");
					$ct_ngaybd = $row_khuyenmai['ct_ngaybatdau'];
					$ct_ngaykt = $row_khuyenmai['ct_ngayketthuc'];
					if(strtotime($today)>=strtotime($ct_ngaybd) && strtotime($today)<=strtotime($ct_ngaykt)){
						// phan tram (%) giam gia
						$bonus = $row_khuyenmai['ct_giamgia'];
						//gia sau khi khuyen mai
						$price_bonus=$h_gia-($h_gia*$bonus)/100;
					}
					else{
						$price_bonus = $h_gia;
					}
					$sum = $price_bonus * $_SESSION['sl_them_vao_gio'][$i];

					$total = $total + $sum;

				$name_id="id_".$i;
				$name_sl="sl_".$i;
				if($_SESSION['sl_them_vao_gio'][$i]!=0)
				{
		?>
		<tr>
			<td><?php echo $i ?></td>
			<td><?php echo $h_ten ?></td>
			<td><?php echo $h_mau ?></td>
			<td><?php echo $h_kichco ?></td>	
			<td><img src="modules/quan-ly-hang/uploads/<?php echo $h_hinhanh ?>" alt="<?php echo $h_ten ?>" width='100px'></td>	
			<td><?php echo number_format($price_bonus).' đ' ?></td>

			<td>
				<input type='hidden' name="<?php echo $name_id ?>" value="<?php echo $_SESSION['id_them_vao_gio'][$i] ?>" />
				<input type='number' min="0" max="<?php echo $h_soluong ?>" style='width:50px' name="<?php echo $name_sl ?>" value="<?php echo $_SESSION['sl_them_vao_gio'][$i] ?>" />
			</td>
			<td><?php echo number_format($sum).' đ' ?></td>
			<td>
				<form action="" method="post">
					<button type="submit" value="<?php echo $i ?>" name="delete" class="btn btn-danger" title="Xoá khỏi giỏ">&times;</button>
				</form>
			</td>
		</tr>
		<?php  
			}}
		?>
		<tr>
			<td colspan="10"><input type="submit" value="Cập nhật" class="btn btn-primary" name="update"><a href="?quanly=trang-chu" class="btn btn-primary" style="margin-left:10px;">Tiếp tục mua hàng</a></td>
			
		</tr>
		<tr style="font-weight:bold;">
			<td>Tổng tiền</td>
			<td><?php echo number_format($total).' đ' ?></td>
		</tr>
		<tr>
			<td>
			</td>
		</tr>
	</table>
</form>

<form action="" method="POST" style="font-size: 18px;">
	<table>
		<tr>
			<td>Nhân viên : 
			<select name="nhanvien" id="">
				<?php
					$sql_cv = mysqli_query($conn, "SELECT * FROM congviec WHERE cv_ten = 'Bán hàng' ");
						$row_cv = mysqli_fetch_array($sql_cv);
						$congviec = $row_cv['cv_maso'];
					$sql_nv = mysqli_query($conn, "SELECT * FROM nhanvien WHERE cv_maso = '".$congviec."' ");
						while ($row_nv = mysqli_fetch_array($sql_nv)){
				?>
				<option value="<?php echo $row_nv['nv_maso'] ?>"><?php echo $row_nv['nv_ten'] ?></option>
				<?php  
					}
				?>
			</select>
			</td>
		</tr>
	</table>
	<input type="submit" value="Thanh toán" name="thanh_toan" class="btn btn-primary" style="display: block; margin: 0 auto;">
</form>

<?php 
	if(isset($_POST['thanh_toan'])) {
		include ('pay.php');
	}
}
?>