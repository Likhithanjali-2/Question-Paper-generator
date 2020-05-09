<!DOCTYPE html>
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
	input[type=text] {
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
                width:100px;
                height:30px;
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
            input:focus{
                outline: 0;
            }
            .buttons{
                margin-top:30px;
            }
			.box{
                border:2px solid transparent;
                background-color:white;
                border-radius:19px;
                padding:20px;
                margin-top:30px;
                margin-left:180px;
                margin-bottom:50px;
                width:700px;
                height:auto;
                letter-spacing:1px;
                text-align:center;
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
/* referred */
</style>
</head>
<body>	
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
<form action="briefinsert.php" method="POST" class="box">
	<span>Select the subject :</span>
		<select class="select" style="margin-left:51px;" name="subid">
			<option class="opt" value="1">Maths</option>
			<option class="opt" value="2">English</option>
	</select>
	<input type="text" size="100" name="txtquestion" placeholder="Enter the Brief question.."><br>
	<input type="text" size="100" name="txtanswer" placeholder="Enter the prefered answer.."><br>
	<div class="buttons">
    	<input id="submit" type="submit" value="Add Question" />
    </div>
	</form>
</div>
</body>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>
</html>
