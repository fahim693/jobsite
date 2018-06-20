<?php
include "dbconnect.php";

?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            table{
                width:100%;
            }
             #header{
                padding: 4%;
                background-color: black;
                color: white;
                text-align: center;
            }
            #buttons{
                padding: 1%;
                text-align: center;
            }

        </style>
    </head>
    <body>
         <a href="admin.php">
            <div id="header">
            <h1>Admin Page</h1>
        </div>
        </a>
        <div id="buttons">
            <a href="adminJob.php"><button type="button" class="btn btn-primary btn-lg">Job Applicants</button></a>
            <a href="adminPost.php"><button type="button" class="btn btn-primary btn-lg">Pending Posts</button></a>
            <a href="adminAllPost.php"><button type="button" class="btn btn-primary btn-lg">All Posts</button></a>
        </div>

        <table class="table">
            <tr class="danger">
                <th>Title</th>
                <th>Description</th>
                <th>Category</th>

            </tr>
            <?php
            $query="select * from posts";

            $run=mysqli_query($conn,$query);

            while($row=mysqli_fetch_assoc($run)){ 
                if($row['flag']==1){
            ?>

            <tr id="wizard" class="success">
                <td><?php echo $row['postTitle']?></td>
                <td><?php echo $row['postDescription']?></td>
                <td><?php echo $row['postCategory']?></td>
                <td><a href="removePost.php?id=<?php echo $row['postId']?>"><button id="btn" class="btn btn-primary btn-md" type="submit">Delete</button></a></td>
            </tr>
            <?php   
                }
            }
            ?>
        </table>

        <br><br>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
       

    </body>
</html>