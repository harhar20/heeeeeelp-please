<?php
require_once("dbcontroller.php");





?>


<!doctype html>
<!--nocitce-->
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="image/favicon.png" type="image/png">
        <title>Login</title>
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

                                         <form action="process.php" method="post"">
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Email</label>
                                            <input type="email" name="Email" class="form-control trial-input" placeholder="Email">
                                       
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Password</label>
                                            <input type="password" name="password" class="form-control trial-input" placeholder="Password">
                                        </div>
                                        <div class="col-lg-12">
                                            <button type = "submit" class="btn btn-custom w-100 mt-3" name="Login">Sign In</button>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-center mt-3"><a href="forgot.html" class="text-white font-weight-bold">Forgot your password ?</a></p>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-center mt-4">
                                    <p><small class="text-white mr-2">Don't have an account ?</small> <a href="Signup.php" class="text-white font-weight-bold">Create an account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </body>
    </html>
