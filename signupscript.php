<html>
<head>
  <title>Users Signed</title>
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
 echo "<div class='bottom'>";
 
 $Fname=$_POST["Fname"];
 $Lname=$_POST["Lname"];
 $contact=$_POST["contact"];
 $collg=$_POST["collg"];
 $board=$_POST["board"];
 $email=$_POST["email"];
 $passwd=$_POST["password"];
 $address=$_POST["address"];
 $country=$_POST["country"];
 $desc=$_POST["desc"];
 $type=$_POST["type"];
 
 // $query="SELECT uid FROM tbuser";
 // $result = mysql_query($query,$conn);

// while($row = mysql_fetch_array($result))
  // {
  // $uidvar= $row['uid'] ;
  // }
  // $uidvar=$uidvar+1;
 
 $query="INSERT INTO tbuser VALUES('$Fname','$Lname','$contact','$collg','$board','$email','$passwd','$address','$country','$desc','$type')";
 if (mysqli_query($conn,$query))
 {
 echo "<p class='p'>Congrats "."$Fname"." "."$Lname"."  Now you are the registred user..!!</p>";
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
