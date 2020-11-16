<?php  
	$sql_nh =mysqli_query($conn, "SELECT * FROM nhomhang ");
?>
<header>
	<a href="index.php" id="logo">
   <img src="images/logo/logo.png" alt="logo">
  </a>
	<div class="menu-toggle"></div>
	<nav>
		<ul>
			<li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
			<li class="dropdown">
				  <a href="" class=" dropdown-toggle" data-toggle="dropdown">
				   <i class="fa fa-list"></i> Danh mục
				  </a>
				  <div class="dropdown-menu">
				  	<?php 
				  		while($row_loai=mysqli_fetch_array($sql_nh)){
				  	?>
				    <a class="dropdown-item" href="?xem=nhomhang&nh_maso=<?php echo $row_loai['nh_maso'] ?>"><?php echo $row_loai['nh_ten'] ?></a><?php 
				    	}
				    ?>
				  </div>
			</li>
			<li><a href="">Liên hệ</a></li>
			<li><a href="">Dịch vụ</a></li>
			<li>
				<form action="index.php" method="post" >
					<div class="search_box">
						<input type="search" name="search" placeholder="Tìm kiếm..." class="search-txt" autofocus="">
						<button name="search_btn" class="search-btn"><i class="fa fa-search"></i></button>
					</div>
				</form>
			</li>
		</ul>
	</nav>
</header>

<!-- Slideshow -->
<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 4</div>
    <img src="images/slide/banner.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 4</div>
    <img src="images/slide/banner_2.jpg" >
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 4</div>
    <img src="images/slide/banner_3.jpg">
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="images/slide/banner_4.jpg">
  </div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span>
  <span class="dot"></span> 
</div>