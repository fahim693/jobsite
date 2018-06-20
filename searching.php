<?php
include "dbconnect.php";
session_start();
if(isset($_POST['jobTit']) || ($_POST['jobLoc'])){
    $query="select * from jobs where jobTitle like '%".$_POST['jobTit']."%' or jobCompany like '%".$_POST['jobTit']."%'";
    // echo $query;
    $run=mysqli_query($conn,$query);
?>
  
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Jobs</title>
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.js" crossorigin="anonymous"></script>
        <style>

            #colorChange{
                margin-bottom: 10px;   
                padding-bottom: 10px;
                padding-top: 10px;
                background-color:#f5f5f5 ;
            }
        </style>

    </head>
    <body>

        <h2 id="title">Job Site</h2>
        <!-- Modal -->
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
                        <a href="adminLogin.php"><button type="button" class="btn btn-default" >Admin Panel</button></a>
                        <a href="Register.php"><button type="button" class="btn btn-default" >Create account</button></a>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <!--Navigation-->
        <div id="navigation">
            <ul class="nav nav-pills"> 
                <!--Dropdown-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="post.php">Post</a></li>
                        
                        <li><a href="resumeBuilder.php">Create Resume</a></li>
                        <li id="resume"><a href="resumeView.php?email=<?php echo $_SESSION['email']?>">View Resume</a></li>
                    </ul>
                </li>
                <li id="loginButton"><a href="#" id="loginButton" data-toggle="modal" data-target="#myModal">Login</a></li>
                <li role="presentation" class="active"><a href="index.php">Home</a></li>
            </ul>
        </div>
        <div id="row">
            <div class="col-md-9">
                <div id="row">
                    <?php
                    while($row=mysqli_fetch_assoc($run)){ ?>
                    <div id="colorChange" class="col-md-12">
                        <h3><?php echo $row['jobCompany'];?></h3>
                        <h4><?php echo $row['jobTitle'];?></h4>
                        
                        <a class="btn btn-primary" href="jobDetails.php?id=<?php echo $row['jobId'];?>">View Job<span class="glyphicon glyphicon-chevron-right"></span></a>    
                    </div>
                    <?php
                                                        }
                    }
                    ?>
                </div>
            </div>


        </div>
        <footer id="footer" class="footer">
            <p>Copyright &copy; Md. Fahim Chowdhury</p>
        </footer>

        <?php
        if(!empty($_SESSION)){?>
        <script type='text/javascript'>
            document.getElementById('loginButton').innerHTML="<a href='logout.php?logout=true'>Log Out</a>";
        </script>
       <?php
        }else{?>
        <script type='text/javascript'>
            document.getElementById('resume').innerHTML="<a href='error.php?flag=3'>View Resume</a>";
        </script>
        <?php
        }
        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>


    </body>
</html>