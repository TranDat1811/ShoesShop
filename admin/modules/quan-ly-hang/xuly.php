<?php  
	include '../../../connect.php';
	$h_maso=$_GET['h_maso'];
	$h_maso_2=$_POST['h_maso'];

	$h_ten=$_POST['h_ten'];
	$h_gianhap=$_POST['h_gianhap'];
	$h_gia=$_POST['h_gia'];
	$h_kichco=$_POST['h_kichco'];
	$h_mau=$_POST['h_mau'];
	$h_soluong=$_POST['h_soluong'];
	$h_mota=$_POST['h_mota'];
	$h_active=$_POST['h_active'];
	$nh_maso=$_POST['nh_maso'];
	$ct_maso=$_POST['ct_maso'];
	$h_hinhanh=$_FILES['h_hinhanh']['name'];
	$h_hinhanh_temp=$_FILES['h_hinhanh']['tmp_name'];
	move_uploaded_file($h_hinhanh_temp, 'uploads/'.$h_hinhanh);
	
	if(isset($_POST['them_hang']))
	{
		if($h_ten!='' && $h_gianhap!='' && $h_gia!='' && $h_mau!='' && $h_soluong!='' && $h_hinhanh!='' && $ct_maso!='' && $h_active != '')
		{
			$sql_them="INSERT INTO hanghoa(h_ten,h_gianhap,h_gia,h_kichco,h_mau,h_soluong,h_mota,nh_maso,ct_maso,h_hinhanh,h_active) VALUES ('$h_ten','$h_gianhap','$h_gia','$h_kichco','$h_mau','$h_soluong','$h_mota','$nh_maso','$ct_maso','$h_hinhanh','$h_active')";
			
		}

		elseif($h_ten!='' && $h_gianhap!='' && $h_gia!='' && $h_mau!='' && $h_soluong!='' && $h_hinhanh!='')
		{
			$sql_them="INSERT INTO hanghoa(h_ten,h_gianhap,h_gia,h_kichco,h_mau,h_soluong,h_mota,nh_maso,h_hinhanh,h_active) VALUES ('$h_ten','$h_gianhap','$h_gia','$h_kichco','$h_mau','$h_soluong','$h_mota','$nh_maso','$h_hinhanh','$h_active')";
		}
		elseif($h_ten!='' && $h_gianhap!='' && $h_gia!='' && $h_mau!='' && $h_soluong!='' && $h_hinhanh!='' && $ct_maso!='')
		{
			$sql_them="INSERT INTO hanghoa(h_ten,h_gianhap,h_gia,h_kichco,h_mau,h_soluong,h_mota,nh_maso,h_hinhanh,h_active) VALUES ('$h_ten','$h_gianhap','$h_gia','$h_kichco','$h_mau','$h_soluong','$h_mota','$nh_maso','$h_hinhanh')";
		}
		
		if(mysqli_query($conn,$sql_them)){
			echo "<script>
					alert('Đã thêm sản phẩm');
					window.location.href = '../../?quanly=quan-ly-hang&ac=them';
				</script>";
		}else{
			echo "<script>
					alert('Không thêm được sản phẩm');
					window.location.href = '../../?quanly=quan-ly-hang&ac=them';
				</script>";
		}
		
	}
	elseif(isset($_POST['sua_hang']))
	{
		if($h_ten!='' && $h_gianhap!='' && $h_gia!='' && $h_mau!='' && $h_soluong!='' && $h_hinhanh!='' && $ct_maso!='')
		{
			$sql_sua="UPDATE hanghoa SET h_ten='$h_ten',h_gianhap='$h_gianhap',h_gia='$h_gia',h_hinhanh='$h_hinhanh',h_kichco='$h_kichco',h_mau='$h_mau', h_soluong='$h_soluong', h_mota='$h_mota', nh_maso='$nh_maso',ct_maso='$ct_maso', h_active='$h_active' WHERE h_maso='$h_maso' ";
		}
		elseif($h_ten!='' && $h_gianhap!='' && $h_gia!='' && $h_mau!='' && $h_soluong!='' && $h_hinhanh!='')
		{
			$sql_sua="UPDATE hanghoa SET h_ten='$h_ten',h_gianhap='$h_gianhap',h_gia='$h_gia',h_hinhanh='$h_hinhanh',h_kichco='$h_kichco',h_mau='$h_mau', h_soluong='$h_soluong', h_mota='$h_mota', nh_maso='$nh_maso',ct_maso=NULL, h_active='$h_active' WHERE h_maso='$h_maso' ";
		}
		elseif($h_ten!='' && $h_gianhap!='' && $h_gia!='' && $h_mau!='' && $h_soluong!='' && $h_hinhanh=='' && $ct_maso!='')
		{
			$sql_sua="UPDATE hanghoa SET h_ten='$h_ten',h_gianhap='$h_gianhap',h_gia='$h_gia',h_kichco='$h_kichco',h_mau='$h_mau', h_soluong='$h_soluong', h_mota='$h_mota', nh_maso='$nh_maso', ct_maso='$ct_maso', h_active='$h_active' WHERE h_maso='$h_maso' ";
		}
		elseif($h_ten!='' && $h_gianhap!='' && $h_gia!='' && $h_mau!='' && $h_soluong!='' && $h_hinhanh=='')
		{
			$sql_sua="UPDATE hanghoa SET h_ten='$h_ten',h_gianhap='$h_gianhap',h_gianhap='$h_gianhap',h_gia='$h_gia',h_kichco='$h_kichco',h_mau='$h_mau', h_soluong='$h_soluong', h_mota='$h_mota', nh_maso='$nh_maso', ct_maso=NULL, h_active='$h_active' WHERE h_maso='$h_maso' ";
		}
		
		mysqli_query($conn, $sql_sua);
		if(mysqli_query($conn,$sql_sua)){
			echo "<script>
					alert('Đã sửa thông tin sản phẩm');
					window.location.href = '../../?quanly=quan-ly-hang&ac=sua&h_maso=$h_maso';
				</script>";
		}else{
			echo "<script>
					alert('Không sửa được thông tin sản phẩm');
					window.location.href = '../../?quanly=quan-ly-hang&ac=sua&h_maso=$h_maso';
				</script>";
		}
		// header('location:../../?quanly=quan-ly-hang&ac=sua&h_maso='.$h_maso_2);
	}
	else
	{
		$sql_xoa="DELETE FROM hanghoa WHERE h_maso = '$h_maso' ";
		mysqli_query($conn,$sql_xoa);
		if(mysqli_query($conn,$sql_xoa)){
			echo "<script>
					alert('Đã xoá sản phẩm');
					window.location.href = '../../?quanly=quan-ly-hang&ac=them';
				</script>";
		}else{
			echo "<script>
					alert('Không xoá được sản phẩm');
					window.location.href = '../../?quanly=quan-ly-hang&ac=them';
				</script>";
		}
	}

?>
