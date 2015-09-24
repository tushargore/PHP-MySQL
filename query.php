<?php
if(isset($_POST["btn_save"]))
{
$sql="INSERT INTO  `mydb`.`stud_info` (`name`,`age`,`mobile` ,`addr` , `file`) VALUES(
'".$_POST["nm"]."','".$_POST["age"]."', '".$_POST["mob"]."', '".$_POST["adr"]."', '".$_POST["fl"]."')";

$res=mysql_query($sql);
if($res)
{
	echo "Record Inserted";

	}
	
else{
		echo "Record NOT Inserted";
		}
}


//stud_record
if(isset($_POST["btn_sv"]))
{
$sql="INSERT INTO `mydb`.`student` (`name`,`email`,`mobile`) VALUES(
'".$_POST["st_name"]."','".$_POST["st_email"]."', '".$_POST["st_mob"]."')";

$res=mysql_query($sql);
if($res)
{
	echo "Record Inserted";

	}
	
else{
	echo "Record NOT Inserted";
	}
}

//Update stud_record
if(isset($_POST["btn_edit"]))
{
$sql="UPDATE `mydb`.`student` SET 
`name` = '".$_POST['est_name']."', 
`email` = '".$_POST['est_email']."', 
`mobile` = '".$_POST['est_mob']."' 
WHERE `student`.`id` = ".$_GET['editId'].";";

$res=mysql_query($sql);
if($res)
{
	echo "Record Updated";

	}
	
else{
	echo "Record NOT Updated";
	}
}

//------------------


if(isset($_POST['btn_add'])){
$a=$_POST['fno'];
$b=$_POST['sno'];
$res=$a + $b;
}
if(isset($_POST['btn_sub'])){
$a=$_POST['fno'];
$b=$_POST['sno'];
$res=$a - $b;
}
if(isset($_POST['btn_mul'])){
$a=$_POST['fno'];
$b=$_POST['sno'];
$res=$a * $b;
}
if(isset($_POST['btn_div'])){
$a=$_POST['fno'];
$b=$_POST['sno'];
$res=$a / $b;
}

