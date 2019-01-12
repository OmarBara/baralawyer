 <!--* Created by PhpStorm.
 * User: OMAR BARA
 * Date: 26/12/2017
 * Time: 06:31 PM-->

<!doctype html >
<html>
<!--<img src="under_construction.png" width="100px" height="100px">
<p style="color: red;">Add comment is not working yet Website is under construction yet Please send direct Email from contacts </p>-->
<div class="col-md-9">

    <form role="form" class="form-horizontal" action="Ar.php" method="post" align="right">
        <div class="page-header" >
            <h2>إضافــة تعليق</h2>
           <!-- <p>اضافة طلبات او تعليقات </p>-->
        </div>

        <div class="form-group">
            <label for="first" class="col-md-3 control-label">الاسـم*</label>
            <div class="col-md-9">
                    <input type="text" class="form-control" name="first" required title="">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-md-3 control-label" >البريد الالكتروني*</label>
            <div class="col-md-9">

                    <input type="email" class="form-control" name="email" required>

            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-md-3 control-label">التعليق</label>
            <div class="col-md-9">
                    <textarea name="message" rows="5" cols="69" title=""> </textarea>

            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-primary">إدخال</button>
            </div>
        </div>


    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (isset($_POST['first'])&& !empty($_POST['first']) AND isset($_POST["email"])&& !empty($_POST['email'])
        AND isset($_POST["message"])&& !empty($_POST['message']))

        // santization input

        $first = filter_input(INPUT_POST ,'first');
        $email =filter_input(INPUT_POST ,'email',FILTER_VALIDATE_EMAIL) ;
        $message = filter_input(INPUT_POST,'message');

        $first =htmlspecialchars($first);
        $email =htmlspecialchars($email);
        $message=htmlspecialchars($message);

        $connection =mysqli_connect('localhost','root','','uzerz');
        if (mysqli_connect_error())
        {echo "unable to connect";
            die(mysqli_connect_error());
        }

        $sql="INSERT INTO `feedbackz` (`id`, `namez`, `emailz`, `commentz`) 
           VALUES (NULL, '$first', '$email', '$message');";

        mysqli_query($connection, $sql);

//close connection
// close the database connection
        mysqli_close($connection);

    }//else echo error;
    ?>
</div>

</html>