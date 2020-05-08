<!-- <?php
// $email=$_POST["email"];
// $msg=$_POST["text"];
// $msg = wordwrap($msg,10);
// ini_set("SMTP","localhost");
// ini_set("smtp_port","25");
// ini_set("sendmail_from","00000@gmail.com");
// ini_set("sendmail_path", "C:\wamp\bin\sendmail.exe -t");
// mail("likhithanjali.b.tech@gmail.com","My Subject",$msg,"From: $email\n");
?> 
<?php
include ('connection.php');
$selected_email = $_POST['Email'];
$query="DELETE FROM tbuser where uemail= '$selected_email'";
$result=mysqli_query($conn,$query) or die("<p class='p'>Unable to delete record</p>");
echo $selected_email."<p class='p'> is deleted from the accounts..!!</p>";
?>