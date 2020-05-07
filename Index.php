<!DOCTYPE html>
<?php 
session_start();
?>
<html>
<head>
    <title>Question paper generator</title>
    <link type="text/css" rel="stylesheet" href="StyleSheet1.css" />
</head>
<style>
    .bottom {
    /* height :500px; */
    position:  inherit;
    background-color: rgb(31, 104, 117);
    color:white;
    padding: 20px;
    padding-left:40px;
    margin: 10px 0px 0px 0px;
    }
    h4{
        color:white;
        font-size:1.5em;
        font-weight:lighter;
    }
    .boxes{
        padding:10px;
        letter-spacing:1px;
    }
    .foot{
        /* border:1px solid black; */
        letter-spacing:1px;
        color:white;
        padding:20px;
        text-align:center;
        background-color:rgb(26, 83, 93);;
    }
    ol>li{
        margin-top: 10px;
        /* border:1px solid grey; */
    }

    ol>li:first-child {
        margin-top:0;
    }
</style>
<body>

<?php
 include ('header.php');?>

<div class="bottom">
<div class="boxes">
<h4>UNIQUE FEATURES</h4>
<ol>
<li type="square">
It is a customised solution.
</li>
<li type="square">
Generates a set of various types of questions.
</li>
<li type="square">
Having Technical, General Knowledge, English, Mathematics etc..
</li>
<li type="square">
Questions are based on learning objectives.
</li>
<li type="square">
You Can add user defined questions.
</li>

</ol>

</div>
<div class="boxes">
<h4>NEWS & EVENTS</h4>
<ol>
<li type="square">
Date : 7-Mar-2020 Question Paper Generator website launched.
</li>
<li type="square">
Date : 5-Apr-2021 Complimentary membership for ABC customer schools.
</li>
</ol>
</div>

<div class="boxes">
<!-- <marquee  behavior="alternate" width="100%" scrolldelay="200" > -->

<h4>FEEDBACK CORNER</h4>
<!-- </marquee> -->
<u>Teachers Feedback</u>
<ol>
<li type="square">
A brilliant effort!! Would say congratulations ! 
Contains a vivid array of questions and keeps all the testing parameters in view while generating the question paper.
Hats off!  
</li>
<li type="square">
Now we will have lots of time to utilize for other constructive work.</li>
<li type="square">
It is something that we always required.</li>
</ol>
</div>
</div>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>
</body>
</html>
