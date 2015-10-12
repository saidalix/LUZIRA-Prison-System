<?php
//connection to the database
$contact = mysql_connect("localhost", "root", "");
mysql_select_db("prison_db", $contact);
//get data
$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['tel'];
$d = $_POST['email'];
$e = $_POST['message'];

//insert into the table
$sql = "insert into contact_tb(id,name,tel,email,message) values('$a', '$b', '$c' , '$d' , '$e')";
$res = mysql_query($sql);
 if($res){
 echo "thanks you go back";
 }else{
 	echo "Error Check your administration";

 }



?>