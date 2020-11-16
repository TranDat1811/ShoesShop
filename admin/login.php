<?php 
	include('../connect.php');
	session_start();
	if(isset($_POST['dangnhap'])){
		$dn_taikhoan=$_POST['dn_taikhoan'];
		$dn_matkhau=md5($_POST['dn_matkhau']);	
		$sql="SELECT * FROM dangnhap WHERE dn_taikhoan='$dn_taikhoan' and dn_matkhau='$dn_matkhau' limit 1 ";
		$query=mysqli_query($conn,$sql);
		$nums=mysqli_num_rows($query);

		if($nums>0){
			$_SESSION['dangnhap']=$dn_taikhoan;
			header('location:index.php');
		}
	}
?>

<link rel="stylesheet" type="text/css" href="login-style.css">
<div class="container">
		<form action="" method="post">
			<div class="login-box"> 
				<div class="header">Login</div>
				<div class=""><input type="text" name="dn_taikhoan" class="txt" placeholder="Username" required="" autofocus/></div>
				<div class=""><input type="password" name="dn_matkhau" class="txt" placeholder="Password" required=""/></div>

				<div><input type="submit" value="Login" class="btn" name="dangnhap"></div>
			</div>
		</form>
	</div>