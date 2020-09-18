<?php
$email=$_GET['email'];
$password=$_GET['password'];
$file=fopen("credential.txt","r") or die("Unabe to open file");
$val1=substr(fgets($file),0,-2); // to cut the '\n' for everyline except the last line of document
$val2=fgets($file);//LAST LINE
if($email)
{
    if($val1==$email && $val2==$password)
{   
    echo '<script>alert("Welcome Siddharth")</script>'; 
}
else
{
    echo '<script>alert("Access Denied")</script>'; 
}
}
?>