<?php
session_start();
include("connection.php");
include("query.php");
error_reporting(~E_NOTICE);
if(isset($_POST["btn_log"]))
{
if(($_POST["uname"]== "tush") and ($_POST["pass"] == "tush"))
	{
		$_SESSION["loginState"]=true;
		
	}
	else
	{
		$_SESSION["loginState"]=false;
		$error_msg="Invalid Username/Password";
	}
	}
	
	
if($_SESSION["loginState"]==true)
{	

?>

<html>
<title>Login Form</title>
<link href="bootstrap.css" rel="stylesheet" type="text/css">
<head>
<style>
#frm_login{
	background-color:#6CC;
	alignment-adjust:central;
	width:500px;
	height:200px;
	margin-left:400px;
	}
.tbl{
		
		background:#6CF;
		}
	.tb2{
			background-color:#FC6;
		}
</style>
</head>
<body class="modal-body label-info">

<form name="frm_login" id="frm_login" action="" method="post">

<table width="94%" border="0" class="table" >
  <tr align="center">
    <td width="39%" height="50" align="right">Name</td>
    <td width="61%" align="left"><input type="text" name="st_name" id="st_name"  class="form-control"></td>
  </tr>
  <tr align="center">
    <td height="48" align="right">Email</td>
    <td align="left"><input type="st_email" name="st_email" id="st_mail"  class="form-control"></td>
  </tr>
  
  <tr align="center">
    <td height="48" align="right">Mobile</td>
    <td align="left"><input type="st_mob" name="st_mob" id="st_mob" class="form-control" ></td>
  </tr>
  <tr>
    <td height="39" colspan="2" align="center"><input type="submit" name="btn_sv" id="btn_sv" value="SAVE" class=" btn-primary">
   <a href="logout.php"> <input type="button" name="logout" id="logout" value="LOGOUT" class=" btn-danger"></a></td>
    </tr>
</table>

</form>
<table width="55%" align="center" class="table-bordered table-hover">

<tr>
<td width="15%"  class="tbl">Sr.No</td>
<td width="20%"  class="tbl">Name</td>
<td width="29%" class="tbl">Email </td>
<td width="21%"  class="tbl">Mobile</td>
<td width="15%" class="tbl">UPDATE</td>
</tr>


<tbody>
<?php
	$sql = "SELECT * FROM `student`"; 
	$res1=mysql_query($sql);
	 
	while($row = mysql_fetch_array($res1))
  	{
		
		 
		
?>	
<tr>
	<td class="tb2"><?php echo $row['id'];  ?></td>
	<td class="tb2"><?php echo $row['name']; ?></td>
	<td class="tb2"><?php echo $row['email']; ?></td>
	<td class="tb2"><?php echo $row['mobile']; ?></td>

	<td class="tb2" align="center">
    <a href="index.php?editId=<?php echo $row['id']; ?>"  title="Edit <?php echo $row['id']; ?>">
    <img src="img/i_edit.png">
    </a>
    
    &nbsp;&nbsp;&nbsp;&nbsp;
	<a href="index.php?deleteId=<?php echo $row['id'];  ?>" onClick="return deletechecked('Are you sure want to delete : <?php echo $row['name']; ?>?');" title="Delete <?php echo $row['id'];  ?>">
    <img src="img/i_delete.png">
    </a>
    
    </td>

</tr>
</tbody>


<?php } ?>
</table>

<?php
	if(isset($_GET['editId']))
	{
		$reslt=mysql_query("SELECT * from mydb.student WHERE id=".$_GET['editId']);
		while($row=mysql_fetch_array($reslt))
		{
		
?>
	<form name="frm_edit" id="frm_edit" action="" method="post">

<table width="94%" border="0" >
  <tr align="center">
    <td width="39%" height="50" align="right"><font color="#FF0000">Name</font></td>
    <td width="61%" align="left"><input type="text" name="est_name" id="est_name" value="<?php echo $row['name']; ?>"  class="form-control"></td>
  </tr>
  <tr align="center">
    <td height="48" align="right"><font color="#FF0000">Email</font></td>
    <td align="left"><input type="est_email" name="est_email" id="st_mail" class="form-control" value="<?php echo $row['email']; ?>" ></td>
  </tr>
  
  <tr align="center">
    <td height="48" align="right"><font color="#FF0000">Mobile</font></td>
    <td align="left"><input type="est_mob" name="est_mob" id="st_mob" class="form-control" value="<?php echo $row['mobile']; ?>" ></td>
  </tr>
  <tr>
    <td height="39" colspan="2" align="center"><input type="submit" name="btn_edit" id="btn_edit" value="UPDATE" class=" btn-info">
    </td>
    </tr>
</table>

</form>
    	
<?php		}
		
	}
?>


<?php
 if(isset($_GET['deleteId']))
 {
	 mysql_query("DELETE from mydb.student WHERE id=".$_GET['deleteId']);
	  header('Location:index.php');
	 
	}
?>

</body>

</html>
<?php 
}
else
	{
		include("login.php");
		}

?>