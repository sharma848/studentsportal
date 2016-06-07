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
		$college_id=$_SESSION['stu_college_id'];
		$query="SELECT branch_name FROM branch_details WHERE college_id='".mysql_real_escape_string($college_id)."'";
		$query_run=mysql_query($query);
		$query_num= mysql_num_rows($query_run);
		if($query_num>0)
		{
			echo "<fieldset align=\"center\" >
					<legend>Select your branch: </legend><form action='add_college_details1.php' method='post'><p><label for='users'>Select Branch:</label>";
	
			$dropdown = "<select name='users'>";
			
			while($query_row=mysql_fetch_assoc($query_run))
			{
				$dropdown .= "\r\n<option value='{$query_row['branch_name']}'>{$query_row['branch_name']}</option>";
	
			}
			$dropdown .= "\r\n</select><br /></p>";
	
			echo $dropdown;
			echo "<br><br><p><input class='formbutton' type='submit' name='filter' value='Submit Data' /></p>";
			echo "</form></fieldset>";
			?>
			
			<hr />
					
			<?php
			if(isset($_POST['users']))
			{
				if(!empty($_POST['users']))
				{
					$branch_name=$_POST['users'];
					$college_name=$_SESSION['stu_college_name'];
					$stu_id=$_SESSION['user_id'];
					$query1="INSERT INTO stu_details VALUES('','".mysql_real_escape_string($stu_id)."','".mysql_real_escape_string($college_name)."','".mysql_real_escape_string($branch_name)."')";
					$query_run1=mysql_query($query1);
					if($query_run1)
					{
						echo '<p align="center"><font color="red">Record entered successfuly!!! | <a href="logged_student.php">Account</a><br></font></p>';
						unset($_SESSION['stu_college_name']);
						unset($_SESSION['stu_college_id']);
					}
					else
					{
						$query2="UPDATE stu_details SET college='".mysql_real_escape_string($college_name)."',branch='".mysql_real_escape_string($branch_name)."'";
						$query_run2=mysql_query($query2);
						if($query_run2)
						{
							echo '<p align="center"><font color="red">Record updated successfuly!!! | <a href="logged_student.php">Account</a><br></font></p>';
						}
						unset($_SESSION['stu_college_name']);
						unset($_SESSION['stu_college_id']);
					}
				}
				else
				{
					echo '<p align="center"><font color="red">All fields are mandatory </font></p>';
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
