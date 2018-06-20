<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Resume Viewer</title>
         <link href="style.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <style>
            #resumeDetails{
                margin-top: 20px;
                margin-left: 20px;
            }
            #titleR{
                color: brown;
                font-size: 22px;
                
                
            }
            #val{
                font-size: 18px; 
                margin-right: 100px;
                color: black;
            }
            #uniVal{
                font-size: 18px; 
                margin-right: 60px;
                color: black;
            }
            #school{
                 color: brown;
                font-size: 22px;
                margin-left: 150px;
            }
        </style>
    </head>
    <body>
         <h2 id="title">Job Site</h2>
        <div id="navigation">
            <ul class="nav nav-pills"> 
                <!--Dropdown-->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Features <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="post.php">Post</a></li>
                    </ul>
                </li>
                <li id="loginButton"><a href="#" id="loginButton" data-toggle="modal" data-target="#myModal">Login</a></li>
                <li role="presentation" class="active"><a href="index.php">Home</a></li>
            </ul>
        </div>

        <?php
        include "dbconnect.php";
        session_start();
        if(!isset($_SESSION['login'])){
            header('Location:error.php?flag=3');
        }else{
            
            $query="select * from resume where userEmail='".$_GET['email']."'";

            $run=mysqli_query($conn,$query);
            $row=mysqli_fetch_assoc($run); ?>

        <div id="resumeDetails">
            <p><span id="titleR">Name : </span><span id="val"><?php echo $row['name']?></span></p><hr>
            <p><span id="titleR">Career Focus : </span><span id="val"><?php echo $row['career']?></span></p><hr>
            <p><span id="titleR">Skills : </span><span id="val"><?php echo $row['skill']?></span></p><hr>
            <p><span id="titleR">Education :</span></p>
            <p><span id="school">School : </span><span id="val"><?php echo $row['schoolName']?></span> <span id="titleR">Grad Year : <span id="val"><?php echo $row['schoolGradYear']?></span> </span><span id="titleR">Location : <span id="val"><?php echo $row['schoolLocation']?></span></span></p>
            <p><span id="school">College : </span><span id="val"><?php echo $row['collegeName']?></span> <span id="titleR">Grad Year : <span id="val"><?php echo $row['collegeGradYear']?></span> </span><span id="titleR">Location : <span id="val"><?php echo $row['collegeLocation']?></span></span></p>
            <p><span id="school">University : </span><span id="uniVal"><?php echo $row['uniName']?></span> <span id="titleR">Grad Year : <span id="uniVal"><?php echo $row['uniGradYear']?></span> </span><span id="titleR">Location : <span id="uniVal"><?php echo $row['uniLocation']?></span></span><span id="titleR">Field of study : <span id="uniVal"><?php echo $row['uniStudy']?></span></span></p><hr>
            <p><span id="titleR">Work history :</span><span id="val"><?php echo $row['workHistory']?></span> </p><hr>
            <p><span id="titleR">Extra-curriculur activities :</span> <span id="val"><?php echo $row['extraCurriculum']?></span></p><hr>
            <div style="text-align:center;margin-bottom:15px;">
                <a href="resumeEdit.php?email=<?php echo $_GET['email'];?>"><button type="submit" class="btn btn-primary btn-md">Edit</button></a>
            </div>
            <?php
        }

            ?> 


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