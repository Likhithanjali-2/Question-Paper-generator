<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Digitalized question paper</title>
	<link rel="stylesheet" href="1.css" type="text/css">
	<script src="jquery-2.0.3.js"></script>
	<style>
			.bottom {
                height :500px;
                position:  inherit;
                background-color:white;
                color:black;
                padding: 20px;
                padding-left:60px;
                margin: 10px 0px 0px 0px;
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
	$type="Multiple choice questions";
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
    $count=0;
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
                $count+=1;
				echo"<tr>";
				echo"<td>";
				$val = $_REQUEST[$num];
                echo "$count. $val";
				echo"</td>";
				echo"</tr>";
			}
		}
		echo "</table >";
	}
	else if ($qtype=="tbqbrief")
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
                $count+=1;
				echo"<tr>";
				echo"<td>";
				$val = $_REQUEST[$num];
                echo "$count. $val";
				echo"</td>";
				echo"</tr>";
			}
		}
		echo "</table >";


		// $result=mysqli_query($conn,"Select * from tbqbrief where subid=$subid");
		// echo "</table>";
		// echo"<table border='0' align='center' width='800'>";
		// echo "<tr><td>Answer the $type:</td></tr>";
        // echo "<br>";
		// while($row = mysqli_fetch_assoc($result))
		// {
        //     $num = $row['bid'];
		// 	if(isset($_REQUEST[$num]))
		// 	{
        //         $count+=1;
		// 		echo"<tr>";
		// 		$val = $_REQUEST[$num];
		// 		echo"<td>";
        //         echo "$count. $val";
		// 		echo"</td>";
		// 		echo"<br>";
		// 		echo"</tr>";
        //     }
        // echo "</table >";
        // }
    }
    else
	{
		$result=mysqli_query($conn,"Select * from tbqmcq where subid=$subid");
		echo "</table>";
		echo"<table border='0' align='center' width='800'>";
		echo "<tr><td>Answer the $type:</td></tr>";
        echo "<br>";
        while($row = mysqli_fetch_assoc($result)){
            $num = $row['mcqid'];
			if(isset($_REQUEST[$num]))
			{
                $count+=1;
				echo"<tr>";
                $val = $_REQUEST[$num];
                echo"<td>";
                echo "$count. $val";
                echo"</td>";
                echo"<td>";
                echo "A) ".$row["mcqanswer1"] ."     B) ". $row["mcqanswer2"] ."     C) ". $row["mcqanswer3"] ."     D) ". $row["mcqanswer4"];
                echo"</td>";
                echo"</tr>";
                echo"<br>";
			}
		}
		echo "</table >";
    }
	?>
    <button id="submit" onclick="myFunction()">Print</button>
	<script>
		function myFunction()
		{
			window.print();
		}
	</script>
</div>
</body>
</html>