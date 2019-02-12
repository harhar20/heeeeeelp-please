<?php
include('dbcontroller.php');

$fname = $contact = $address = $username = $email = $pass = "";
$fnameErr = $contactErr = $addressErr = $usernameErr = $emailErr = $passErr =  "";

session_start();
if(isset($_POST['signup'])){

    if(empty($_POST["fname"])){
        $fnameErr = "Fullname is required !";

    }else{

        $fname = $_POST["fname"];
    }


    if(empty($_POST["contact"])){
        $contactErr = "Contact is required !";

    }else{

        $contact = $_POST["contact"];
    }



    if(empty($_POST["address"])){
        $addressErr = "Address is required !";

    }else{

        $address = $_POST["address"];
    }

    if(empty($_POST["username"])){
        $usernameErr = "Username is required !";

    }else{

        $username = $_POST["username"];
    }

    if(empty($_POST["email"])){
        $emailErr = "Email is required !";

    }else{

        $email = $_POST["email"];
    }


    if(empty($_POST["password"])){
        $passErr = "Password is required !";

    }else{

        $pass = $_POST["password"];
    }

        if ($fname && $contact && $address && $username && $email && $pass ) {

           $check_fullname = strlen($fname);
           $check_username = strlen($username);
           if ($check_fullname < 8) {
                $fnameErr = "Your fullname is too short";

           }else{
                 if ($check_username < 6){

                    $usernameErr = "Username is too short";
                 }else{
                    if (!filter_var($email , FILTER_VALIDATE_EMAIL)){


                    }else{

                        mysqli_query($con, "INSERT INTO users (username,email,password,Fullname,contact,Address) VALUES('$username', '$email','$pass','$fname','$contact','$address')");
                 }
                    echo "<script>alert('Sign up Successfully');window.location.href='login.php'</script>";
}


             }
        }
    }

?>


<style>
.error{
    color:Red;
}
</style>
<!doctype html>

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Sign up</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/bootstrap-datepicker/bootstrap-datetimepicker.min.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>
        <div class="bg-gradient position-relative h-100vh">          
            <div class="home-table">
                <div class="home-table-center">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="text-center">
                                    <p class="mb-4 pb-3"><a href="index.php" class="text-white">Back To Home <i class="mdi mdi-home"></i></a></p>
                                </div>
                                <div class="account_box bg-gradient">
                                    <img src="https://i.ibb.co/rcD7YfS/ak-white-logo.png" alt="" class="img-fluid mx-auto d-block" style="height: 42px;    margin-bottom: 15px;">

                                    
                                    <form method="POST">
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Fullname</label>
                                            <input type="text" name="fname" class="form-control trial-input" placeholder="Fullname"  value="<?php echo $fname ?>"> <span class ="error"><?php echo $fnameErr; ?> </span>
                                       
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Contact Number</label>
                                            <input type="number" name="contact" class="form-control trial-input" placeholder="Contact Number" value="<?php echo $contact ?>"> <span class ="error"><?php echo $contactErr; ?> </span>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Address</label>
                                            <input type="text" name="address" class="form-control trial-input" placeholder="Address" value="<?php echo $address ?>"><span class ="error"><?php echo $addressErr; ?> </span>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Username</label>
                                            <input type="text" name="username" class="form-control trial-input" placeholder="Username" value="<?php echo $username ?>">
                                       <span class ="error"><?php echo $usernameErr; ?> </span>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Email</label>
                                            <input type="text" name="email" class="form-control trial-input" placeholder="Email" value="<?php echo $email ?>"><span class ="error"><?php echo $emailErr; ?> </span>
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Password</label>
                                            <input type="password" name="password" class="form-control trial-input" placeholder="Password"><span class ="error"><?php echo $passErr; ?> </span>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-custom w-100 mt-3" name="signup">Sign up</button>
                                        </div>
                                        
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </body>
    </html>
