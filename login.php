<?php
session_start();
include_once 'dbconnect.php';
$flag=$_GET['flag'];

if(isset($_SESSION['user'])!="")
{
    header("Location: login.php");
}
if(isset($_POST['btn-login']))
{
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $upass = mysqli_real_escape_string($conn,$_POST['pass']);
    if($email=='admin@admin.com' && $upass=='admin'){
        header('Location: admin.php');
    }else{
        $res=mysqli_query($conn,"SELECT * FROM user WHERE userEmail='$email'");
        $row=mysqli_fetch_array($res);
        if($row['userPass']==md5($upass))
        {

            $_SESSION['user'] = $row['userName'];
            $_SESSION['email'] = $row['userEmail'];
            $_SESSION['login']=true;

            var_dump($flag);
            if($flag==0){  //job
                header( "Location:jobDetails.php?id=".$_GET['id'] );    
            }else if($flag==1){  //post
                header( "Location:post.php" );
            }else if($flag==2){  //comment
                header("Location:postDetail.php?id=".$_GET['id']);    
            }else if($flag==5){
                header("Location: index.php");        
            }
           
        }

        else
        {
?>
<script>alert('wrong details');</script>
<?php
        }
    }

}
?>
