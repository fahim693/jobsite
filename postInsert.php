<?php
include "dbconnect.php";
session_start();
if(!isset($_SESSION['login'])){
    header('Location: error.php?flag=1');
}else if(!empty($_POST['postDesc']) && !empty($_POST['postCategory']) && !empty($_POST['postTitle'])){
    $query="insert into posts(postTitle,postDescription,postCategory,postUserId,flag) values('".$_POST['postTitle']."','".$_POST['postDesc']."','".$_POST['postCategory']."','".$_SESSION['user']."',0)";
    
    //echo $query;
    mysqli_query($conn,$query);
    header('Location: post.php');
}else{
    echo "Fill all the fields";
}

?>