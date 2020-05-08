<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Users Page</title>
    <style>
    .bottom {
        height :300px;
        position:  inherit;
        background-color: rgb(31, 104, 117);
        color:white;
        padding: 20px;
        padding-left:60px;
        margin: 10px 0px 0px 0px;
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
    .foot{
        letter-spacing:1px;
        color:white;
        padding:20px;
        text-align:center;
        background-color:rgb(26, 83, 93);
    }
	</style>
</head>
<body>
<?php
include ('header.php');
include ('connection.php');

$email=$_POST["email"];
$msg=$_POST["text"];
echo "<div class='bottom'>";
$query="INSERT INTO usercontact VALUES ('$email', '$msg')";
 if (mysqli_query($conn,$query))
 {
 echo "<p class='p'>Sent your data successfully..!!</p>";
 }
 else
 {
  die(mysqli_error($conn));
 }
mysqli_close($conn);
echo "</div>";
?>
</body>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>
</html>