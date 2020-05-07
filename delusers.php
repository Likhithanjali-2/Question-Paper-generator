<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>users page</title>
		<link rel="stylesheet" href="1.css" type="text/css"/>
		  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="jquery.timepicker.js"></script>
  <link rel="stylesheet" type="text/css" href="jquery.timepicker.css" />
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
<?php
echo "<h4><u>List of current users..</u></h4>";
include ('connection.php');

$result=mysqli_query($conn,"Select * from tbuser");
$rows = mysqli_num_rows($result);
echo "<table border='1'><tr> <th>Fname</th> <th>Lname</th> <th>Contact</th><th>Collg</th><th>board</th><th>Email</th><th>Paswd</th><th>Address</th><th>Country</th><th>Desc</th><th>Type</th></tr>";
for ($j = 0 ; $j < $rows ; ++$j)
	{
		$row = mysqli_fetch_row($result); 
		echo "<tr>";   
		for ($k = 0 ; $k < 11 ; ++$k) 
		echo "<td>$row[$k]</td>"; 
		echo "</tr>"; 
	}
echo "</table>"; 
echo "<hr>";
$query = mysqli_query($conn,"SELECT uemail from tbuser"); 
echo "<h4>Please select the email to delete the user</h4>";
echo '<select name="Email">'; 

while ($row = mysqli_fetch_array($query)) {
   echo "<option>" .$row['uemail']. "</option>";
}

echo '</select>';

		 ?>

<input type = "submit" value="Delete user" name="deluser"/> 
<hr>
</div>
</div>

</form>
</body>
</html>
