<?php
session_start();
?>
<html>
<head>
    <title>users page</title>
	<link rel="stylesheet" href="1.css" type="text/css">
	<script src="jquery-2.0.3.js"></script>
	<style>
	.dropdown {
      position: relative;
      display: inline-block;
    }

    .dropbtn {
      background-color: rgb(51, 150, 153);
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
        height :500px;
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
	.p{
        font-size:1.2em;
        font-weight:lighter;
        letter-spacing:1px;
        border:1px solid white;
        text-align:center;
        padding:20px;
        color:white;
        border-radius:5px;
        width:33%;
        margin-left:33%;
    }
	</style>
</head>
<body>

<form action="oneinsert.php" method="POST">
	
<?php	

 include ('header.php');
?> 
<div class="bottom">
  <h4>Welcom To Adinistrator Panel</h4>
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
$question = $_POST['txtquestion'];
$answer= $_POST['txtanswer'];
include ('connection.php');
$email=$_SESSION['currentuser'];
$subid=$_POST["subid"];
$_SESSION['sub_id']=$subid;
$query ="SELECT max(BID) FROM tbqbrief";
$result = mysqli_query($conn,$query) or die ("Error in query: $query. " .mysqli_error());
$row = mysqli_fetch_row($result);
$max= $row[0];
$id=$max+1;
if($subid==1){
	$select="INSERT INTO tbqbrief VALUES('$id','$question','$answer','$email','1')";
if (!mysqli_query($conn,$select)){
	die('Error: ' . mysqli_error($conn));
}else
 echo "<p class='p'>1 question is added</p>";
}
else{
	$select="INSERT INTO tbqbrief VALUES('$id','$question','$answer','$email','2')";
	if (!mysqli_query($conn,$select))
 	{
 		die('Error: ' . mysqli_error($conn));
 	}else
 		echo "<p class='p'>1 question is added</p>";
}
?>
</div></body>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>
</html>
