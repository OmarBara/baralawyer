<?php
/**
 * Created by PhpStorm.
 * User: OMAR BARA
 * Date: 26/12/2017
 * Time: 06:31 PM
 */

?>

<!doctype html >
<html>
<img src="under_construction.png" width="100px" height="100px">
<p style="color: red;">Add comment is not working yet Website is under construction yet Please send direct Email from contacts </p>
<div class="col-md-9">

    <form role="form" class="form-horizontal" action="index.php" method="post" >
        <div class="page-header">
            <h2>Add comment</h2>
            <p>leave comment's and request </p>
        </div>

        <div class="form-group">
            <label for="first" class="col-md-3 control-label">*Name</label>
            <div class="col-md-9">

                    <input type="text" class="form-control" name="first" required title="">

            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-md-3 control-label" >*Email</label>
            <div class="col-md-9">

                    <input type="email" class="form-control" name="email" required>

            </div>
        </div>
        <div class="form-group">
            <label for="message" class="col-md-3 control-label">Comments</label>
            <div class="col-md-9">
                
                    <textarea name="message" rows="5" cols="63" title=""> </textarea>


            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>


    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST")
    {if (isset($_POST['first'])&& !empty($_POST['first']) AND isset($_POST["email"])&& !empty($_POST['email'])
        AND isset($_POST["message"])&& !empty($_POST['message']))

        $first = filter_input(INPUT_POST ,'first');
        $email =filter_input(INPUT_POST ,'email',FILTER_VALIDATE_EMAIL) ;
        $message = filter_input(INPUT_POST,'message');
    }//else echo error;
    ?>
</div>

</html>