<html>
	<head>
		<title>CI</title>
		<style>
			body{margin:0; display:flex; justify-content:center; align-items:center; height:100vh}
			form{border:1px solid #ccc; border-radius: 8px; padding: 10px}
			input, button{margin:5px}
		</style>
	</head>
	
	<body>
		<h1>Login-Berita-MVC-DB-CI3</h1>
		
		<?php if(isset($error)): ?>
			<p>❌ Login gagal: <?php echo htmlspecialchars($error) ?></p>
		<?php endif ?>
		<!--index.php?route=auth_login-->
		<form action="<?= site_url('auth/login'); ?>" method="post">
			Username:<input type="text" name="username" required><br><br>
			Password:<input type="text" name="password" required><br><br>
			<button type="submit">LOGIN</button>
		</form>
		
		<p>Akun pengguna database MySQL : admin/123 atau user/321</p>
	</body>

</html>