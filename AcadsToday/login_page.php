<?php
session_start();
require('err.php');
err_print();
?>
<html>
	<head>
		<title>Login Page</title>
		<script language=javascript type='text/javascript'>
			function toggleForm1() {
				document.getElementById('form1').style.display = 'none';
				document.getElementById('form2').style.display = 'inline';
			}
			function toggleForm2() {
				document.getElementById('form2').style.display = 'none';
				document.getElementById('form1').style.display = 'inline';
			}
		</script>
		<style>
			body{
				width:80%;
				margin-left:auto;
				margin-right:auto;
				margin-top:100px;
				background-color:#FFFFFF;
			}
			#content{
				float:left;
			}
			#forms{
				width:420px;
				float:right;
				height:190px;
				background-color:#BDBDBD;
				padding:15px;
				border-style:solid;
				border-width:1px;
				border-color:#707070;
			}
			#form1{
				width:90%;
				margin-left:auto;
				margin-right:auto;
			}
			#form2{
				width:90%;
				margin-left:auto;
				margin-right:auto;
			}
			td{
				width:200px;
			}
			.desc{
				color:#707070;
			}
		</style>
	</head>
	<body>
		<div id="content">
			<div><h1>AcadsToday</h1></div>
			<div><p class="desc">description about acads today</p></div>
		</div>
		<div id="forms">
			<div id="form1">
				<form method="POST" action="login.php">
					<table cellspacing="0">
						<tr>
							<td><label for="user_id">Username</label></td>
							<td><input type="text" name="user_id" id="user_id" tabindex="1" /></td></tr>
						<tr>
							<td><label for="pwd">Password</label></td>
							<td><input type="password" name="pwd" id="pwd" tabindex="2" /></td></tr>
						<tr>
							<td></td>
							<td><br/><input value="Sign In" tabindex="3" type="submit" /></td></tr>
						<tr>
							<td colspan="2"><br/>New User? Sign Up <a href="javascript:void" title="Sign Up" id="showform2" onclick="toggleForm1();">Here</a></td></tr>
					</table>
				</form>
			</div>
			<div id="form2" style="display:none">
				<form method="POST" action="login_register.php">
					<table cellspacing="0">
						<tr>
							<td><label for="ldap_id">LDAP Username</label></td>
							<td><input type="text" name="ldap_id" id="ldap_id" tabindex="1"/></td></tr>
						<tr>
							<td><label for="ldap_pwd">LDAP Password</label></td>
							<td><input type="password" name="ldap_pwd" id="ldap_pwd" tabindex="2" /></td></tr>
						<tr>
							<td><label for="pwd1">Your New Password</label></td>
							<td><input type="password" name="pwd1" id="pwd1" tabindex="3" /></td></tr>
						<tr>
							<td><label for="pwd2">Re-enter Password</label></td>
							<td><input type="password" name="pwd2" id="pwd2" tabindex="4" /></td></tr>
						<tr>
							<td></td>
							<td><br/><input value="Sign Up" tabindex="5" type="submit" /></td></tr>
						<tr>
							<td colspan="2"><br/>Already a member? Sign In <a href="javascript:void" title="Sign In" id="showform1" onclick="toggleForm2();">Here</a></td></tr>
					</table>
				</form>
			</div>
			<div id="error"></div>
		</div>
	</body>
</html>

