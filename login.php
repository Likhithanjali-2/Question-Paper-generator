<?php include 'header.php';?>
<html>
    <head>
        <title>Login Here!!</title>
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
            h1{
                color:white;
                font-size:1.5em;
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
                height:250px;
                letter-spacing:1px;
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
            input{
                outline:0;
            }
            .login{
                background-color:rgb(31, 104, 117);
                color: white;
                border-radius: 30px;
                width:100px;
                height:30px;
                font-size: 1.2em;
                border:1px solid transparent;
                margin: 30px;
                margin-bottom: 30px;
            }
            .login:hover{
                background-color: rgb(26, 83, 93);
                color:white;
                border:none;
            }
            .login:focus{
                outline: 0;
            }
            form>a:link, form>a:visited{
                text-decoration: none!important;
                color:rgb(31, 104, 117);
            }
            form>a:hover{
                color:rgb(26, 83, 93);
                font-size:1.1em;
                background-color:ghostwhite;
            }
        </style>
        <script type="text/javascript">
          function validateLogin()
          {
              var uname=document.forms[login][uname].value;
              if(email==null || password=='')
              {
                  alert("Enter Username ");
                  return false;
              }
          }
        </script>
    </head>
	<div class="bottom">
	    <h1>LOGIN HERE!</h1>    
        <div class="box">
            <form name="login" action="login_process.php" method="post" class="form" onsubmit="return validateLogin()">
                <input type="text" name="email" placeholder="Email"><br>
                <input type="password" name="password" placeholder="Password"><br>
                <input  type="submit" value="Login" class="login"><br>
                <a href="contactadmin.php">Forgot Password</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="Signup.php">New User</a>
            </form>
        </div>
	</div>  
    <div class="foot">
        Made With <img src="Vector.svg"> By CSE Techies Of KIET-W
    </div>
</html>