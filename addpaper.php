<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Add paper</title>
		<link rel="stylesheet" href="1.css" type="text/css"/>
		  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />


  

</head>
	<body>
<?php	

 include ('header.php');
?> 
<form action="selectquestion.php" method="POST">
<div id="bottom">


<div id="content">
 <hr>
 <h4>Welcome to ADMIN DASHBORD</h4>
 <hr>
<div id="menubar">
			<div id="menu1" class="menu_single_container"> <div class="padded_menu">Users</div> 
				<div id="drop1" class="drop">
					<ul>
						<li><a href ="users.php">Show Users</a></li>
						<li><a href ="delusers.php">Delete users</a></li>
					</ul>
				</div>
			</div>	
			<div id="menu2" class="menu_single_container"> <div class="padded_menu">Papers</div> 
				<div id="drop2" class="drop">
					<ul>
						<li><a href ="papers.php">Show papers</a></li>
						<li><a href ="#">Add paper</a></li>
						<li>Delete paper</li>
						
					</ul>
				</div>
			</div>
		
			</div>
<hr/>
<INPUT TYPE="button" VALUE="Add new one word question" ONCLICK="location.href='add1word.php'"/>
<INPUT TYPE="button" VALUE="Add new brief question" ONCLICK="location.href='addbrief.php'"/>
<INPUT TYPE="button" VALUE="Add new MCQ question" ONCLICK="location.href='addmcq.php'"/>
</form>
</body>
</html>
