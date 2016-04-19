<?php
$con=mysql_connect("localhost","root","");
$select_db=mysql_select_db("transven",$con);
$postcheck = $_POST['submit'];
$type=$_POST['type'];
if(isset($postcheck) && !empty($postcheck))
	{
    $types=array('image/jpg','image/jpeg','image/png','image/gif' );
		$UploadedFileName=$_FILES['UploadImage']['name'];
		if (in_array($_FILES['UploadImage']['type'], $types)) 
    {
      	$upload_directory = "images/"; //This is the folder which you created just now
    		$TargetPath=time().$UploadedFileName;
    		if(move_uploaded_file($_FILES['UploadImage']['tmp_name'], $upload_directory.$UploadedFileName))
    		{    
          		$Query="INSERT INTO home_images (`name`, `type`) VALUES ('$UploadedFileName','$type')"; 
        		  $res=mysql_query($Query);
        		  if($res)
              {
                header("location:adminhome.php");
              }
    		}
      }
		
   else {
// Error, filetype not supported
    echo "file type not supported.Please use valid extension";
}

	} 
// else
// {

// 	//
// 	header("location: browse.php");
// }

 // post check submit
  
?>
