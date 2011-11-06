<?php
/* session_start();		*/
	$err = array();
	$errflag = false;
	function err_chk($loc)
	{
		global $errflag,$err;
		if($errflag)
		{
			$_SESSION['ERR'] = $err;
			session_write_close();
			if(isset($con))
			mysql_close($con);
			header("location:$loc");
			exit();
		}
	}
	function err_print()
	{
		if(isset($_SESSION['ERR']))
		{
			echo '<ul class="err">';
			foreach($_SESSION['ERR'] as $v)
			echo '<li>'.$v.'</li>';
			echo '</ul>';
			unset($_SESSION['ERR']);
		}
	}
?>