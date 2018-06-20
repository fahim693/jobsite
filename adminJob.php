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
                <th>Name</th>
                <th>Email</th>
                <th>Title</th>
                <th>Company</th>
                <th>Time</th>
            </tr>
            <?php
            $query="select * from jobapplication";

            $run=mysqli_query($conn,$query);

            while($row=mysqli_fetch_assoc($run)){ ?>

            <tr class="success">
                <td><a href="resumeView.php?email=<?php echo $row['applicantEmail']?>";><?php echo $row['applicantName']?></a></td>
                <td><?php echo $row['applicantEmail']?></td>
                <td><?php echo $row['appliedJobTitle']?></td>
                <td><?php echo $row['appliedJobCompany']?></td>
                <td><?php echo $row['appliedDate']?></td>
                <td><a href="remove.php?id=<?php echo $row['applicationId']?>"><button class="btn btn-primary btn-md" type="submit">Delete</button></a></td>
            </tr>
            <?php   
                                                }
            ?>
        </table>
        
        <br><br>


    </body>
</html>