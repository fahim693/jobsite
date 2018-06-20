<?php
include "dbconnect.php";
session_start();
if(!isset($_SESSION['login'])){
    header('Location: error.php?id='.$_GET['id'].'&flag=2');
}else if(!empty($_POST['comment']) && isset($_GET['id'])){
    $query="insert into comments(postId,comment,commentUserId) values('".$_GET['id']."','".$_POST['comment']."','".$_SESSION['user']."')";
    
    //echo $query;
    mysqli_query($conn,$query);
    header('Location: postDetail.php?id='.$_GET['id']);
}else{
    echo "Did not post any comment";
}

?>