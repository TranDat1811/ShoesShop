<?php 
	include ('../../../connect.php');

		

		
	
	if(isset($_POST['them_nhanvien']))
	{
		$nv_ten=$_POST['nv_ten'];
		$nv_cmnd=$_POST['nv_cmnd'];
		$nv_tuoi=$_POST['nv_tuoi'];
		$nv_diachi=$_POST['nv_diachi'];
		$nv_sodienthoai=$_POST['nv_sodienthoai'];
		$nv_gioitinh=$_POST['nv_gioitinh'];
		$cv_maso=$_POST['cv_maso'];
		$nv_ghichu=$_POST['nv_ghichu'];

		if($nv_ten!='' && $nv_cmnd!='' && $nv_tuoi!='' && $nv_diachi!='' && $nv_sodienthoai!='' && $nv_gioitinh!='' && $cv_maso!=''){
			$sql = "INSERT nhanvien (nv_ten,nv_cmnd,nv_tuoi,nv_diachi,nv_sodienthoai,nv_gioitinh,cv_maso,nv_ghichu) VALUES ('$nv_ten','$nv_cmnd','$nv_tuoi','$nv_diachi','$nv_sodienthoai','$nv_gioitinh','$cv_maso','$nv_ghichu')  ";
			// mysqli_query($conn, $sql);
			if(mysqli_query($conn, $sql)){
				echo "<script>
				alert('Đã thêm nhân viên !');
				window.location.href = '../../?quanly=quan-ly-nhan-vien&ac=them';
			</script>";
			}
			else{
			echo "<script>
					alert('Không thêm được nhân viên !');
					window.location.href = '../../?quanly=quan-ly-nhan-vien&ac=them';
				</script>";
			}	
		}	
		else{
			echo "<script>
					alert('Không thêm được nhân viên !');
					window.location.href = '../../?quanly=quan-ly-nhan-vien&ac=them';
				</script>";
		}	
	}
	elseif(isset($_POST['sua_nhanvien']))
	{	
		$nv_ten=$_POST['nv_ten'];
		$nv_cmnd=$_POST['nv_cmnd'];
		$nv_tuoi=$_POST['nv_tuoi'];
		$nv_diachi=$_POST['nv_diachi'];
		$nv_sodienthoai=$_POST['nv_sodienthoai'];
		$nv_gioitinh=$_POST['nv_gioitinh'];
		$cv_maso=$_POST['cv_maso'];
		$nv_ghichu=$_POST['nv_ghichu'];

		$nv_maso=$_GET['nv_maso'];
		if($nv_ten!='' && $nv_tuoi!='' && $nv_cmnd!='' && $nv_diachi!='' && $nv_sodienthoai!='' && $nv_gioitinh!='')
		{
			$sql = "UPDATE nhanvien SET nv_ten='$nv_ten',nv_cmnd='$nv_cmnd',nv_tuoi='$nv_tuoi',nv_diachi='$nv_diachi',nv_sodienthoai='$nv_sodienthoai',nv_gioitinh='$nv_gioitinh',cv_maso='$cv_maso' WHERE nv_maso='$nv_maso' ";
			mysqli_query($conn,$sql);
		
		}
		if(mysqli_query($conn,$sql)){
			echo '<script>alert("Đã sửa thông tin nhân viên !");window.location.href="?quanly=quan-ly-nhan-vien&ac=them";</script>';
		}
		else{
			echo '<script>alert("Không sửa được thông tin nhân viên !");window.location.href="?quanly=quan-ly-nhan-vien&ac=them";</script>';
		}
		
	}
	else
	{
		$nv_maso=$_GET['nv_maso'];
		$sql = "DELETE FROM nhanvien WHERE nv_maso = '$nv_maso' ";
		mysqli_query($conn,$sql);
		

		header('location:../../?quanly=quan-ly-nhan-vien&ac=them');
	}
?>