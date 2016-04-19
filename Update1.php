<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
</head>
<body>
   <?php 
    include('navbar.php');
   ?>
    <!--MENU SECTION END-->
    <div class="content-wrapper">
      <div class="container">

<br/>
<br/>
<label>
  
Maximum Image Upload Size : 5 Mb ( 5100 x 3400 pixels )

</label>

<form method='POST' action='home_update_image.php' enctype="multipart/form-data">
    <input type='file' name='UploadImage'>
    <?php $id = $_GET['update_id']; ?>
      <input type="hidden" name="updateid" value="<?php echo $id; ?>">

    <br>
    <input type='submit' name="submit" value="submit">

</form>
</body>
</html>
