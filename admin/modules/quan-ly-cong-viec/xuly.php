<?php 
	include ('../../../connect.php');
	
	
	
	if(isset($_POST['them_congviec'])){
		$cv_ten=$_POST['cv_ten'];
		$cv_luong=$_POST['cv_luong'];

		if($cv_ten!='' && $cv_luong!=''){
			$sql = "INSERT INTO congviec (cv_ten,cv_luong) values ('$cv_ten','$cv_luong')";
			mysqli_query($conn,$sql);
			echo '<script>
					alert("Đã thêm việc làm !");
					window.location.href = "../../?quanly=quan-ly-cong-viec&ac=them";
				</script>';
		}else{
			echo '<script>
					alert("Không thêm được việc làm !");
					window.location.href = "../../?quanly=quan-ly-cong-viec&ac=them";
				</script>';
		}
		
		
	}elseif(isset($_POST['sua_congviec'])){
		$cv_ten=$_POST['cv_ten'];
		$cv_luong=$_POST['cv_luong'];

		if($cv_ten!='' && $cv_luong!=''){
			$sql = "UPDATE congviec SET cv_ten='$cv_ten',cv_luong='$cv_luong' WHERE cv_maso='$cv_maso' ";
			mysqli_query($conn,$sql);
			echo '<script>
					alert("Đã sửa thông tin việc làm !");
					window.location.href = "../../?quanly=quan-ly-cong-viec&ac=them";
				</script>';
		}else{
			echo '<script>
					alert("Không sửa được thông tin việc làm !");
					window.location.href = "../../?quanly=quan-ly-cong-viec&ac=them";
				</script>';
		}
		
		
	}
	else{
		$cv_maso=$_GET['cv_maso'];
		$sql = "DELETE FROM congviec WHERE cv_maso = '$cv_maso' ";
		mysqli_query($conn,$sql);
		if(mysqli_query($conn,$sql)){
			echo "<script>
					alert('Đã xoá việc làm');
					window.location.href = '../../?quanly=quan-ly-cong-viec&ac=them';
				</script>";
		}else{
			echo "<script>
					alert('Không xoá được việc làm. Vì đang có nhân viên làm công việc này !');
					window.location.href = '../../?quanly=quan-ly-cong-viec&ac=them';
				</script>";
		}
	}
	
	
?>