<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>Sign up page</title> 
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
    .contact{
        margin-left:30%;
        margin-top: 30px;
        margin-bottom: 30px;
    }
    ::placeholder { 
        color: white;
        opacity: 1; 
    }
    #input {
        font-size: 15px;
        font-weight: lighter;
        width: 380px;
        height: 30px;
        border: 1px solid white;
        border-radius: 5px;
        margin-bottom: 30px;
        background-color: transparent;
        color: white;
    }
    .send{
        border-radius: 30px;
        width:100px;
        height:30px;
        font-size: 1.2em;
        background-color: transparent;
        border:1px solid white;
        color: white;
        margin-left: 43%;
    }
    .send:hover{
        /* background-color: white;
        color: rgb(18, 15, 27); */
        background-color: rgb(26, 83, 93);
        color:white;
        border:none;
    }
    .send:focus{
        outline: 0;
    }
    #input2{
        font-size: 15px;
        font-weight: lighter;
        width: 380px;
        height:100px;
        border: 1px solid white;
        border-radius: 5px;
        /* margin-bottom: 30px; */
        background-color: transparent;
        color: white;
    }

    input,textarea:focus{
    outline: 0;
    }

    .box>p{
        color:white;
        font-size:1.3em;
        letter-spacing:1px;
        font-weight:lighter;
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
        background-color:rgb(26, 83, 93);;
    }

    </style>
</head>
<body>
<?php
 include ('header.php');?>

<div class="bottom">
    <form action="send.php" method="post">
    <div class='contact'><h4>ContactUs</h4>
      <input type="text" name="email" placeholder="Your Email Address" id="input" /><br>
      <textarea id="input2" name="text" rows="4" cols="100" placeholder="Write Your Message Here ..."></textarea>
    </div>
    <button class="send">Send</button>
    </form>
</div>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>
</body>
</html>
