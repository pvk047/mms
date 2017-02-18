<?php
	session_start();
	if(isset($_SESSION['username']) && isset($_SESSION['m_id']) && isset($_SESSION['d_id']))
	{
		$login_entry_status=true;
	}
	else
	{
		$login_entry_status=false;
	}
	
?>
