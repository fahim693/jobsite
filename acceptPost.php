<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Untitled Document</title>
    </head>
    <body>

        <?php
        include "dbconnect.php";
        
        $query="update posts set flag=1 where postId='".$_GET['id']."'";
        mysqli_query($conn,$query);
           
        header('Location:adminPost.php');
        ?>
     

    </body>
</html>