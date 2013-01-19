<?php 
  session_start();
  require_once("assets.php");

  /**
  * LOGIN stuff
  */
  if (isset($_POST["username"]) && isset($_POST["passwort"])) {
    if(!Login($_POST["username"], $_POST["passwort"]))
    {
        $loginError = "Falsches Passwort oder Username!";
    }
  }
?>  
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login to publish Audio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>

  <body>

    

      <?php 
        if(!isset($_SESSION["login"]) || $_SESSION["login"] == false)
        {
          include 'assets/template/login.tpl';
        }
        else if (isset($_SESSION["login"]) || $_SESSION["login"] == true) {
          include 'assets/template/admin.tpl';
        }
      ?>

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $( document ).ready( function() {
        $('#sampleFile').change(function() {
          $('#sampleFileIco').html('<img src="assets/img/accepted.png" alt="accepted">');
          check();
        });
        $('#fullFile').change(function() {
          $('#fullFileIco').html('<img src="assets/img/accepted.png" alt="accepted">');
          check();
        });

        $('#titel').keyup(function() {
          $(this).change();
        });

        $('#titel').change(function() {
          if ($('#titel').val().length >= 5) {
            $('#titelIco').html('<img src="assets/img/accepted.png" alt="accepted">');
          }
          else{
            $('#titelIco').html('<img src="assets/img/cross.png" alt="not accepted">');
          };
          check();
        });
      });


      function check () {
        var enableSave = true;
        if($('#sampleFile').val() == '') { 
          enableSave = false;
        }
        if($('#fullFile').val() == '') { 
          enableSave = false;
        }
        if($('#titel').val().length < 5) { 
          enableSave = false;
        }
        if (enableSave) {
            $('#saveBeat').addClass('btn-primary');
            $('#saveBeat').removeAttr('disabled');
        };
        if (!enableSave) {
          $('#saveBeat').attr('disabled','disabled');
          $('#saveBeat').removeClass('btn-primary');
        };
      }
    </script>
  </body>
</html>


