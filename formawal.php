<?php 
session_start ();
error_reporting (0);

		$user = array (
				"user" => "Tanaya",
				"pass" => "12345"
					);
if (isset($_POST['submit'])) {
	if ($_POST['username'] == $user['user'] && $_POST['password'] == $user['pass']) {

		$_SESSION["username"] = $_POST ['username'];
		echo "Selamat Datang" ;
	} else{ 
		display_login_form ();
		echo '<p> Username atau Password Anda Salah</p>';

		# code...
	}
	}
	else{
		display_login_form();
	}
	function display_login_form (){ ?> 
		<form action="proses.php" method="POST">
		<center> LOGIN FIRST <center> <br/>
		<center> <label for="username"> Ketikkan Username Anda : </label></center>
		<input type="text" name="username" id="username">
		<br></br>
		<center> <label for="passsword"> Ketikkan Password Anda : </label></center>
		<input type="password" name="password" id="password">
		<br><br>
		<input type="submit" name="submit" id="login">
		<input type="reset">
		</form?

 <?php } ?>
