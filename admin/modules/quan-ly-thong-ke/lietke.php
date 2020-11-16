<?php  
		if(isset($_POST['thongke'])){
			$first=$_POST['first'];
			$last=$_POST['last'];

		// $last=date('Y-m-d', strtotime($last. ' + 1 days'));
		$sql=mysqli_query($conn,"SELECT * FROM hoadon1 WHERE  hd_ngaylap BETWEEN CAST('$first' AS DATE) AND CAST('$last' AS DATE)  ");

	}



		// $this_month = date('Y-m').'-01 00:00:00'; //Lay du lieu tu ngay 1 thang hien tai;
		// $next_month = date('Y').'-'.(intval(date('m'))+1).'-01 00:00:00';
		// $sql = mysqli_query($conn, "SELECT * FROM hoadon1 WHERE hd_ngaylap BETWEEN '".$this_month."' AND '".$next_month."' ");
		// 
		// if(isset($_POST['thongke'])){
		// 	$thang=$_POST['chonthang'];
		// 	$this_month = date('Y-').'-'.intval($thang).'-01 00:00:00';
		// 	$next_month = date('Y').'-'.intval($thang+1).'-01 00:00:00';
		
		// 	// $sql = mysqli_query($conn, "SELECT * FROM hoadon1 WHERE hd_ngaylap BETWEEN '".$this_month."' AND '".$next_month."' ");
		// 	$sql = mysqli_query($conn, "SELECT * FROM hoadon1 WHERE hd_ngaylap = '".date('Y-$thang-d')."' ");
			
		// }

?>
<style>
	#thongke{
		font-size: 20px;
		width:90%;
		margin: 0 auto;
		text-align: center;
	}
	.swrap{
		display: flex;
		flex-wrap: wrap; 
		margin-top: 10vh;
	}
	.box_hd{
		/* float: left; */
		/* margin: 10px 20px; */
		text-align: center;
		margin: 5px 0.5%;
		color: #000;
		border: solid 1px #ccc;
		width: 19%;
	}
	.box_hd:hover{
		text-decoration: none;
		color: #000;
	}
	.tongtien{
		font-weight: bold;
		font-size: 1.4em;
		margin-top: 20px;
	}
</style>
<!-- <form action="" method="POST">
	<h2 class="text-center" style="color: #F70493">Doanh thu tháng <?php echo $thang; ?></h2>
	Chọn tháng : <select name="chonthang" id="">
		<?php 
			for($i=1;$i<=12;$i++){
		?>
		<option value="<?php echo $i; ?>">
			<?php echo $i ?>
		</option>
		<?php  
			}
		?>
	</select>
	<button type="submit" name='thongke'>Thống kê</button>
</form>
 -->
<form action="" method="post" id="thongke">
	Từ ngày : <input type="date" name="first" value="<?php echo $first ?>">
	Đến ngày : <input type="date" name="last" value="<?php echo $last ?>">
	<button type="submit" name='thongke' class="btn btn-primary">Thống kê</button>
</form>


<div class="swrap">
	

<?php
	$sum=0;
	$total = 0;
	if($sql->num_rows>0)
	while($row=mysqli_fetch_array($sql)){
		$sum+=$row['hd_tongtien'];

?>
	<!-- <a  class="box_hd" >
		<div style="font-size: 1.3em;font-weight: bold;">Hoá đơn số : <?php echo $row['hd_maso'] ?></div>
		<div style="font-size: 1.1em;">Ngày lập :<?php echo date("d-m-Y",strtotime($row['hd_ngaylap'])) ?></div>
		<div style="font-weight: bold;font-size: 1.3em;">Tổng tiền: <?php echo number_format($row['hd_tongtien']).' đ' ?></div>
		<br>
		<?php  
		$sql_cthd = mysqli_query($conn, "SELECT * FROM chitiet_hd WHERE hd_maso = '".$row['hd_maso']."' ");
		$sum_tienloi = 0;
		while ($row_cthd = mysqli_fetch_array($sql_cthd)) {
			$sum_tienloi += $row_cthd['cthd_tienloi'];
		?>
		<?php
			}
		?>
		<div style="font-weight: bold;font-size: 1.3em;">Lợi nhuận : <?php echo number_format($sum_tienloi).' đ'; ?></div>
	</a>	 -->
	
<?php  
	$total += $sum_tienloi;
	}
?>
		
</div>

<div class="text-center tongtien">Tổng tiền bán: <?php echo number_format($sum).' đ'; ?></div>
<div class="text-center tongtien">Tổng lợi nhuận : <?php echo number_format($total).' đ'; ?></div>
