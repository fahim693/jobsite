<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>

    <form action="test.php" method="post">
        <input name="myName">
        <input name="submit" type="submit" value="submit">
    </form>
    
    <?php
    include "dbconnect.php";
    echo "working";
    if(isset($_POST["submit"])){
        $query="insert into comments values(NULL,'2','".$_POST['myName']."')";
        echo "working";
        //var_dump($query);
        mysqli_query($conn,$query);
        mysqli_close($conn);
        
    }
    echo "working";
    ?>

</body>
</html>