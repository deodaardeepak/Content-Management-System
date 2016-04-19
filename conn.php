<?php


$host  ="localhost";
$username="root";
$password="";
mysql_connect($host,$username,$password);

$conn = mysql_select_db("transven");
if(!$conn){
  die("error".mysql_error());
}

?>
