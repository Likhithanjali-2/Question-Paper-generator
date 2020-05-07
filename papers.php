<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>users page</title>
	
	<link rel="stylesheet" href="1.css" type="text/css">
		
		<script src="jquery-2.0.3.js">

		</script>
		<style>
	.dropdown {
  position: relative;
  display: inline-block;
}

.dropbtn {
  background-color: steelblue;
  color: black;
  padding: 10px;
  font-size: 20px;
  border: none;
  cursor: pointer;
}

.dropdown-content {
  display: none;
  position: absolute;
  right: 0;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: lightblue;
}

/* referred */
</style>
</head>
	<body>
<?php
 include ('header.php');
?> 
<form action="user_retrive.php" method="POST">
<div id="bottom">
<div id="content">
 <hr>
 <h4>Welcome to ADMIN DASHBORD</h4>
 <hr>
 <div id="menubar">
	<div class="dropdown" style="float:left;">
  		<button class="dropbtn">Users</button>
  		<div class="dropdown-content" style="left:0;">
		  <a href ="users.php">Show Users</a>
		  <a href="delusers.php">Delete users</a>
  		</div>
	</div>
	<div class="dropdown" style="float:left;">
  		<button class="dropbtn">Papers</button>
  		<div class="dropdown-content" style="left:0;">
			<a href ="papers.php">Show papers</a>
			<a href ="addpaper.php">Add paper</a>
  		</div>
	</div>
</div>
<!-- <div id="papers_menu">
</div>
<hr>
</div>
</div> -->

</form>
</body>
</html>
