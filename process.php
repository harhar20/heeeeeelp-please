<?php 
require_once('dbcontroller.php');
session_start();
    if(isset($_POST['Login']))
    {
       if(empty($_POST['Email']) || empty($_POST['password']))
       {
            echo "<script>alert('Fields must not be empty');window.location.href='login.php'</script>";




       }
       else
       {
            $query="select * from users where email='".$_POST['Email']."' and password='".$_POST['password']."'";
            $result=mysqli_query($con,$query);
 
            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['users']=$_POST['Email'];
                header("location:login2.php");
            }
            else
            {
                echo "<script>alert('Incorrect Email or Password');window.location.href='login.php'</script>";

            }
       }
    }
    else
    {
        echo "<script>alert('Incorrect Email or Password');window.location.href='login.php'</script>";

    }
 
?>