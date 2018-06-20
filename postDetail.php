<?php
include "dbconnect.php";
session_start();
$id =$_GET['id'];

$query="select * from posts where postId='".$id."'";
$run=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($run);
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Posts</title>
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Custom CSS -->


        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.js" crossorigin="anonymous"></script>
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

                        <form class="form-horizontal" role="form" method="post" action="login.php?flag=2&id=<?php echo $id;?>">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10">          
                                    <input type="password" class="form-control" name="pass" placeholder="Enter password">
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

                        <li ><a href="resumeBuilder.php">Create Resume</a></li>
                        <li id="resume"><a href="resumeView.php?email=<?php echo $_SESSION['email']?>">View Resume</a></li>
                    </ul>
                </li>
                <li id="loginButton"><a href="#" data-toggle="modal" data-target="#myModal">Login</a></li>
                <li role="presentation"><a href="index.php">Home</a></li>
            </ul>
        </div>
        <div class="container">
            <div class="row">

                <!-- Blog Post Content Column -->
                <div class="col-lg-9">

                    <!-- Blog Post -->

                    <!-- Title -->
                    <h1><?php echo $row['postTitle']?></h1>

                    <!-- Author -->
                    <p class="lead">
                        by <a href="#"><?php echo $row['postUserId']?></a>
                    </p>

                    <hr>

                    <!-- Date/Time -->
                    <p><span class="glyphicon glyphicon-time"></span><?php echo $row['postTime']?></p>

                    <hr>

                    <!-- Preview Image -->


                    <hr>

                    <!-- Post Content -->
                    <p class="lead"><?php echo $row['postDescription'];?></p>

                    <hr>

                    <!-- Blog Comments -->

                    <!-- Comments Form -->
                    <?php
                    $query="select * from comments where postId='".$id."'";
                    $run=mysqli_query($conn,$query);
                    ?>

                    <div class="well">
                        <h4>Leave a Comment:</h4>
                        <form role="form" method="post" action="commentInsert.php?id=<?php echo $id;?>">
                            <div class="form-group">
                                <textarea name="comment" class="form-control" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                    <hr>

                    <!-- Posted Comments -->

                    <!-- Comment -->
                    <div class="media">
                        <?php
                        while($row=mysqli_fetch_assoc($run)){ ?>
                        <div class="media-body">
                            <h4 class="media-heading"><?php echo $row['commentUserId']?>
                                <small><?php echo $row['currentTime']?></small>
                            </h4>
                            <?php echo $row['comment']?>
                        </div><br>

                        <?php 
                                                            }
                        ?>


                    </div>



                </div>

                <!-- Blog Sidebar Widgets Column -->
                <div class="col-md-3">

                    <!-- Blog Search Well -->


                    <!-- Blog Categories Well -->
                    <div class="well">
                        <h4>Blog Categories</h4>
                        <div class="row">

                            <div class="col-lg-6">

                                <ul class="list-unstyled">
                                    <?php
                                    $query="select * from category";

                                    $run=mysqli_query($conn,$query);

                                    while($row=mysqli_fetch_assoc($run)){
                                        echo "<li><a href='post.php?catName=".$row['categoryName']."'>".$row['categoryName']."</a></li>";
                                    }

                                    ?>
                                </ul>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>



                </div>

            </div>
            <!-- /.row -->

            <hr>

            <!-- Footer -->
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