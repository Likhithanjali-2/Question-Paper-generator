<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Question paper page</title>
	<link rel="stylesheet" href="1.css" type="text/css">
	<script src="jquery-2.0.3.js"></script>
	<style>
			.bottom {
                /* height :500px; */
                position:  inherit;
                background-color: rgb(31, 104, 117);
                color:white;
                padding: 20px;
                padding-left:60px;
                margin: 10px 0px 0px 0px;
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
?> 
<div class="bottom">
	<?php
	include ('connection.php');
	$subid=$_SESSION['sub_id'];
	if($subid=='1')
	{
	$subject="Maths";
	}
	else
	{
	$subject="English";
	}


	$qtype=$_POST["qtype"];
	if($qtype=='tbq1word')
	{
	$type="One word questions";
	}
	else if($qtype=='tbqbrief')
	{
	$type="Brief questions";
	}
	else
	{
	$type="Multiple choise questions";
	}
	$noofquestions=$_POST["noofquestions"];
	$totmarks=$_POST["totmarks"];
	$time=$_POST["time"];
	$date=$_POST["date"];

	echo "<table border='0' align='center' width='800'>";
	echo"<tr>";
	echo"<td>Subject :$subject</td>";

	echo"<td colspan='2'></td>";

	echo"<td align='right'>Marks : $totmarks</td>";
	
	echo"</tr>";

	echo"<tr>";
	echo"<td>&nbsp;</td>";

	echo"<td colspan='2'></td>";
	echo"<td align='right'>Date :$date</td>";
	
	echo"</tr>";
	echo"<tr>";
	echo"<td>&nbsp;</td>";

	echo"<td colspan='2'></td>";
	echo"<td align='right'>Time :$time</td>";
	
	echo"</tr>";

	echo"<tr>";
	echo"<td>&nbsp;</td>";
	echo"<td colspan='2'>&nbsp;</td>"; 
	echo"<td>&nbsp;</td>"; 

	echo"</tr>";


	if ($qtype=="tbq1word")
	{
		$result=mysqli_query($conn,"Select * from tbq1word where subid=$subid");
		echo "</table>";
		echo"<table border='0' align='center' width='800'>";
		echo "<tr><td>Answer the $type:</td></tr>";
		echo "<br>";
		while($row = mysqli_fetch_assoc($result))
		{
			$num = $row['wordid'];
			if(isset($_REQUEST[$num]))
			{
				echo"<tr>";
				echo"<td>";
				$val = $_REQUEST[$num];
				echo $val;
				echo"</td>";
				echo"</tr>";
			}
		}
		echo "</table >";
	}
	else if ($qtype="tbqbrief")
	{
		$result=mysqli_query($conn,"Select * from tbqbrief where subid=$subid");
		echo "</table>";
		echo"<table border='0' align='center' width='800'>";
		echo "<tr><td>Answer the $type:</td></tr>";
		echo "<br>";
		while($row = mysqli_fetch_assoc($result))
		{
			$num = $row['bid'];
			if(isset($_REQUEST[$num]))
			{
				echo"<tr>";
				echo"<td>";
				$val = $_REQUEST[$num];
				echo $val;
				echo"</td>";
				echo"</tr>";
			}
		}
		echo "</table >";
	}
	else
	{
		$result=mysqli_query($conn,"Select * from tbqmcw where subid=$subid");
		echo "</table>";
		echo"<table border='0' align='center' width='800'>";
		echo "<tr><td>Answer the $type:</td></tr>";
		echo "<br>";
		while($row = mysqli_fetch_assoc($result))
		{
			$num = $row['mcqid'];
			if(isset($_REQUEST[$num]))
			{
				echo"<tr>";
				echo"<td>";
				$val = $_REQUEST[$num];
				echo $val;
				echo"</td>";
				echo"</tr>";
			}
		}
		echo "</table >";
	}
	?>
	<button onclick="myFunction()">Print this page</button>
	<script>
		function myFunction()
		{
		window.print();
		}
	</script>
</div>
</body>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>

</html>