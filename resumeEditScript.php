<?php
include "dbconnect.php";

$name=mysqli_real_escape_string($conn,$_POST['name']);
$skills=$_POST['skill'];
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

$query="update resume set name='$name',skill='$skills',schoolName='$s_name',schoolGradYear='$s_grad',schoolLocation='$s_loc',collegeName='$c_name',collegeGradYear='$c_grad',collegeLocation='$c_location',uniName='$u_name',uniGradYear='$u_grad',uniLocation='$u_loc',uniStudy='$u_study',career='$career',workHistory='$work_history',extraCurriculum='$extra_curr' where userEmail='".$_GET['email']."'";

mysqli_query($conn,$query);
header('Location:resumeView.php?email='.$_GET['email']);
?>