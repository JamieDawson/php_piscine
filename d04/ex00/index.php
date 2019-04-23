<?php
session_start();
	if ($_GET['submit'] == "OK")
	{
		$_GET['login'] != NULL ? $_SESSION['login'] = $_GET['login'] : 0;
		$_GET['passwd'] != NULL ? $_SESSION['passwd'] = $_GET['passwd'] : 0;
	}
?>

<html></body>
<form action="index.php" name="index.php" method="GET">
	username: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>" />
	<br />
	password: <input type="text" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" />
	<br />
	<input type="submit" name="submit" value="OK"> 
	</form>
</body></html>
