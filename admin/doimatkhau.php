<?php 
	if(isset($_POST['doimatkhau'])){
		$username=$_POST['username'];
		$oldpassword=md5($_POST['oldpassword']);
		$newpassword=md5($_POST['newpassword']);
	$sql_doimatkhau=mysql_query("SELECT * FROM admin WHERE username='$username' and password='$oldpassword' limit 1 ");
	$get_rows=mysql_num_rows($sql_doimatkhau);
	if($get_rows==0){
		echo 'Sai tài khoản hoặc mật khẩu. Vui lòng nhập lại!';
	}else{
		$sql_capnhat=mysql_query("UPDATE admin set password='$newpassword' ");
		echo 'Thay đổi mật khẩu thành công.';
	}
	}
?>

<form action="" method="POST">
<table width="50%"  border="1" align="center">
	<tr class="header">
		<th colspan="2">Đổi mật khẩu</th>
	</tr>
	<tr>
		<td>Tên tài khoản</td>
		<td><input type="text" name="username" required=""></td>
	</tr>
	<tr>
		<td>Mật khẩu cũ</td>
		<td><input type="password" name="oldpassword" required=""></td>
	</tr>
	<tr>
		<td>Mật khẩu mới</td>
		<td><input type="password" name="newpassword" required=""></td>
	</tr>
	
	<tr>
		<td colspan="2"><input type="submit" name="doimatkhau" value="Đổi mật khẩu"></td>
	</tr>

</table>
</form>