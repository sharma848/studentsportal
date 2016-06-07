<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students Portal - Add Details</title>
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
        	
			<li ><a href="logged_student.php">Account</a></li>
            <li class="selected" ><a  href="add_college_details.php">Update college Details</a></li>
			<li><a  href="logout.php">Logout</a></li>
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
			<div class="slide-image"><img src="images/slide-2.png" alt="Slide #1 image" /></div>
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
        </div>
		<br><br><br><br><br>
		
<?php
	require 'core.php';
	require 'connect_database.php';
	if(!loggedin('student')) {
		header('Location: index.php');
	}else
	{
		
		
		$query="SELECT college_name FROM college_details ";
		$query_run=mysql_query($query);
		$query_num= mysql_num_rows($query_run);
		if($query_num>0)
		{
			echo "<fieldset align=\"center\" >
					<legend>Select your college: </legend><form action='add_college_details.php' method='post'><p><label for='users'>Select College:</label>";
	
			$dropdown = "<select name='users'>";
			
			while($query_row=mysql_fetch_assoc($query_run))
			{
				$dropdown .= "\r\n<option value='{$query_row['college_name']}'>{$query_row['college_name']}</option>";
	
			}
			$dropdown .= "\r\n</select><br /></p>";
	
			echo $dropdown;
			echo "<br><br><p><input class='formbutton' type='submit' name='filter' value='submit' /></p>";
			echo "</form></fieldset>";
			?>
			
			<hr />
					
			<?php
			if(isset($_POST['users']))
			{
				if(!empty($_POST['users']))
				{
					$college_name=$_POST['users'];
					$_SESSION['stu_college_name']=$college_name;
					$query1="SELECT college_id FROM college_details WHERE college_name='".mysql_real_escape_string($college_name)."'";
					$query_run1=mysql_query($query1);
					$query_num=mysql_num_rows($query_run1);
					if($query_num==1)
					{
						$query_result1=mysql_result($query_run1,0,'college_id');
						$college_id=$query_result1;
						$_SESSION['stu_college_id']=$college_id;
						header('Location: add_college_details1.php');
					}
					else
					{
						echo '<p align="center"><font color="red">Some error occured!!!<br></font></p>';
					}
				}
				else
				{
					echo 'all fields are mandatory';
				}
			}
			
	
		}
	}
?>
<br>
<div id="footer">
      <div class="footer-content">
    
		

    
            <p> Copyright &copy; All rights reserved by <span>StudentsPortal.com</span></p>
     
	</div>
	</div>
</body>
</html>
