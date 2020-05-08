<?php
//  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Question paper generator</title>
    <link type="text/css" rel="stylesheet" href="StyleSheet1.css" />
    <style>
        #head {
            background-image: url('header.jpg');
            width:100%;
        }

        #strong{
            color:white;
            text-shadow: 1px 1px 2px white, 0 0 25px white, 0 0 5px rgb(31, 104, 117);
            font-size:2.1em;
            text-align:center;
            padding-bottom:70px;
            padding-top:50px;
        }

        li>a:link, li>a:visited {
                background-color:rgb(31, 104, 117);
                color: white!important;
                padding: 12px 20px;
                /* text-align: center; */
                text-decoration: none!important;
                display: inline-block;
                border:1px solid transparent;
                border-radius:5px;
        }

        li>a:hover, li>a:active {
            background-color: rgb(26, 83, 93);
            color:white;
        }

        #menu{
            /* border:1px solid black; */
            margin-bottom:0px;
            /* width:900px; */
            /* float: right; */
            /* padding-left:00px; */
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }
        /* .user{
            margin-left:70%;
            margin-top:35px;
            margin-right:20px;
            font-size:1em;
            font-weight:bold;
            color:black;
            float:right;
        } */

    /* li{
        list-style:none;
    } */
    </style>
</head>
<div id="head">
<body>
    <div id="strong">QUESTION PAPER GENERATOR</div>


<div id="conetnt" >   
    <div id = "menu">
   <?php
	 
  echo "<ul type='none'>";
  echo "<li> <a href='Index.php'>HOME</a></li>";
  echo "<li><a href='aboutus.php'>ABOUT US</a></li>";
   ?>
   <?php
    if(isset($_SESSION['currentuser']))
	{
    if($_SESSION['currentuser']=="admin@exam.com")
	{
    echo "<li> <a href='adminoptions.php'>ADMIN OPTIONS</a></li>";
    echo "<li> <a href='contact.php'>CONTACT</a></li>";
    echo "<li> <a href='logout.php'>LOGOUT</a></li>";
    // echo "<br><div class='user'>Welcome ".$_SESSION['currentuser']."</div>";
	}
	else
	{
	 echo "<li> <a href='addpaperuser.php'>CREATE PAPER</a></li>";
     echo "<li> <a href='contact.php'>CONTACT</a></li>";
     echo "<li> <a href='logout.php'>LOGOUT</a></li>";
    //  echo "<br><div class='user'>Welcome ".$_SESSION['currentuser']."</div>";
	}
	}
	else 
	{
    echo "<li> <a href='contact.php'>CONTACT</a></li>";
    echo "<li> <a href='login.php'>LOGIN</a></li>";
	}
	?>
    </ul>

</div>
</div>
   <br/>
</body>
</html>