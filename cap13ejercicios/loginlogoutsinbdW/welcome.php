<?php
session_start();
if(isset($_GET['action']) && $_GET['action']=='logout'){
	// Remoce session
	unset($_SESSION['username']);
	// Remoce cookie
	setcookie('username', '', 0, "/");
	setcookie('password', '', 0, "/");
	header('location:index.php');
}
echo 'Welcome '.$_SESSION['username'];
?>
<br>
<a href="welcome.php?action=logout">Logout</a>