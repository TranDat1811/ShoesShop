<?php 
	include ('../../../connect.php');
	
	
	if(isset($_POST['them_nhom'])){
		$nh_ten=$_POST['nh_ten'];
		if($nh_ten!=''){
			$sql = "INSERT INTO nhomhang (nh_ten) values ('$nh_ten')";
			mysqli_query($conn,$sql);
			echo '<script>alert("Đã thêm nhóm");window.location.href="../../?quanly=quan-ly-nhom-hang&ac=them";</script>';
		}
		else{
			echo '<script>alert("Không được để trống tên nhóm");window.location.href="../../?quanly=quan-ly-nhom-hang&ac=them";</script>';
		}
		
	}elseif(isset($_POST['sua_nhom'])){
		$nh_ten=$_POST['nh_ten'];
		if($nh_ten!=''){
			$sql = "UPDATE nhomhang SET nh_ten='$nh_ten' WHERE nh_maso='$nh_maso' ";
			mysqli_query($conn,$sql);
			echo '<script>
					alert("Đã sửa nhóm");
					window.location.href="../../?quanly=quan-ly-nhom-hang&ac=them";
				</script>';
		}else{
			echo '<script>
					alert("Không được để trống tên nhóm");
					window.location.href="../../?quanly=quan-ly-nhom-hang&ac=them";
				</script>';
		}
		
	}
	else{
		$nh_maso=$_GET['nh_maso'];
		$sql = "DELETE FROM nhomhang WHERE nh_maso = '$nh_maso' ";
		mysqli_query($conn,$sql);
		if(mysqli_query($conn,$sql)){
			echo "<script>
					alert('Đã xoá nhóm');
					window.location.href = '../../?quanly=quan-ly-nhom-hang&ac=them';
				</script>";
		}else{
			echo "<script>
					alert('Không xoá được nhóm sản phẩm. Vì đang có sản phẩm thuộc vào nhóm này !');
					window.location.href = '../../?quanly=quan-ly-nhom-hang&ac=them';
				</script>";
		}
	}
	
	
?>