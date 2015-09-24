<?php
include("connection.php");
?>
<html>
<title>Login Form</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<head>
<style>
#frm_login{
	background-color:#6CC;
	width:500px;
	height:200px;
	margin-left: 400px;
	
	}
	#header
	{
		background-color:#FFF;
		border:#F00;
		alignment-adjust:central;}
</style>
</head>
<body bgcolor="#99FF99">
<form name="frm_login"  id="frm_login"action="" method="post">
  
  <table width="80%" class="tab-pane table-responsive"  align="center" >
  <tr><td colspan="2" align="center" class="panel-primary h2">Login Form</td></tr>
  <tr align="center">
    <td width="34%" height="50" >Username</td>
    <td width="66%" align="left"><input type="text" name="uname" class="form-control" id="uname" ></td>
  </tr>
  <tr align="center">
    <td height="48">Password</td>
    <td align="left"><input type="password" name="pass" id="pass"  class="form-control"></td>
  </tr>
  <tr>
    <td height="39" colspan="2" align="center"><input type="submit" class="btn-success" name="btn_log" id="btn_log" value="LOGIN"> <input type="reset" value="RESET" class="btn-warning"></td>
    </tr>
  <tr><td colspan="2" align="center"><font color="#FF0000"><?php echo $error_msg; ?></font></td></tr>  
</table>

</form>
</body>

</html>