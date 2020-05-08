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
	  <style type="text/css">
            .bottom {
                /* height :500px; */
                position:  inherit;
                background-color: rgb(31, 104, 117);
                color:white;
                padding: 20px;
                padding-left:60px;
                margin: 10px 0px 0px 0px;
            }
            h2{
                color:white;
				font-weight:lighter;
				text-align:center;
            }
            .box{
                border:2px solid transparent;
                background-color:white;
                border-radius:19px;
                padding:20px;
                margin-left:180px;
                margin-bottom:50px;
                width:700px;
                height:auto;
				letter-spacing:1px;
				/* padding-left:10%; */
                text-align:center;
            }
            .foot{
                letter-spacing:1px;
                color:white;
                padding:20px;
                text-align:center;
                background-color:rgb(26, 83, 93);
            }
            input[type=text],input[type=password] {
                width: 70%;
                padding: 12px 20px;
                margin: 8px 0;
                box-sizing: border-box;
                border: none;
                border-bottom: 2px solid rgb(26, 83, 93);
            }
            
            #submit{
                background-color:rgb(31, 104, 117);
                color: white;
                border-radius: 30px;
                width:150px;
                height:40px;
                font-size: 1.2em;
                border:1px solid transparent;
                /* margin: 30px; */
                margin-bottom: 30px;
            }
            #submit:hover{
                background-color: rgb(26, 83, 93);
                color:white;
                border:none;
            }

            #submit:focus{
                outline: 0;
			}
			form span{
				color:black;
				font-size:1.3em;
			}
            form>a:link, form>a:visited{
                text-decoration: none!important;
            }
            form>a:hover{
                color:rgb(26, 83, 93);
                font-size:1.1em;
                background-color:ghostwhite;
            }
            #input2{
                font-size: 15px;
                font-weight: lighter;
                width: 470px;
                height: 50px;
                border-bottom:2px solid rgb(26, 83, 93);;
                background-color: transparent;
                color: black;
                padding-left:20px;
                margin-top:10px;
            }

            input,textarea:focus{
                outline: 0;
            }

            .radio{
                color:black;
                margin-top:30px;
                margin-right:330px;
            }
            .buttons{
                margin-top:30px;
            }
            #reset{
                margin-left:50px;
			}
			.select{
				/* padding-left:80px; */
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

			input[type=date]{
				background-color:rgb(26, 83, 93);
				color:white;
				padding:5px;
				border:none;
			}
        </style>
</head>
	<body>
<?php	
 include ('header.php');
//  include ('connection.php');
?> 

<form action="selectquestionuser.php" method="post">       
<div class="bottom">
	    <h2>Enter your requirements</h2>    
        <div class="box">
            <form name="login" action="signupscript.php" method="post" class="form" onsubmit="return validateLogin()">
				<span style="margin-left:10px;">Select the subject :</span>
				<select class="select" style="margin-left:51px;" name="subid">
					<option class="opt" value="1">Maths</option>
					<option class="opt" value="2">English</option>
				</select>
				<br><br>
				<span style="margin-right:50px;">Select the question type:</span>
				<select class="select" style="margin-right:20px;" name="qtype">
					<option class="opt" value="tbq1word">One Word</option>
					<option class="opt" value="tbqbrief">Brief</option>
					<option class="opt" value="tbqqmcq">MCQ</option>
				</select>	

                <input type="text" name="txtmarks" placeholder="Enter total number of marks:"><br>
                <input type="text" name="txtquestion" placeholder="Enter total number of questions"><br>
				<input type="text" id="basicExample" name="txttime" placeholder="Enter the time of examination:"><br>
				<script>
                	$(function() {
                    	$('#basicExample').timepicker();
                	});
            	</script>
				<br>
				<span style="margin-right:20px;">Enter the date of examination:</span>
				<input style="margin-right:10px;" type="date" name="edate" placeholder="Enter the date of examination:"><br>
                <div class="buttons">
                <input id="submit" type="submit" value="Select Questions" />
                </div>
            </form>
    </div>
</div>  
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>

<!--  
<form action="selectquestionuser.php" method="POST">
<div id="bottom">


<div id="content">
 <hr>
 
<hr/>
<div id="papers_menu">

</div>
<table border="1" align ="center">
	<tr>
		<td colspan="2" align="center"><b>QUESTION PAPER DETAILS</b> </td>
	</tr>
	<tr>
		<td>Select the subject :</td>
		<td>
		<select name="subid">
			<option value="1">Maths</option>
			<option value="2">English</option>
		</select>	
		</td>		
	</tr>	
		<tr>
		<td>Select the question type:</td>
		<td>
		<select name="qtype">
			<option value="tbq1word">One Word</option>
			<option value="tbqbrief">Brief</option>
			<option value="tbqqmcq">MCQ</option>
		</select>	
		</td>		
	</tr>
	
	<tr>
		<td>Enter total number of marks:</td>
		<td><input type="text" name="txtmarks"/></td>
	</tr>
	<tr>
		<td>Enter total number of questions:</td>
		<td><input type="text" name="txtquestion"/></td>
	</tr>		
	<tr>
		<td>Enter the time of examination:</td>
		<td>    <div class="demo">
                <p><input id="basicExample" name="txttime" type="text" class="time" /></p>
            </div>

            <script>
                $(function() {
                    $('#basicExample').timepicker();
                });
            </script>
	</td>
	</tr>
	<tr>
		<td>Enter the date of examination:</td>
		<td><input type="date" name="edate"/></td>
	</tr>
	<tr>
	<td colspan="2" align="center"><input type="submit"value="Select questions"/></td>
	</tr>

</div>

</form> -->
</body>
</html>
