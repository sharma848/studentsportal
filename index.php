<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Students Portal - Home</title>
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
        	<li class="selected"><a href="index.php">Home</a></li>
			<li><a href="register.php">Register</a></li>
            <li><a class="has_submenu" href="">LogIn</a>
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
            <strong>Home</strong>
        </div>
            
		<div id="content">
            <div class="box">
                <h2>Introduction</h2>
					
            <p>This is a mini assignment. 
Context:
(un)hiring is a networking platform for college students where they come for various activities
like job search, competitions, latest news updates etc. 
There are two types of users on the platform:
1. Students
2. Admin
Brief Description:
1. Create admin & student account
2. Capture Degree & College  details of students 
The students are studying in a college who are coming to this platform for various activities.
We need to capture their college and degree details.
 
Detailed Description:
 
1. Admin should be able to add colleges and the degrees available in each college.
These should be saved in the database. There should be options for CRUD (Create,
Read, Update/Edit, Delete) for a particular college. Admin can be an already
registered entity with password “admin123” .
2.  A student should be able to register with a full name, email and a password and
confirm password field. The student should be able to login via email and password
after registration.
3. The html page on login should have the following
Hello,  {{name}}
You are from {{College Name}} and pursuing {{Degree Name}}
A button to change the college and degree details, and a button to toggle the color of
the text above from blue to black
4. For the frontend design part, choose anything from your own intuition that doesn’t
look bad. The content of the page is just 2 lines of text right now.
5. On a student’s first login, you need to prompt the user through a modal to update his
college and degree details. If the college or degree name are not present for the
student in the db than the second line should not appear at all.
6. The user chooses a college from a few thousand colleges that we can have in our
database by typing some relevant letters in an autocomplete field (but be careful not
to fetch everything in the memory before hand because it can become be a large
network overhead over time and increase loading time) 
7. Based on his college selection, we also see the available degrees for that particular
college and upon selection and submit, we save them for the user and also update
the second line.
8. Once a user has submitted these fields, he should no longer be prompted to fill those
details but users who close the prompt box (modal) should see it on every login until
they fill it</p>	
            
            
    
        <div id="footer">
      <div class="footer-content">
    
		

    
            <p> Copyright &copy; All rights reserved by <span>StudentsPortal.com</span></p>
     
	</div>
	</div>
	



            
        
 

</body>
</html>
