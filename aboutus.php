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
    .box>p{
        color:white;
        font-size:1.3em;
        letter-spacing:1px;
        font-weight:lighter;
    }
    h4{
        color:white;
        font-size:1.5em;
        font-weight:lighter;
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
    <h1>ABOUT US!</h1>
    <div class = "box">
    <p>The Right Click Solutions is well diversified infrastructural industrial conglomerate in India.
    Over the decades it has maintained its salience with leadership in its chosen line of businesses - Engineering and Construction, Cement, Private Hydropower, Hospitality, Real Estate Development, Expressways and Highways and Education.
    </p>
    <p>
    Right Click Solutions is an ISO 9001-2008 certified company and is an Infotech arm of the diversified Right solutions Group. The address of registered office of RCS is:
    Head office : 403,Arun soc ,Near Om Super Market
    </p>
    <p>
    As a leading player in the education content development segment, RCS had pioneered - "Bhartiyavidya" -India's first digital-classroom-teaching aid that is facilitating the teaching process in over 650 schools across the country and overseas.
    </p>
    <p>
    Bhartiyavidya is a content rich, high quality multimedia based pioneering effort in the area of computer aided classroom teaching that helps the teacher explain difficult concepts in subjects like science, mathematics and social sciences through the aid of visual capsules inside the classroom. Bhartiyavidya solution encompasses a digital library of over 3500 capsules of about 3 minutes duration.
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
