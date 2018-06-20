<?php
include "dbconnect.php";
session_start();
$id=$_GET['id'];
if(!isset($_SESSION['login'])){    
    header('Location:error.php?id='.$id.'&flag=0');
}else if(isset($_GET['id'])){
    $retrieve="select * from jobs where jobId='".$_GET['id']."'";

    $run=mysqli_query($conn,$retrieve);
    $row=mysqli_fetch_assoc($run);

    $title=mysqli_real_escape_string($conn,$row['jobTitle']);
    $user=mysqli_real_escape_string($conn,$_SESSION['user']);
    $email=mysqli_real_escape_string($conn,$_SESSION['email']);
    $company=mysqli_real_escape_string($conn,$row['jobCompany']);

    $insertion="insert into jobapplication(applicantName,applicantEmail,appliedJobTitle,appliedJobCompany) values('".$_SESSION['user']."','".$_SESSION['email']."','".$title."','".$company."')";

    mysqli_query($conn,$insertion);?>

<div style="text-align:center;font-size:26px" class="alert alert-warning">
    <strong>Successfully Applied!!</strong> 
</div>
<?php
    header( "refresh:1; url=jobDetails.php?id=".$id );

}else{?>
<script>alert("Could not apply");</script>
<?php
}
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>You made it</title>
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    </head>
    <body>



    </body>
</html>