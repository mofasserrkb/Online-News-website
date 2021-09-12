 
<?php

  session_start();

  if(isset($_SESSION["username"])){
    header("Location: users.php");
  }
?>
<?php
require_once "../vendor/autoload.php";
$login=new App\classes\Login();
if(isset($_POST['login']))
{
 $loginError= $login->loginCheck($_POST);

}

?>


<!doctype html>
<html>
   <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ADMIN | Login</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/css/font/font-awesome-4.7.0/css/font-awesome.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>

    <body>
        <div id="wrapper-admin" class="body-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-offset-4 col-md-4">
                        <img class="logo" src="images/world-news.jpg">
                        <h3 class="heading">Admin</h3>
                        <!-- Form Start -->
                        <form  action="" method ="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="" required>
                            </div>
                            <input type="submit" name="login" class="btn btn-primary" value="login" />
                        </form>
                        <!-- /Form  End -->
                     <?php  if(isset($loginError)) {
                        echo '<div class="alert alert-danger">Username and Password are not matched.</div>';
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>