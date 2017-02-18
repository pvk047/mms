<?php
	$connection=mysql_connect("localhost","root","venky");
	$con2=mysql_select_db("mms");
	if($connection && $con2)
	{
		$connection_status=true;	
	}
	else
	{
		$connection_status=false;
	}
?>
