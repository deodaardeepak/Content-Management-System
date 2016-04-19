<?php

mysql_connect("localhost","root","");
mysql_select_db("transven") or die(mysql_error());


//echo "sharik".$_POST['updateid'];exit;

$content= $_POST['content'];
$id =$_POST['updateid'];



$sqll="UPDATE home_content SET content= '$content' WHERE id='$id'";
$result=mysql_query($sqll);

if($result){
header("location:adminhome.php");
}
else
{
	echo "update failed";
}

?>

