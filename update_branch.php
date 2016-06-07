<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students Portal - Update Branch Data</title>
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
        	
			<li ><a href="add_college.php">Add College</a></li>
			<li ><a href="add_branch.php">Add Branch</a></li>
            <li ><a  href="view_college.php">View College Data</a></li>
			<li class="selected"><a  href="update_college.php">Update College</a></li>
			<li><a  href="delete_college.php">Delete College</a></li>
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
            <strong>Updating Branch Data</strong>
        </div>
    
<?php
	require 'core.php';
	require 'connect_database.php';
	
	if(!loggedin('admin'))
	{
		header('Location: index.php');
	}
	else
	{
		if(isset($_SESSION['collegeid']) && isset($_SESSION['collegename']))
		{
			$collegename=$_SESSION['collegename'];
			$collegeid=$_SESSION['collegeid'];
			echo '<p align="center"><font color="red"> College ID Found Valid <br><br> </font></p>';
	?>
					
					<fieldset align="center" >
						<legend>Update College Name:</legend>
						<form action="update_branch.php" method="post" >
							<p><label for="college_name_update">Enter College Name:</label>
							<input name="college_name_update" value="<?php if(isset($collegename)){ echo $collegename; } ?>" type="text" /><br /></p>
							<p><input  class="formbutton" value="update" type="submit" /></p>
						</form>
					</fieldset>
					
					
					<?php
					if(isset($_POST['college_name_update']))
					{
						if(!empty($_POST['college_name_update']))
						{
							$college_name_update=$_POST['college_name_update'];
							
							$query="UPDATE college_details SET college_name='".mysql_real_escape_string($college_name_update)."' WHERE college_id='".mysql_real_escape_string($collegeid)."'";
							if($query_run=mysql_query($query))
							{
								echo '<p align="center"><font color="red"><br /><br /> College Details Updated Successfully !!!  | <a href="update_college.php">Update College</a><br><br></font></p>';
								header('Location: update_college.php');
								
							}
							else
							{
								echo '<p align="center"><font color="red"><br /><br /> Some Error Occured !!!!<br><br> </font></p>';
							}
						}
						else
						{
							echo '<p align="center"><font color="red"><br /><br /> All Feilds are mandatory!!! <br> </font></p>';
						}
					}
			}
	}
?>
</div>
<div id="footer">
      <div class="footer-content">
    
    
            <p> Copyright &copy; All rights reserved by <span>StudentsPortal.com</span></p>
     
	</div>
	</div>
</body>
</html>
