<?php
/**
 * Created by PhpStorm.
 * User: OMAR BARA
 * Date: 17/01/2018
 * Time: 06:32 PM
 */
//include "header.php";
session_start();
//$_SESSION["error"]='';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="law firm">
    <meta name="author" content="bara">

    <title>Libya , Tripoli Lawyer Firm: Bara law firm</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-frontpage.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">Welcome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Ar.php">Arabic</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<!-- Header with Background Image -->
<header class="business-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="display-3  text-white mt-4">Dr.Mohamed Bara</h1> <!--text-center-->
            </div>
        </div>
    </div>
</header>

<body>
<div id="container">
    <div id="row">
        <br><br>
        <h2>Login</h2>
     <?php
     echo $_SESSION["error"];
     echo '<br><form class="form-horizontal" action="loginn.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="firstname">User Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Enter ser Name" name="username" required>
                </div></div>';

     echo '<div class="form-group">
      <label class="control-label col-sm-2" for="firstname">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control"  placeholder="Enter Password" name="password" required>
      </div></div>';
     echo '<div class="col-sm-offset-2 "><button type="submit" class="btn btn-primary col-4">Login</button></div>
</form>';
//echo $_SESSION['login'];

 echo '</div></div></body>';
echo '<div class="row"></div>';
 echo "<hr>";
 //include 'footer.php';


if (isset($_POST['username']) && isset($_POST['password']))
   {
      $username = trim($_POST['username']);
       $password = trim($_POST['password']);

// input sanitation TODO


       if ($username =="BaraDr" && $password =="Bara311")
       {    // connect to DB to chek password and username
           // open new session
           //include 'adminz.php';
           //exit();
           $_SESSION["loggedIn"] = true;
           header("location: adminz.php");
       }
        else {//echo 'invalid entry';
            $_SESSION["error"]= '<p style="color: red;"> Wrong username/Password</p>';
            header("location: loginn.php");
            exit;
       }
    }


?>


<footer class="py-5 bg-dark">
    <div class="container">
        <h5 style="color: white"> Folow Us:</h5>
        <a href="https://www.facebook.com/Dr.Mohamed.Bara"><i class="fa fa-facebook-official" style="font-size:36px"></i></a>
        &nbsp;&nbsp;&nbsp;<a href="https://twitter.com/drbara1"><i class="fa fa-twitter" style="font-size:36px"></i></a>
        <p class="m-0 text-center text-white">Copyright &copy;<abbr title="Email"><a href=mailto:Omar@ymail.com">Omar Bara 2018</a></abbr></p>
    </div>
    <!-- /.container -->
</footer>


</html>