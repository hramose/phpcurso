<?php
session_start();

if(isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
	if($_COOKIE['username']=='abc' && $_COOKIE['password']=='123') {
		$_SESSION['username'] = $_COOKIE['username'];
		header('location:welcome.php');
	}
	else 
		$error = "Account's Invalid";
}

if(isset($_POST['login'])){
	if($_POST['username']=='abc' && $_POST['password']=='123'){
		$_SESSION['username'] = $_POST['username'];
		if($_POST['remember'] != NULL) {
			setcookie('username', $_POST['username'], time() + (86400 * 30), "/");
			setcookie('password', $_POST['password'], time() + (86400 * 30), "/");
		}
		header('location:welcome.php');
	}
	else {
		$error = "Account's Invalid";
	}
}

?>
<form method="post">
	<fieldset>
		<legend>Login</legend>
		<?php echo isset($error) ? $error : ''; ?>
		<table cellpadding="2" cellspacing="2">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td>Remember Me</td>
				<td><input type="checkbox" name="remember"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td><input type="submit" name="login" value="Login"></td>
			</tr>
		</table>
	</fieldset>
</form>