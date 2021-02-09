<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  
	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
	<div class="kotak_login">
		<h2 class="tulisan_login">LOGIN</h2>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
      <input type="text" name="username" class="form_login" placeholder="Username .." required="required">
      <br/>
			<label>Password</label>
			<input type="password" name="password " class="form_login" placeholder="Password .." required="required">
	<br/>
      <input type="submit" class="tombol_login" value="LOGIN">
    <input type="reset" class="tombol_reset" value="CLEAR">
				<a class="link" href="index" value="kembali">KEMBALI</a>
		</form>
		
	</div>
 
</body>
</html>