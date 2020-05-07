<?php
 //session_start();
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
            /* height:280px; */
            /* text-align:center; */
        }

        #strong{
            color:white;
            text-shadow: 1px 1px 2px white, 0 0 25px white, 0 0 5px rgb(31, 104, 117);
            font-size:2.1em;
            text-align:center;
            /* padding-left:100px; */
            padding-bottom:70px;
            padding-top:50px;
        }

        a:link, a:visited {
                background-color:rgb(31, 104, 117);
                color: white!important;
                padding: 12px 20px;
                /* text-align: center; */
                text-decoration: none!important;
                display: inline-block;
                border:1px solid transparent;
                border-radius:5px;
        }

        a:hover, a:active {
            background-color: rgb(26, 83, 93);
            color:white;
        }

        #menu{
            /* border:1px solid black; */
            margin-bottom:20px;
            /* width:900px; */
            /* float: right; */
            /* padding-left:00px; */
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
        }

    /* li{
        list-style:none;
    } */
    </style>
</head>
<body>
<div id="head">
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
    echo "<li> Welcome ".$_SESSION['currentuser']." </li> ";
	}
	else
	{
	 echo "<li> <a href='addpaperuser.php'>CREATE PAPER</a></li>";
     echo "<li> <a href='contact.php'>CONTACT</a></li>";
     echo "<li> <a href='logout.php'>LOGOUT</a></li>";
     echo "<li> Welcome ".$_SESSION['currentuser']."  </li> ";
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