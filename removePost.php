

        <?php
        include "dbconnect.php";
        
        $query="delete from posts where postId='".$_GET['id']."'";
        mysqli_query($conn,$query);
           
        header('Location:adminAllPost.php');
        ?>
     
