<?php
		function check_permissions()
		{
			if($_SESSION[permissions][Role] !='admin')
		{
			if($_SESSION[permissions][Role] !='manager')
		{
			if($_SESSION[permissions][Role] != $_SESSION[controller])
		{
			$_SESSION['message'] = "You are not allowed to access this page";
			header('Location: /');
		}
				
		}
		else
		{
			if($_SESSION[controller]!="manager" && $_SESSION[controller]!="staff")
		{
			$_SESSION['message'] = "You are not allowed to access this page";
			header('Location: /');
		}
		}
		}
}
?>