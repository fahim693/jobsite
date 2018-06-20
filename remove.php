<?php
include "dbconnect.php";

$query="delete from jobapplication where applicationId='".$_GET['id']."'";

mysqli_query($conn,$query);
header('Location: adminJob.php');
?>

