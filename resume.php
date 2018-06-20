<?php
include "dbconnect.php";
session_start();
if(isset($_SESSION['login'])){
    
    $conc=$_POST['fname']." ".$_POST['lname'];
    $name=mysqli_real_escape_string($conn,$conc);
    $skills=$_POST['skill'];
    
    $string=implode(", ",$skills);
   
        //$skills=$_POST['analatycal_skill']." ".$_POST['team_work']."".$_POST['interpersonal_skill']."".$_POST['computer']."".$_POST['organized']."".$_POST['computer']."".$_POST['learner']."".$_POST['energetic']."".$_POST['resolution']."".$_POST['communication'];

    $s_name=mysqli_real_escape_string($conn,$_POST['school']);
    $c_name=mysqli_real_escape_string($conn,$_POST['college']);
    $u_name=mysqli_real_escape_string($conn,$_POST['university']);
    $s_grad=mysqli_real_escape_string($conn,$_POST['school_gyear']);
    $c_grad=mysqli_real_escape_string($conn,$_POST['college_gyear']);
    $u_grad=mysqli_real_escape_string($conn,$_POST['uni_gyear']);
    $s_loc=mysqli_real_escape_string($conn,$_POST['school_location']);
    $c_loc=mysqli_real_escape_string($conn,$_POST['college_location']);
    $u_loc=mysqli_real_escape_string($conn,$_POST['uni_location']);
    $u_study=mysqli_real_escape_string($conn,$_POST['studies']);
    $career=mysqli_real_escape_string($conn,$_POST['careerFocus']);
    $work_history=mysqli_real_escape_string($conn,$_POST['history']);
    $extra_curr=mysqli_real_escape_string($conn,$_POST['extra_curr']);

//    $query="insert into resume(name) values($name)";
//    var_dump($query);
    $query="insert into resume(name,skill,schoolName,schoolGradYear,schoolLocation,collegeName,collegeGradYear,collegeLocation,uniName,uniGradYear,uniLocation,uniStudy,career,workHistory,extraCurriculum,userEmail) values('$name','$string','$s_name','$s_grad','$s_loc','$c_name','$c_grad','$c_loc','$u_name','$u_grad','$u_loc','$u_study','$career','$work_history','$extra_curr','".$_SESSION['email']."')";
   // echo $query;
   
    mysqli_query($conn,$query);
    
    mysqli_close($conn);
    
    header('Location:resumeView.php');
}else{
    echo "Not working";
}


?>