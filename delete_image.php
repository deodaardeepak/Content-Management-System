<?php

mysql_connect("localhost","root","");

mysql_select_db("transven") or die(mysql_error());
// get value of id that sent from address bar 
$id=$_GET['delete_id'];
// Delete data in mysql from row that has this id 
$sql="DELETE FROM home_images WHERE id='$id'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
echo "Deleted Successfully";
echo "<BR>";
header("Location: adminhome.php");
}

else {
echo "ERROR";
}
?> 

<?php
// close connection 
mysql_close();
?>