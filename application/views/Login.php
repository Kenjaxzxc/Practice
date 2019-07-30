<!DOCTYPE html>
<head>
	<title></title>
</head>
<body>

	<form action="<?php echo site_url('project/verify') ?>" method="post">
		<?php 
		echo (isset($_SESSION['err_message'])) ? $_SESSION['err_message'] : '';
		?>
		<?php 
		//echo $this->session->flashdata('error'); 
		?>
		<br>
	Username: <input type="text" name="username" placeholder="Username"><br>
	Password: <input type="text" name="password" placeholder="Password"><br>
	<input type="submit" name="submit">
	</form>
</body>
</html>
