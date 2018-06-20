<?php
include "dbconnect.php";
session_start();
?>
<html>

    <head>
        <title>Home</title>
        <!-- Latest compiled and minified CSS -->
        <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="js/bootstrap.js" crossorigin="anonymous"></script>
        <style>
            #row{
                padding-top: 13px;
                clear: both;
                margin-right: 30%;
                margin-left: 30%;
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

                        <form class="form-horizontal" role="form" method="post" action="login.php?flag=5">
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
        <!--        SEARCH-->
        <div id="searchPad">
            <form action="searching.php" method="post" style="margin-left:36%" class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" name="jobTit" placeholder="Search Job">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
        </div>

        <!--        SIDEBAR-->

        <div id="row">
            <div class="col-lg-6">
                <h4>Categories</h4>

                <?php

                $query="select * from category";

                $run=mysqli_query($conn,$query);

               while($row=mysqli_fetch_assoc($run)){ 
                ?>
                <ul>
                    <li><a href="jobPage.php?catName=<?php echo $row['categoryName'];?>"><?php echo $row['categoryName'];?></a></li>
                </ul>      

                <?php 
                                           }

                ?>

            </div>
            <div class="col-lg-6">
                <h4>Countries</h4>

                <?php
                $query="select * from   country";

                $run=mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($run)){ 
                ?>
                <ul>
                    <li><a href="jobPageCountrySearch.php?countryName=<?php echo $row['countryName'];?>"><?php echo $row['countryName'];?></a></li>
                </ul>      

                <?php 
                }


                ?>
            </div>

        </div>
        <!--        footer-->

        <footer id="footer" class="footer navbar-fixed-bottom">
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