<?php
 
    $con=mysqli_connect('localhost','root','','dos');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>