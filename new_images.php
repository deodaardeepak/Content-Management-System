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
   <?
   include('navbar.php');



   ?>
    <!--LOGO SECTION END-->
     <div class="content-wrapper">
      <div class="container">

<br/>
<br/>
<label>
  
Maximum Image Upload Size : 5 Mb ( 5100 x 3400 pixels )

</label>
<form method='POST' action='upload1.php' enctype="multipart/form-data">
    <select name="type" id="type">
      <option name="slider">slider</option>
      <option name="gallery">gallery</option>
    </select>

    <br>
    <br>
    <input type='file' name='UploadImage'>
    <br>
    <input type='submit' name="submit" value="submit">

</form>
    
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
