<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Need login</title>
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    </head>
    <body>
        <div style="text-align:center;font-size:26px" class="alert alert-warning">
            <strong>Warning!!!</strong> You must login first
        </div>
        <?php
        include "dbconnect.php";
        $flag=$_GET['flag'];
        if($flag==0){  //job
            header( "refresh:1.5; url=jobDetails.php?id=".$_GET['id'] );    
        }else if($flag==1){  //post
            header( "refresh:1.5; url=post.php" );
        }else if($flag==2){  //comment
            header( "refresh:1.5; url=postDetail.php?id=".$_GET['id'] );    
        }else if($flag==3){ //resume build
            header( "refresh:1.5; url=index.php");    
        }
        
        ?>


    </body>
</html>