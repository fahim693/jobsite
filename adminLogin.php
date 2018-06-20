<?php
session_start();
include_once 'dbconnect.php';

if(isset($_POST['btn-login']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $upass = mysqli_real_escape_string($conn,$_POST['pass']);
    if($email=='admin@admin.com' && $upass=='admin'){
        header('Location: admin.php');
    }
}?>

<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
         <link rel="stylesheet" href="style.css" type="text/css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    </head>

    <body>
        <center>
            <h2>Admin Login Page</h2><hr>
            <div id="login-form">
                <form method="post" class="form-horizontal" role="form">          
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
                            <button type="submit" name="btn-login" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </center>
    </body>
</html>

