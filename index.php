
<!DOCTYPE html>
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


      </br>

      </br>
      
      </br>

<!--

<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>


-->



<div class="col-md-6 col-sm-6 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           LOGIN FORM
                        </div>
                        <div class="panel-body">
      <form action="login.php" method="post" >
        <input type="hidden" name="login" value="true" />

<?php if ( isset( $results['errorMessage'] ) ) { ?>
        <div class="errorMessage"><?php echo $results['errorMessage'] ?></div>
<?php } ?>

      
            <div class="form-group">
        
            <label>Username</label>
            <input type="text"class="form-control" name="username" id="username" placeholder="Your admin username" required autofocus maxlength="20" />
          
          </div>

          </br>
          <div class="form-group">
        
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Your admin password" required maxlength="20" />
        
          </div>


           <label for="chkShowPassword">
                <input type="checkbox" id="chkShowPassword" />
                Show password</label>


      </br>

        <div class="buttons">
          <input type="submit"class="btn btn-danger"  name="submit" value="Login" align="center"/>
        </div>



        

        </br>

      </form>

      </div>
      </div></div>


                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#chkShowPassword").bind("click", function () {
            var txtPassword = $("#password");
            if ($(this).is(":checked")) {
                txtPassword.after('<input onchange = "PasswordChanged(this);" id = "txt_' + txtPassword.attr("id") + '" type = "text" class="form-control" value = "' + txtPassword.val() + '" />');
                txtPassword.hide();
            } else {
                txtPassword.val(txtPassword.next().val());
                txtPassword.next().remove();
                txtPassword.show();
            }
        });
    });
    function PasswordChanged(txt) {
        $(txt).prev().val($(txt).val());
    }
</script>
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