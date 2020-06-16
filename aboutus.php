<!DOCTYPE html>
<?php
session_start();
?>
<html>
<head>
    <title>About Us</title>
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
    .box>p{
        color:white;
        font-size:1.1em;
        letter-spacing:1px;
        font-weight:lighter;
    }
    #h4{
        color:white;
        font-size:2em;
        font-weight:lighter;
        margin-left:470px;
    }
    .box{
        border:2px solid white;
        border-radius:19px;
        padding:20px;
        margin-left:180px;
        margin-bottom:50px;
        width:700px;
        height:auto;
        letter-spacing:1px;
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
    <h1 id="h4">ABOUT US!</h1>
    <div class = "box">
    <p>
    Existing system is a manual one in which users are maintaining books to store the information like Student Details,Instructor Details,Schedule Details and feedback about students who attempted the exam as per schedule.. It is very difficult to maintain historical data. 
    </p>
    <p>
    This application is used to conduct online examinations. The students can sit at individual terminals and login to write the exam in the given duration. . The questions have to be given to the students.This application will perform correction, display the result immediately and also store it in the database. This application provides the administrator with a facility to add new exams.This application provides the  Instructor  add questions to the exam, modify questions in the exam in a particular exam. This application takes care of authentication of the administrator, Instructor as well as the student.
    </p>
    <p>
    The project is aimed at developing a website for the “FACULTY” of the college. This can be accessed and effectively used throughout the organization with proper login enabled. This system can be used as an application for the Faculty in the college to manage the Examination. To conduct any quiz or any examinations question papers are mandatory. Faculty members put time consumed efforts to prepare question papers. The proposed “QUESTION PAPER GENERATOR”, simplify this process. The Online Digital Question paper helps to create the examination question paper. It takes required data as input from the user such as questions, marks, subject name etc. Users can view the designed paper. This project is developed with HTML, CSS, JavaScript  for frontend and PHP , MySQL for backend. 
    </p>
    <p>Developed by A.LIKHITHANJALI for any queries contact by feedback or email to liki2444@gmail.com  
    </p>
    </div>
    <!-- <div class='about'>
      <h3>AboutUs</h3>
      <div class="paragraph">
        <p>Address:<br>
          11-11/111,Kakinda,Andhra pradesh,India.</p>
        <p>Phone:<br>
          9876543210/9234543210</p>
        <p>Email:<br>
          liki2444@gmail.com
        </p>
      </div>
    </div> -->
</div>
<div class="foot">
    Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
</div>
</body>
</html>
