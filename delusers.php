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
      background-color:rgb(51, 150, 153);
      border-radius:5px;
      color: white;
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

    .dropdown-content a:hover {background-color: gainsboro}

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: rgb(26, 83, 93);
    }
    .dropdown-content a:link, .dropdown-content a:visited {
      text-decoration: none!important;
      color:rgb(26, 83, 93);
    }
    .dropdown:hover>.dropdown-content a:hover {
      color:rgb(26, 83, 93);
    }

    .bottom {
        height :700px;
        position:  inherit;
        background-color: rgb(31, 104, 117);
        color:white;
        padding: 20px;
        padding-left:60px;
        margin: 10px 0px 0px 0px;
    }
    h4{
        color:white;
        font-size:2em;
        margin-left:0%;
        font-weight:lighter;
    }
    .foot{
        letter-spacing:1px;
        color:white;
        padding:20px;
        text-align:center;
        background-color:rgb(26, 83, 93);
    }

	h2{
		margin-top:50px;
		font-weight:lighter;
	}
	#customers {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	#customers td, #customers th {
		border: 1px solid #ddd;
		padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;color:black;}
	#customers tr:nth-child(odd){background-color: white;color:black;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
    background-color: rgb(26, 83, 93);
		color: white;
	}

  .select{
    padding:10px;
    border:none;
    border-bottom:2px solid white;
		background-color: rgb(26, 83, 93);
    color:white;
    letter-spacing:1px;
    font-size:1.1em;
  }
  .select .opt {
    color: white;
    padding: 12px 16px;
    height:100px;
    font-size:1em;
    font-weight:lighter;
    letter-spacing:1px;
    text-decoration: none;
    display: block;
    background-color:rgb(26, 83, 93);
  } 

  .select:focus{
    outline:0;
  }

  .input[type=submit]{
    padding:11px;
    margin-left:10px;
    background-color: rgb(51, 150, 153);
    color:white;
    border:none;
  }

  .input[type=submit]:hover{
    background-color: rgb(26, 83, 93);
    color:white;
  }

	</style>
  

</head>
	<body>
<?php	
 include ('header.php');
?> 

<form action="user_retrive.php" method="POST">
<div class="bottom">
  <h4>Welcome To Adiministrator Panel</h4>
  <div class="menubar">
    <div class="dropdown">
        <button class="dropbtn">Users</button>
        <div class="dropdown-content" style="left:0;">
          <a href ="users.php">Show Users</a>
          <a href="delusers.php">Delete users</a>
        </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Papers</button>
      <div class="dropdown-content" style="left:0;">
        <a href ="add1word.php">Add new short question</a>
        <a href ="addbrief.php">Add new brief question</a>
        <a href ="addmcq.php">Add new MCQ</a>
      </div>
    </div>
  </div>
  <hr>
<?php
    echo "<h2>List of current users..</h2>";
    include ('connection.php');

    $result=mysqli_query($conn ,"Select * from tbuser");
    $rows = mysqli_num_rows($result);
    echo "<table id='customers'>
        <tr> 
          <th>First name</th> 
          <th>Last name</th> 
          <th>Contact</th>
          <th>College</th>
          <th>Board</th>
          <th>Email</th>
          <th>Password</th>
          <th>Address</th>
          <th>Country</th>
          <th>Description</th>
          <th>Type</th>
        </tr>";

    for ($j = 0 ; $j < $rows ; ++$j)
      {
        $row = mysqli_fetch_row($result); 
        echo "<tr>";   
        for ($k = 0 ; $k < 11 ; ++$k) 
        echo "<td>$row[$k]</td>"; 
        echo "</tr>"; 
      }
    echo "</table>"; 
$query = mysqli_query($conn,"SELECT uemail from tbuser"); 
echo "<h4>Please select the email to delete the user</h4>";
echo '<select class="select" name="Email">'; 

while ($row = mysqli_fetch_array($query)) {
   echo '<option style="padding:10px;"><h1>' .$row['uemail']. "</h1></option>";
}

echo '</select>';

?>

<input class="input" type="submit" value="Delete user" name="deluser"/> 

</div>
</div>

</form>
</body>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>
</html>
