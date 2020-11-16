<?php  
	include '../connect.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Trang quản trị</title>
	<link rel="stylesheet" href="style.css">

	
	<!-- Font awesome -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	
</head>
<body>
	<div class="wrapper">
		<?php 
			session_start();
			if(!isset($_SESSION['dangnhap'])){
				header('location:login.php');
			}
		?>

		<?php
			
			include ('menu.php');
			include ('content.php');
			include ("footer.php");
		?>

			<!-- btn go top -->
	<a  href="#" class="go_top" title="Go to top"><i class="fa fa-angle-up"></i></a>
	</div>
	<script src="../script.js"></script>
</body>
</html>