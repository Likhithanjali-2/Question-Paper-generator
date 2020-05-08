<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>users page</title>
	<style>
	.bottom {
        height :500px;
        position:  inherit;
        background-color: rgb(31, 104, 117);
        color:white;
        padding: 20px;
        padding-left:60px;
		margin: 10px 0px 0px 0px;
		text-align:center;
    }
    .foot{
        letter-spacing:1px;
        color:white;
        padding:20px;
        text-align:center;
        background-color:rgb(26, 83, 93);
    }

	h2{
		margin-top:50px;
		letter-spacing:1px;
		font-weight:lighter;
		color:white;
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
	</style>
</head>

<body>
<?php	

 include ('header.php');
?> 
<div class="bottom">
	<h2>Forget Password ?</h2>
	<p class='p'>PLEASE CONTACT ADMINISTRATOR FOR NEW PASSWORD AT liki2444@gmail.com</p>
</div>
</body>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>
</html>
