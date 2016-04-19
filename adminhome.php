<?php

mysql_connect("localhost","root","");

mysql_select_db("transven") or die(mysql_error());

?>


<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
  <?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: index.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   ?>

	<style>
table { 
padding: 80px;
color: #333; /* Lighten up font color */
font-family: Helvetica, Arial, sans-serif; /* Nicer font */
width: 100%; 
border-collapse: 
collapse; border-spacing: 0; 
text-align: center;
}

td, th { border: 1px solid #CCC; height: 30px;text-align: center; } /* Make cells a bit taller */

th {
	text-align: center!important;
background: #F3F3F3; /* Light grey background */
font-weight: bold; /* Make sure they're bold */
}

td {
background: #FAFAFA; /* Lighter grey background */
text-align: center; /* Center our text */
}





ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

</style>
</head>
<body>
<?php 
include('navbar.php');

?>
<br> 
<h2><a href="logout.php">logout</a></h2>
<div style="padding:50px!important">







<h3>Upload a Video</h3>
<a href="uploadVideos.php">Add a new Video</a>



<table>
  <tr>
<th width="10%">Video</th>   
<th width="70%">Name</th>




<th width="10%">Delete</th>
</tr>
<?php
include('conn.php'); 
$query1="SELECT * FROM video";
$result=mysql_query($query1);
while ($rows=mysql_fetch_array($result))
{
    $videoname =    $rows['video_name'];
    ?>
<td>
  <video width="100" height="100" src="test_upload/<?php echo $videoname ?>" />
 </td>
 <td> <?php echo $rows['video_name']?> </td>

<td> <a href="home_delete_video.php?id=<?php echo $rows['v_id']; ?>"><input type="button" value="Delete" class="btn btn-danger" width="100%"></a> </td>


  </tr>

<?php }  ?>
<!--<script>
function delete_id(v_id)
{
     if(confirm('Sure To Remove This Record ?'))
     {

        window.location.href='home_delete_video.php';
     }
}
  
}
</script>
-->
  
</table>


























<div>














<h3>Blog Images </h3>

<a href="home_new_images.php">Add a new Image</a>


<br>
<br>
<table>
  <tr>
<th width="10%">Image</th>   
<th width="70%">Name</th>



<th width="10%">Change</th>

<th width="10%">Delete</th>
</tr>
<?php
include('conn.php'); 
$query1="SELECT * FROM home_images";
$result=mysql_query($query1);
while ($rows=mysql_fetch_array($result))
{
    $imagename =    $rows['name'];
    ?>
<td>
  <img width="100" height="100" src="images/<?php echo $imagename ?>" />
 </td>
 <td> <?php echo $rows['name']?> </td>
<td> <a href="javascript:update_id(<?php echo $rows['img_id'];?>)"><input type="button" value="Update" class="btn btn-danger" width="100%"></a> </td>

<td> <a href="javascript:delete_id(<?php echo $rows['img_id'];?>)"><input type="button" value="Delete" class="btn btn-danger" width="100%"></a> </td>

<script>
function delete_id(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='home_delete_image.php?delete_id='+id;
     }
}
function update_id(id)
{
     
        window.location.href='home_update_image_form.php?update_id='+id;
     
}
</script>

  </tr>

<?php }  ?>

  
</table>
</div>


<!-- yruururu6    -->

<div style="padding:50px" class="contain" id="home" name="home">


<h3><p>Content of Home</p></h3>
<a href="home_add_page.php"> Add a new narrative</a>
<table >
  
  <tr>
   

<th width="10%">Date</th>


<th width="70%">Title</th>

<th width="10%">Edit</th>

<th width="10%">Delete</th>





  </tr>
<?php 
$sql="select * from home_content";
$result = mysql_query($sql);


while($row = mysql_fetch_array($result)){?>

  <tr>
    
<td><?php echo $row['publicationDate'];?></td>


<td><?php echo $row['title'];?></td>



<td> <a href="home_edit_content.php?id=<?php echo $row['id'];?>"><input type="button" value="Edit" class="btn btn-danger" width="100%"></a> </td>

<td> <a href="javascript:delete_id_na(<?php echo $row['id'];?>)">Delete</a> </td>

<script>
function delete_id_na(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='home_delete_content.php?delete_id='+id;
     }
}
</script>

  </tr>

<?php }  ?>

  
</table>

</div>
<!-- gallery content -->


<div style="padding:50px!important">

<h3>Images for gallery </h3>

<a href="home_new_images.php">Add a new Image</a>
<br>
<br>
<table>
  <tr>
<th width="10%">Image</th>   
<th width="70%">Name</th>



<th width="10%">Change</th>

<th width="10%">Delete</th>
</tr>
<?php
include('conn.php'); 
$query1="SELECT * FROM home_images where type='Blog2'";
$result=mysql_query($query1);
while ($rows=mysql_fetch_array($result))
{
    $imagename =    $rows['name'];
    ?>
<td>
  <img width="100" height="100" src="images/<?php echo $imagename ?>" />
 </td>
 <td> <?php echo $rows['name']?> </td>
<td> <a href="javascript:update_id(<?php echo $rows['img_id'];?>)"><input type="button" value="Update" class="btn btn-danger" width="100%"></a> </td>

<td> <a href="javascript:delete_id(<?php echo $rows['img_id'];?>)"><input type="button" value="Delete" class="btn btn-danger" width="100%"></a> </td>

<script>
function delete_id(id)
{
     if(confirm('Sure To Remove This Record ?'))
     {
        window.location.href='delete_image.php?delete_id='+id;
     }
}
function update_id(id)
{
     
        window.location.href='home_update_image_form.php?update_id='+id;
     
}
</script>

  </tr>

<?php }  ?>

  
</table>
</div>


<br>
<br>
<br>
<br>



</body>
</html>