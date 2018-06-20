<?php
include "dbconnect.php";
session_start();
if(!isset($_SESSION['login'])){
    header("Location:error.php?flag=3");
}
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Build Resume</title>
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet" type="text/css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    </head>
    <body>
        <center>
            <h2>Build Your Resume</h2>
            <form method="post" action="resume.php" class="form-horizontal" id="resumeForm" role="form">
                <div class="form-group">
                    <label class="control-label col-sm-2" for="email">Name:</label>
                    <div class="col-sm-5">
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name">
                    </div>
                    <div class="col-sm-5">
                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Career Focus:</label>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="110" name="careerFocus" id="careerFocus" placeholder="Enter brief description of your professional background"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Add Skills:</label>
                    <div class="col-sm-10">
                        <label><input name="skill[]" value="Excellent analytical skills" type="checkbox"> Excellent analytical skills</label>
                        <label><input name="skill[]" value="Cooperative team member" type="checkbox"> Cooperative team member</label>
                        <label><input name="skill[]" value="Outstanding interpersonal skills" type="checkbox"> Outstanding interpersonal skills</label>
                        <label><input name="skill[]" value="Computer proficient" type="checkbox"> Computer proficient</label>
                        <label><input name="skill[]" value="Extremely organized" type="checkbox"> Extremely organized</label>
                        <label><input name="skill[]" value="Microsoft Office, Excel, PowerPoint proficiency" type="checkbox"> Microsoft Office, Excel, PowerPoint proficiency</label>
                        <label><input name="skill[]" value="Quick learner" type="checkbox"> Quick learner</label>
                        <label><input name="skill[]" value="Strong verbal communication" type="checkbox"> Strong verbal communication</label>
                        <label><input name="skill[]" value="Energetic and organized" type="checkbox"> Energetic and organized</label>
                        <label><input name="skill[]" value="Issue resolution" type="checkbox"> Issue resolution</label>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Education:</label>
                    <div class="col-sm-5">
                        <input type="text" name="school" class="form-control" id="lname" placeholder="School">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="school_gyear" class="form-control" id="lname" placeholder="Grad Year">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="school_location" class="form-control" id="lname" placeholder="City,Country">
                    </div><br><br>
                    <label class="control-label col-sm-2" for="pwd"></label>
                    <div class="col-sm-5">
                        <input type="text" name="college" class="form-control" id="lname" placeholder="College">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="college_gyear" class="form-control" id="lname" placeholder="Grad Year">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="college_location" class="form-control" id="lname" placeholder="City,Country">
                    </div><br><br>
                    <label class="control-label col-sm-2" for="pwd"></label>
                    <div class="col-sm-3">
                        <input type="text" name="university" class="form-control" id="lname" placeholder="University">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" name="studies" class="form-control" id="lname" placeholder="Field of study">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="uni_gyear" class="form-control" id="lname" placeholder="Grad Year">
                    </div>
                    <div class="col-sm-2">
                        <input type="text" name="uni_location" class="form-control" id="lname" placeholder="City,Country">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Work History:</label>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="110" name="history" id="careerFocus" placeholder="Mention Company Name, Position, Duration of Service"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-2" for="pwd">Extra-Curricular Activities:</label>
                    <div class="col-sm-10">
                        <textarea rows="3" cols="110" name="extra_curr" id="careerFocus" placeholder="Enter any organizations you belong to, or leadership roles you hold outside of work."></textarea>
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