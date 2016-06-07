<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students Portal - Admin Login</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>

<script type="text/javascript" src="js/custom.js"></script>


</head>

<body class="homepage">
<div id="container">
	<div id="header">
    	<h1><a href="#">Students Portal</a></h1>
        
        <div class="clear"></div>
    </div>
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	<li ><a href="index.php">Home</a></li>
			<li><a href="register.php">Register</a></li>
            <li class="selected"><a class="has_submenu" href="">LogIn</a>
            	<ul>
                	<li><a href="login_student.php">Student LogIn</a></li>
                    <li><a href="login_admin.php">Admin LogIn</a></li>
                    
                </ul>
            </li>
            
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
    
    <div id="slides-container">
        <div id="slides">
            <div>
                <div class="slide-image"><img src="images/slide-1.png" alt="Slide #1 image" /></div>
                <div class="slide-text">
                    <h2>LogIn/Register</h2>
                    <p>This portal can be used by students to register themselves and get access to the whole world of new things related to their specifications.</p>

            
                </div>
            </div>
            
            <div>
			<div class="slide-image"><img src="images/slide-1.png" alt="Slide #1 image" /></div>
			<div class="slide-text">
            	<h2>Have access to a number of jobs !</h2>
                <p>Through this portal you can easily search for jobs and various intership at one go. </p>
				<p>You can apply and take the pre interview test through this portal only </p>
                </div>
            </div>
            
            <div>
                <div class="slide-image slide-image-right"><img src="images/slide-3.png" alt="Slide #3 image" /></div>
                <div class="slide-text">
                    <h2>Slide #3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque venenatis sagittis enim. Maecenas ligula erat, egestas congue, varius nec, sagittis nec, purus. In neque. Curabitur at metus tincidunt dui tristique molestie. Donec porta molestie tortor. Fusce euismod consectetuer sapien. Fusce ac velit.</p>

            
                </div>
            </div>
		</div>
        <div class="controls"><span class="jFlowNext"><span>Next</span></span><span class="jFlowPrev"><span>Prev</span></span></div>        
        <div id="myController" class="hidden"><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span><span class="jFlowControl">Slide 1</span></div>
    </div>
        
    <div id="body">
        <div id="breadcrumbs">
            <span>You are here:</span>
            <strong> Admin Login</strong>
        </div>
		
		<?php
			require 'core.php';
			require 'connect_database.php';
			$value='admin';
			if(loggedin($value))
			{
				$name=getfield('name');
			
				echo '<p align="center"><font color="red">You are Logged in '.$name.' | <a href="logout.php">Log Out</a><br></font></p>';
			}
			else
			{
		?>
		<fieldset>
					<legend>LogIn Here !!</legend>
					<form action="login_admin.php" method="post" >		
						<p><label for="username">Username:</label>
						<input name="username" id="username" Placeholder="username" type="text" /><br /></p>
						<p><label for="password">Password:</label>
						<input name="password" id="password" Placeholder="password" type="password" /><br /></p>
						<p><input name="login" class="formbutton" value="Admin LogIn" type="submit" /></p>
					</form>
				</fieldset>
		
		<?php
				if(isset($_POST['username']) && isset($_POST['password']))
				{
					$username=$_POST['username'];
					$password=$_POST['password'];
					if(!empty($username) && !empty($password))
					{
						$password_hash=md5($password);
						$query="SELECT admin_id FROM users_admin WHERE username='".mysql_real_escape_string($username)."' AND password='".mysql_real_escape_string($password_hash)."'";
						if($query_run=mysql_query($query))
						{
							$query_row=mysql_num_rows($query_run);
							if($query_row==0)
							{
								echo '<p align="center"><font color="red"> Invalid Email or Password !!!</font></p>';
							}	
							if($query_row==1)
							{
								$admin_id=mysql_result($query_run,0,'admin_id');
								$_SESSION['admin_id']=$admin_id;
								header('Location: logged_admin.php');
							}
						}
					}
					else
					{
						echo '<p align="center"><font color="red"> All fields are mandatory !!!</font></p>';
					}
				}
			}
		?>
		
		<div id="footer">
      <div class="footer-content">
    
		

    
            <p> Copyright &copy; All rights reserved by <span>StudentsPortal.com</span></p>
     
	</div>
	</div>
</body>
</html>
