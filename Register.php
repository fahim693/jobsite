<?php
session_start();
if(isset($_SESSION['user'])!="")
{
    header("Location: index.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
    $uname = mysqli_real_escape_string($conn,$_POST['uname']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $upass = md5(mysqli_real_escape_string($conn,$_POST['pass']));

    if(mysqli_query($conn,"INSERT INTO user(userPass,userName,userEmail) VALUES('$upass','$uname','$email')"))
    {

?>

<script>alert('successfully registered ');</script>
<?php
    }
    else
    {
?>
<script>alert('error while registering you...');</script>
<?php
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Login & Registration System</title>

        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" type="text/css">

        <!-- Optional theme -->


        <!-- Latest compiled and minified JavaScript -->


    </head>
    <body>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">

                        <!--                        LOGIN-->

                        <form class="form-horizontal" role="form" method="post" action="login.php">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">          
                                    <input type="password" name="pass" class="form-control" id="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="checkbox">
                                        <label><input type="checkbox"> Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" name="btn-login" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>
        <center>
            <h2>Registration</h2>
            <div id="login-form">
                <form method="post" class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Full Name:</label>
                        <div class="col-sm-10">
                           <input type="text" name="uname" class="form-control" placeholder="Full Name" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" placeholder="Your Email" required />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" name="pass" class="form-control" placeholder="Your Password" required />
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="btn-signup" class="btn btn-default">Register</button>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="#" data-toggle="modal" data-target="#myModal"><button type="submit" name="btn-signup" class="btn btn-default">Sign me in</button></a>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <a href="index.php"><button type="submit" name="btn-signup" class="btn btn-default">Go Home</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </center>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>