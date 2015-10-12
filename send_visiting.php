<?php
//connection to the database
$luzira = mysql_connect("localhost", "root", "");
mysql_select_db("prison_db", $luzira);
//get data
$a = $_POST['id'];
$b = $_POST['fname'];
$c = $_POST['sname'];
$d = $_POST['dob'];
$e = $_POST['phone'];
$f = $_POST['nationality'];
$g = $_POST['adress'];
$h = $_POST['email'];
$i = $_POST['gender'];
$j = $_POST['mater'];
$k = $_POST['id_doc'];

//insert into the table
$sql = "INSERT INTO visiting_tb
(id,fname,sname,dob,phone,nationality,adress,email,gender,mater,id_doc) values('$a', '$b', '$c', '$d' ,'$e','$f','$g','$h','$i','$j','$k')";
$done = mysql_query($sql);
if($done){
echo "thanks you go back";
 }else{
 	echo "Error Check your administration";

 }
?>