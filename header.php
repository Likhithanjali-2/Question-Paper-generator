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
            /* border:1px solid black; */
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
                margin:20px 20px 10px 20px;
        }

        li>a:hover, li>a:active {
            background-color: rgb(26, 83, 93);
            color:white;
        }

        #menu{
            /* border:1px solid black; */
            margin-bottom:0px;
            display: flex;
            flex-direction: row;
            justify-content: flex-end;
            /* display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr; */
            /* width:100px; */
            /* float: right; */
            /* padding-left:00px;
            display: grid;
            flex-direction: column-reverse;
            justify-content: flex-end; */
        }
    </style>
</head>
<div id="head">
<body>
    <div id="strong">QUESTION PAPER GENERATOR</div>


<div id="conetnt" >   
   <?php
  echo "<ul id = 'menu' type='none'>";
  echo "<div><li> <a href='Index.php'>HOME</a></li></div>";
  echo "<div><li><a href='aboutus.php'>ABOUT US</a></li></div>";
   ?>
   <?php
    if(isset($_SESSION['currentuser']))
	{
    if($_SESSION['currentuser']=="admin@exam.com")
	{
    echo "<div><li> <a href='adminoptions.php'>ADMIN OPTIONS</a></li></div>";
    echo "<div><li> <a href='contact.php'>CONTACT</a></li></div>";
    echo "<div><li> <a href='logout.php'>LOGOUT</a></li></div>";
    // echo "<br><div class='user'>Welcome ".$_SESSION['currentuser']."</div>";
	}
	else
	{
	 echo "<div><li> <a href='addpaperuser.php'>CREATE PAPER</a></li></div>";
     echo "<div><li> <a href='contact.php'>CONTACT</a></li></div>";
     echo "<div><li> <a href='logout.php'>LOGOUT</a></li></div>";
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
   <br/>
</body>
</html>