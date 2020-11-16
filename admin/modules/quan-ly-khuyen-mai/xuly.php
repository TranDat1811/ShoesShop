<?php 
	include ('../../../connect.php');
	$ct_maso=$_GET['ct_maso'];
	$ct_maso_2=$_POST['ct_maso'];
	$ct_ten=$_POST['ct_ten'];
	$ct_giamgia=$_POST['ct_giamgia'];
	$ct_ngaybatdau = $_POST['ct_ngaybatdau'];
	$ct_ngayketthuc = $_POST['ct_ngayketthuc'];

	if(isset($_POST['them_ct'])){
		$ct_maso=$_GET['ct_maso'];
		$ct_maso_2=$_POST['ct_maso'];
		$ct_ten=$_POST['ct_ten'];
		$ct_giamgia=$_POST['ct_giamgia'];
		$ct_ngaybatdau = $_POST['ct_ngaybatdau'];
		$ct_ngayketthuc = $_POST['ct_ngayketthuc'];

		if($ct_ten!='' && $ct_giamgia!=''){
			$sql = "INSERT INTO chuongtrinhkhuyenmai (ct_ten,ct_giamgia,ct_ngaybatdau,ct_ngayketthuc) values ('$ct_ten','$ct_giamgia','$ct_ngaybatdau','$ct_ngayketthuc')";
			mysqli_query($conn,$sql);
			echo "<script>
					alert('Đã thêm chương trình khuyến mãi');
					window.location.href = '../../?quanly=quan-ly-khuyen-mai&ac=them';
				</script>";
		}else{
			echo "<script>
					alert('Thông tin chương trình khuyến mãi không được để trống');
					window.location.href = '../../?quanly=quan-ly-khuyen-mai&ac=them';
				</script>";
		}
	}elseif(isset($_POST['sua_ct'])){
		$ct_maso=$_GET['ct_maso'];
		$ct_maso_2=$_POST['ct_maso'];
		$ct_ten=$_POST['ct_ten'];
		$ct_giamgia=$_POST['ct_giamgia'];
		$ct_ngaybatdau = $_POST['ct_ngaybatdau'];
		$ct_ngayketthuc = $_POST['ct_ngayketthuc'];

		if($ct_ten!='' && $ct_giamgia!=''){
			$sql = "UPDATE chuongtrinhkhuyenmai SET ct_ten='$ct_ten', ct_giamgia='$ct_giamgia', ct_ngaybatdau='$ct_ngaybatdau',ct_ngayketthuc='$ct_ngayketthuc' WHERE ct_maso='$ct_maso' ";
			mysqli_query($conn,$sql);
			echo '<script>
					alert("Đã sửa thông tin chương trình");
					window.location.href = "../../?quanly=quan-ly-khuyen-mai&ac=them";
				</script>';
		}else{
			echo "<script>
					alert('Thông tin chương trình khuyến mãi không được để trống');
					window.location.href = '../../?quanly=quan-ly-khuyen-mai&ac=them';
				</script>";
		}
	}
	else{
		$ct_maso=$_GET['ct_maso'];
		$sql = "DELETE FROM chuongtrinhkhuyenmai WHERE ct_maso = '$ct_maso' ";
		mysqli_query($conn,$sql);
		if(mysqli_query($conn,$sql)){
			echo "<script>
					alert('Đã xoá chương trình khuyến mãi');
					window.location.href = '../../?quanly=quan-ly-khuyen-mai&ac=them';
				</script>";
		}else{
			echo "<script>
					alert('Không xoá được chương trình khuyến mãi. Vì đang có sản phẩm hưởng ưu đãi từ khuyến mãi');
					window.location.href = '../../?quanly=quan-ly-khuyen-mai&ac=them';
				</script>";
		}
		
	}
	
	
?>