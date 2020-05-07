<?php

$host = "localhost";
 $id = "root";
 $pass = "";
 $database = "dbexam";
 $user = "SiteAdmin";
 $errordb="Unable to select database";
 $error = "Unable to connect to the database check again..!!";
$conn = mysqli_connect($host,$id,$pass,$database) or die ($error);
// mysql_select_db($database,$conn)or die ($errordb);
 ?>