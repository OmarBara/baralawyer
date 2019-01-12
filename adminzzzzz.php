<?php
session_start();
/**
 * Created by PhpStorm.
 * User: OMAR BARA
 * Date: 05/02/2018
 * Time: 12:35 PM
 */
/*if($_SESSION["loggedIn"] != true)
{
    echo("Access denied!");
    exit();
}*/
//echo("Enter my lord!");
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
                    <a class="nav-link" href="#">Home
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
<br>
<div class="container">
    <!--<div class="row">-->
        <div class="jumbotron" align="right">
            <h2 dir="rtl">صفحة الادمن الرئيسي</h2>
            <!--log out-->
            <div >
                <form action="adminz.php" method="post" >
                     <button type="submit" class="btn btn-primary" value="logoutz" name="logoutz">هنا</button> لتسجيل الخروج اضغط
                </form>
            </div>
        </div>
        </div>


 <!--function conncet to db-->
<?php
//-1
$sdn='mysql:host=localhost;dbname=uzerz';
try {
    $db = new PDO ($sdn, 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT); // the default mode

//-3
    $sql='SELECT * from feedbackz ';
    $result=$db->query($sql);

//-4
    while ($row = $result->fetch()) {
        echo $row['id'] . " - " . $row['namez'] . "<br/>";
    }
//-5
    $db = null;
//-2
}
catch (PDOException $e){
    die( $e->getMessage());
}



//logout
if (isset($_POST['logoutz']) && !empty($_POST['logoutz']))

{ echo 'wewew';
    $_SESSION = array();
// Destroy the session.
    session_destroy();
// Redirect to login page
    header("location: index.php");
    exit;
}
?>

</body>


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
