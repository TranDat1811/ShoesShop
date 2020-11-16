<?php
	date_default_timezone_set("Asia/Ho_Chi_Minh");
	if(isset($_SESSION['id_them_vao_gio'])) {
		$nguoi_ban = $_POST['nhanvien'];
		$select_id = "SELECT * FROM hoadon1";
		$select_id_result = mysqli_query($conn, $select_id);
		if ($select_id_result->num_rows > 0) {
			while ($row1 = mysqli_fetch_array($select_id_result)) {
				$id = $row1['hd_maso'];
				if ($id=="") {
					$id = 1;
				} else {
					$id = $row1['hd_maso'] + 1;
				}
			}
		}
		
		if($total>0){
			$sql_hd = "INSERT INTO hoadon1 (hd_maso,hd_ngaylap,hd_tongtien,nv_maso) VALUES ('$id','".date("Y-m-d G:i:s")."','$total', '$nguoi_ban')";
			mysqli_query($conn, $sql_hd);
			
		}
		// $hang_duoc_mua = "";
		for($i=0;$i<count($_SESSION['id_them_vao_gio']);$i++){
			$sp_mua = $_SESSION['id_them_vao_gio'][$i];
			$sl_mua = $_SESSION['sl_them_vao_gio'][$i];

			$sql_hh = mysqli_query($conn, "SELECT * FROM hanghoa WHERE h_maso = '".$sp_mua."' ");
			$row_hh = mysqli_fetch_array($sql_hh);
				$h_gianhap = $row_hh['h_gianhap'];
				$h_gia = $row_hh['h_gia'];
				$ct_maso = $row_hh['ct_maso'];
				$sql_ctkm = mysqli_query($conn, "SELECT * FROM chuongtrinhkhuyenmai WHERE ct_maso = '".$ct_maso."' ");
				$row_khuyenmai = mysqli_fetch_array($sql_ctkm);
					$ct_giamgia=$row_ctkm['ct_giamgia'];
					$today = date("Y/m/d");
					$ct_ngaybd = $row_khuyenmai['ct_ngaybatdau'];
					$ct_ngaykt = $row_khuyenmai['ct_ngayketthuc'];

					// Xét xem ngày mua hàng có nằm trong thời gian chương trình khuyến mãi không
					if(strtotime($today)>=strtotime($ct_ngaybd) && strtotime($today)<=strtotime($ct_ngaykt)){
						// phan tram (%) giam gia
						$bonus = $row_khuyenmai['ct_giamgia'];
						//gia sau khi khuyen mai
						$price_bonus=$h_gia-($h_gia*$bonus)/100;
						$cthd_tienloi = $_SESSION['sl_them_vao_gio'][$i]*$price_bonus - $_SESSION['sl_them_vao_gio'][$i]*$h_gianhap;
						if($sl_mua>0){
							$sql_cthd = "INSERT INTO chitiet_hd (hd_maso,h_maso,cthd_soluong,cthd_gia,h_gianhap,cthd_tienloi) VALUES ('$id','$sp_mua','$sl_mua','".$_SESSION['sl_them_vao_gio'][$i]*$price_bonus."','$h_gianhap','$cthd_tienloi')";
							mysqli_query($conn,$sql_cthd);
						}
					}
					else{
						$price_bonus = $h_gia;
						$cthd_tienloi = $_SESSION['sl_them_vao_gio'][$i]*$price_bonus - $_SESSION['sl_them_vao_gio'][$i]*$h_gianhap;
						if($sl_mua>0){
							$sql_cthd = "INSERT INTO chitiet_hd (hd_maso,h_maso,cthd_soluong,cthd_gia,h_gianhap,cthd_tienloi) VALUES ('$id','$sp_mua','$sl_mua','".$_SESSION['sl_them_vao_gio'][$i]*$price_bonus."','$h_gianhap','$cthd_tienloi')";
							mysqli_query($conn,$sql_cthd);
						}
					}			
			$update_sl = $row_hh['h_soluong'] - $sl_mua;
			$sql_update = mysqli_query($conn, "UPDATE hanghoa SET h_soluong='$update_sl' WHERE h_maso ='".$sp_mua."' ");
					
			
		}
		unset($_SESSION['id_them_vao_gio']);
		unset($_SESSION['sl_them_vao_gio']);
		echo '<script>alert("Mua hàng thành công");window.location.href="?quanly=trang-chu";</script>';
		// header("location: index.php");
	}	

?>		