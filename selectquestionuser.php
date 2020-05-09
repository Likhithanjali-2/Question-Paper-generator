<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Add paper</title>
	<link rel="stylesheet" href="1.css" type="text/css">
	<script src="datetimepicker_css.js"></script>	
	<script src="jquery-2.0.3.js"></script>
	<style>.bottom {
                /* height :500px; */
                position:  inherit;
                background-color: rgb(31, 104, 117);
                color:white;
                padding: 20px;
                padding-left:60px;
                margin: 10px 0px 0px 0px;
            }
            h4{
                color:white;
				font-weight:lighter;
				font-size:1.2em;
				letter-spacing:1px;
			}
			.p{
				color:white;
				font-weight:lighter;
				font-size:1.1em;
				letter-spacing:1px;
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
			.foot{
				letter-spacing:1px;
				color:white;
				padding:20px;
				text-align:center;
				background-color:rgb(26, 83, 93);
			}
			#submit{
                background-color:rgb(51, 150, 153);
                color: white;
                border-radius: 30px;
                width:100px;
                height:30px;
                font-size: 1.2em;
                border:1px solid transparent;
				margin-left: 900px;
				margin-top:30px;
                margin-bottom: 80px;
            }
            #submit:hover{
                background-color: rgb(26, 83, 93);
                color:white;
                border:none;
            }

            #submit:focus{
                outline: 0;
            }
	</style>
</head>
<body>
<?php	
 include ('header.php');
?> 


<form action="questionPaperTemplate.php" method="POST">
<div class="bottom"> 
	<?php
	$subid=$_POST["subid"];
	$_SESSION['sub_id']=$subid;
	if($subid==1)
	echo "<span p class='p'>You have selected the Maths subject</span>";
	else
	echo "<p class='p'>You have selected the English subject</p>";

	echo"<br>";
	$qtype=$_POST["qtype"];
	echo "<input type='hidden' name='qtype' value='$qtype'>";

	if($qtype=="tbq1word")
	echo "<span class='p'>You have selected one word questions</span>";
	else if($qtype=="tbqbrief")
	echo "<span class='p'>You have selected one brief questions</span>";
	else
	echo "<span class='p'>You have selected one MCQ questions</span>";

	echo"<br>";

	$noofquestions=$_POST["txtquestion"];
	echo "<input type='hidden' name='noofquestions' value='$noofquestions'>";

	echo "<span class='p'>Total number of questions are : $noofquestions</span>";

	echo"<br>";
	$totmarks=$_POST["txtmarks"];
	echo "<input type='hidden' name='totmarks' value='$totmarks'>";
	echo "<span class='p'>Total marks are : $totmarks</span>";
	echo"<br>";

	$time=$_POST["txttime"];
	echo "<span class='p'>The time of examination is :$time</span>";
	echo "<input type='hidden' name='time' value='$time'>";

	echo"<br>";
	$date=$_POST["edate"];
	echo "<input type='hidden' name='date' value='$date'>";

	echo "<span class='p'>The date of examination is :$date</span>";
	echo"<br><br>";

	include ('connection.php');

	echo "<h4>List of questions..</h4>";

	if($qtype=="tbq1word")
	{
	$result=mysqli_query($conn,"Select * from tbq1word where subid=$subid");

	$rows = mysqli_num_rows($result);
	echo "<table id='customers'>
			<tr> <th>Sr No</th>
				 <th>Question</th> 
				 <th>Answer</th>
				 <th>Selected question</th>
			</tr>";

	for ($j = 0 ; $j < $rows ; ++$j)
		{
			$row = mysqli_fetch_array($result); 
			echo "<tr>";   
			echo "<td>".$row['wordid']."</td>";
			echo "<td>".$row['wquestion']."</td>";
			echo "<td>".$row['wanswer']."</td>";
			echo "<td><input type='checkbox' name='$row[wordid]' value='$row[wquestion]'></td>";
			echo "</tr>"; 
		}
	echo "</table>";
	}

	else if($qtype=="tbqbrief")
	{

	$result=mysqli_query($conn,"Select * from tbqbrief where subid=$subid");

	$rows = mysqli_num_rows($result);
	echo "<table id='customers'><tr> <th>Sr No</th> <th>Question</th> <th>Answer</th><th>Selected question</th></tr>";

	for ($j = 0 ; $j < $rows ; ++$j)
		{
			$row = mysqli_fetch_array($result); 
			echo "<tr>";   
			echo "<td>".$row['bid']."</td>";
			echo "<td>".$row['bquestion']."</td>";
			echo "<td>".$row['banswer']."</td>";
			echo "<td><input type='checkbox' name='$row[bid]' value='$row[bquestion]'></td>";
			echo "</tr>"; 
		}

	echo "</table>";

	}
	else
	{
	$result=mysqli_query($conn,"Select * from tbqmcq where subid=$subid");

	$rows = mysqli_num_rows($result);
	echo "<table id='customers'><tr> <th>Sr No</th> <th>Question</th> <th>Option1</th><th>Option2</th><th>Option3</th><th>Option4</th><th>Selected ans</th></tr>";

	for ($j = 0 ; $j < $rows ; ++$j)
		{
			$row = mysqli_fetch_array($result); 
			echo "<tr>";   
			echo "<td>".$row['mcqid']."</td>";
			echo "<td>".$row['mcqquestion']."</td>";
			echo "<td>".$row['mcqanswer1']."</td>";
			echo "<td>".$row['mcqanswer2']."</td>";
			echo "<td>".$row['mcqanswer3']."</td>";
			echo "<td>".$row['mcqanswer4']."</td>";
			echo "<td><input type='checkbox' name='$row[mcqid]' value='$row[mcqquestion]'></td>";
			echo "</tr>"; 
		}

	echo "</table>";
	}

	?>
	<input id="submit" type="submit" value="Submit" />
</div>
</form>
</body>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>

</html>
