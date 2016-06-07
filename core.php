<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
	ob_start();
	@session_start();
	$current_file=$_SERVER['SCRIPT_NAME'];
	
	if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
	{
		$http_referer=$_SERVER['HTTP_REFERER'];
	}
	
	
	// function to check wheather session has been applied to the ongoing session
	function loggedin($name)
	{
		if($name == 'student')
		{
			if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		else if($name == 'admin')
		{
			if(isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		
	}	
	
	// function to get a particular field by just calling it with appropriate parameter
	
	function getfield($field)
	{
		$query="SELECT ".$field." FROM users_student WHERE stu_id=".$_SESSION['user_id']."";
		if($query_run=mysql_query($query))
		{
			if($query_result=mysql_result($query_run,0,$field))
			{
				return $query_result;
			}
			else
			{
				echo 'Not Ok';
			}
		}
	}
	function getbranch($field)
	{
		$query="SELECT ".$field." FROM stu_details WHERE stu_id=".$_SESSION['user_id']."";
		if($query_run=mysql_query($query))
		{
			if(@$query_result=mysql_result($query_run,0,$field))
			{
				return $query_result;
			}
			else
			{
				
			}
		}
	}
	function getcollege($field)
	{
		$query="SELECT ".$field." FROM stu_details WHERE stu_id=".$_SESSION['user_id']."";
		if($query_run=mysql_query($query))
		{
			if(@$query_result=mysql_result($query_run,0,$field))
			{
				return $query_result;
			}
			else
			{
				
			}
		}
	}
	// https://www.facebook.com/shayaan.oshidar/friends?pnref=lhc
?>
</body>
</html>
