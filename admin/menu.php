<?php
	$sql = mysqli_query($conn, "SELECT * FROM dangnhap ");
	$row = mysqli_fetch_array($sql); 
	if (isset($_GET['ac']) && $_GET['ac']=='logout') {
		unset($_SESSION['dangnhap']);//bỏ duy nhất 1 session được chỉ định
		//session_destroy(); //bỏ tất cả các session
		header('location:login.php');
	}
?>
<div class="menu">
	<a href="index.php" class="logo">
		<img src="../images/logo/logo.png" alt="logo">
	</a>
	<div class="menu-toggle"></div>
	<nav>
		<ul>
			
			<li><a href="?quanly=trang-chu">Đặt hàng</a></li>
			<li><a href="?quanly=quan-ly-nhom-hang&ac=them">Danh mục</a></li>
			<li><a href="?quanly=quan-ly-hang&ac=them"><i class="fas fa-shoe-prints"></i>Sản phẩm</a></li>
			
			<li><a href="?quanly=quan-ly-khuyen-mai&ac=them">Chương trình khuyến mãi</a></li>
			<li><a href="?quanly=quan-ly-cong-viec&ac=them">Công việc</a></li>
			<li><a href="?quanly=quan-ly-nhan-vien&ac=them">Nhân viên</a></li>
			<li><a href="?quanly=quan-ly-hoa-don&ac=them">Hoá đơn</a></li>
			<li><a href="?quanly=quan-ly-thong-ke&ac=them">Thống kê</a></li>
			<li class="admin dropdown"><a href="" class=" dropdown-toggle" data-toggle="dropdown">
				Xin chào <?php echo $row['dn_taikhoan'] ?></a>
				<div class="dropdown-menu">
					<a href="?ac=logout" class="dropdown-item">Đăng xuất</a>
				</div>
				
			</li>
		</ul>
	</nav>
</div>