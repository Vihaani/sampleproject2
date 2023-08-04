<?php
$a=$_POST["n"];
$b=$_POST["o"];
$c=$_POST["g"];
$d=$_POST["m"];
$e=$_POST["e"];
$f=$_POST["p"];
$g=$_POST["s"];
$con=mysql_connect("localhost","root","");
mysql_select_db("newproj01");
mysql_query("insert into class(n,o,g,m,e,p,s) values('$a','$b','$c','$d','$e','$f','$g')");
echo("registered");
include("register.php");
mysql_close($con);
?>
