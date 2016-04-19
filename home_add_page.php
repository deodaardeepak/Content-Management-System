

<!DOCTYPE html>
<html>
<head>
<?php
   session_start(); //starts the session
   if($_SESSION['user']){ // checks if the user is logged in  
   }
   else{
      header("location: index.php"); // redirects if user is not logged in
   }
   $user = $_SESSION['user']; //assigns user value
   ?>


 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>ADMIN PANEL</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT CSS -->
     <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css' />

<link rel="stylesheet" type="text/css" href="main.css">
<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
 



</head>
<body>

<section class="sec-menu" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
              <span class="menu-open-icon">  <i class="fa fa-bars pull-left fa-2x b-clr"   ></i> </span>  <i class="pull-right"> Admin Panel </i>   
                </div>
            </div>
        </div>
    </section>
       
    <!--MENU SECTION END-->
  

<div style="padding:50px">
<a href="adminhome.php">Go Back</a>
      <form action="" method="post">
        <input type="hidden" name="articleId" value="<?php echo $results['id']; ?>"/>

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

        

            <label for="type">Page Type</label><br/>
            <input type="text" name="type" id="type" placeholder="Type of the Page" style="width:100%" required autofocus maxlength="255" >
            <label for="title">Page Title</label><br/>
            <input type="text" name="title" id="title" placeholder="Name of the Page" style="width:100%" required autofocus maxlength="255" >
            <br/>        

 
        
            <label for="content">Page Content</label>
            <br/>
            <textarea style="width"name="content" id="content" class="text1" rows="15" placeholder="The HTML content of the page"></textarea>
            <script>
 CKEDITOR.replace( 'content' );
</script>


  
        
        
        <br>
        <div class="buttons">
          <input type="submit" name="Add Page" value="Add Page" />
         
        </div>

      </form><br>
      <a href="adminhome.php"><input type="submit" formnovalidate name="cancel" value="Cancel" /></a>
</div>
 

<script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>




<?php


if($_SERVER["REQUEST_METHOD"] == "POST"){

$type=$_POST['type'];
$title=mysql_real_escape_string($_POST['title']);
$content=mysql_real_escape_string($_POST['content']);



mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("transven") or die(mysql_error());
if(!empty($_POST['title']) && ($_POST['content'])){
mysql_query("INSERT INTO home_content (title,content,publicationDate,type) VALUES ('$title','$content',NOW(),'$type')");
}


}


?>

