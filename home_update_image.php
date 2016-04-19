
<?php
$con=mysql_connect("localhost","root","");
$select_db=mysql_select_db("transven",$con);


    
    $postcheck = $_POST['submit'];
    $id = $_REQUEST['updateid']; 

    $image1=$_FILES['UploadImage']['name'];



if(isset($postcheck) && !empty($postcheck))
  {

  $UploadedFileName=$_FILES['UploadImage']['name'];
    if($UploadedFileName!='')
    {
        $upload_directory = "images/"; //This is the folder which you created just now
        $TargetPath=time().$UploadedFileName;
        move_uploaded_file($_FILES['UploadImage']['tmp_name'], $upload_directory.$UploadedFileName);
       

    $query=("UPDATE home_images SET name= '".$image1."' WHERE img_id='".$id."'");


    
    $result=mysql_query($query);
    if($result)
    {
        header("location:adminhome.php");   
    }
  }
}

   
?>