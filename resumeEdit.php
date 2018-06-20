<?php
include "dbconnect.php";
session_start();

if(!isset($_SESSION['login'])){
    header('Location:error.html');
}else{
    $query="select * from resume where userEmail='".$_GET['email']."'";
    
    $run=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($run);
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Update Resume</title>
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    </head>
    <body>
        <center>
            <h2>Update Your Resume</h2>
            <form method="post" action="resumeEditScript.php?email=<?php echo $_GET['email'];?>" class="form-horizontal" id="resumeForm" role="form">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Name:</label>
                    <div class="col-sm-5">
                        <input type="text" name="name" class="form-control" id="fname" value="<?php echo $row['name']?>">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Career Focus:</label>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="110" name="careerFocus" id="careerFocus"><?php echo $row['career']?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Add Skills:</label>
                    <div class="col-sm-10">
                         <textarea rows="3" cols="110" name="skill"><?php echo $row['skill']?></textarea>
                        
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Education:</label>
                    <div class="col-sm-5">
                        <input type="text" name="school" class="form-control" id="lname" value=<?php echo $row['schoolName']?>>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="school_gyear" class="form-control" id="lname" value=<?php echo $row['schoolGradYear']?>>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="school_location" class="form-control" id="lname" value=<?php echo $row['schoolLocation']?>>
                    </div><br><br>
                    <label class="control-label col-sm-2" for="pwd"></label>
                    <div class="col-sm-5">
                        <input type="text" name="college" class="form-control" id="lname" value=<?php echo $row['collegeName']?>>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="college_gyear" class="form-control" id="lname" value=<?php echo $row['collegeGradYear']?>>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="college_location" class="form-control" id="lname" value="collegeLocation">
                    </div><br><br>
                    <label class="control-label col-sm-2" for="pwd"></label>
                    <div class="col-sm-3">
                        <input type="text" name="university" class="form-control" id="lname" value=<?php echo $row['uniName']?>>
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="studies" class="form-control" id="lname" value=<?php echo $row['uniStudy']?>>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="uni_gyear" class="form-control" id="lname" value=<?php echo $row['uniGradYear']?>>
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="uni_location" class="form-control" id="lname" value="uniLocation">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Work History:</label>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="110" name="history" id="careerFocus">value=<?php echo $row['workHistory']?></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Extra-Curricular Activities:</label>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="110" name="extra_curr" id="careerFocus">value=<?php echo $row['extraCurriculum']?></textarea>
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
            </form>
        </center>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>