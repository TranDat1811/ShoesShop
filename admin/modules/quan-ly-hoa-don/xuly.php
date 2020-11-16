<?php 
	include ('../../../connect.php');
	$cv_maso=$_GET['cv_maso'];
	
	$cv_ten=$_POST['cv_ten'];
	$cv_luong=$_POST['cv_luong'];
	if(isset($_POST['them_congviec'])){
		if($cv_ten!='' && $cv_luong!=''){
			$sql = "INSERT INTO congviec (cv_ten,cv_luong) values ('$cv_ten','$cv_luong')";
		}
		mysqli_query($conn,$sql);
		header('location:../../?quanly=quan-ly-cong-viec&ac=them');
	}elseif(isset($_POST['sua_congviec'])){
		if($cv_ten!='' && $cv_luong!=''){
			$sql = "UPDATE congviec SET cv_ten='$cv_ten',cv_luong='$cv_luong' WHERE cv_maso='$cv_maso' ";
		}
		mysqli_query($conn,$sql);
		header('location:../../?quanly=quan-ly-cong-viec&ac=sua&cv_maso='.$cv_maso);
	}
	else{
		$sql = "DELETE FROM congviec WHERE cv_maso = '$cv_maso' ";
		mysqli_query($conn,$sql);
		header('location:../../?quanly=quan-ly-cong-viec&ac=them');
	}
	
	
?>