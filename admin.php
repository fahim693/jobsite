<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
        <link rel="stylesheet" href="css/bootstrap.css" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <style>
            #header{
                padding: 4%;
                background-color: black;
                color: white;
                text-align: center;
            }
            #buttons{
                padding: 8%;
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


    </body>
</html>