


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="main.css">
<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>


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




<style>

</style>
</head>
<body>
   
    <!--LOGO SECTION END-->
     <section class="sec-menu" >
        <div class="container">
            <div class="row">
                <div class="col-md-12">
              <span class="menu-open-icon">  <i class="fa fa-bars pull-left fa-2x b-clr"   ></i> </span>  <i class="pull-right"> Admin Panel </i>   
                </div>
            </div>
        </div>
    </section>
       <div id="side-menu"  >

        <ul  >
             <li style="border-bottom:0px;">
             <a href="#" title="close"> <i class="fa fa-close fa-2x menu-close-icon b-clr"></i></a>
            </li>
            <li>
             <a href="index.html" title="Dashboard"> <i class="fa fa-home fa-2x "></i> </a>
            </li>
            <li>
              <a href="ui.html" title="UI Elements"> <i class="fa fa-plug fa-2x "></i>  </a>
            </li>
            <li>
              <a href="forms.html" title="Forms"><i class="fa fa-rocket fa-2x "></i>  </a>
            </li>
             <li>
              <a href="blank.html" title="Blank Page"> <i class="fa fa-volume-off fa-2x "></i>  </a>
            </li>
            
        </ul>
           
    </div>
    <!--MENU SECTION END-->
    <div class="content-wrapper">
      <div class="container">





</br>
      <form action="home_update.php" method="post">
      
           <?php $id=$_GET['id'];  
            include('conn.php');

            $query="SELECT * FROM home_content WHERE id='$id'";
            $result=mysql_query($query);
            $rows=mysql_fetch_array($result);
           ?>

            <label for="title">Page Title</label><br/>
            <input type="textbox" s
            tyle="width:100%" value="<?php echo $rows['title'] ; ?>" >
           
            <input type="hidden" name="updateid" value="<?php echo $id; ?>">
            <br/>        

 
        
            <label for="content">Page Content</label>
            <br/>
            <textarea name="content" id="content" class="text1" rows="15" placeholder="The HTML content of the page"><?php echo $rows['content']; ?></textarea>
            <script>
           CKEDITOR.replace( 'content' );
            </script>
  
        
        

        <div class="buttons">
        <br>
          <input type="submit" name="saveChanges" value="Save Changes" />
         
        </div>

      </form>
 <a href="adminhome.php"><input type="submit" formnovalidate name="cancel" value="Cancel" /></a>
</div>
        </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                   &copy; 2016 Transven.com |<a href="http://www.binarytheme.com/" target="_blank"  > </a> 
                </div>

            </div>
        </div>
    </section>
      <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
     <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>