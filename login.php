

<?php
require_once("dbcontroller.php");


?>
<!doctype html>
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
                                    <form>
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Email</label>
                                            <input type="email" id="exampleInputEmail1" class="form-control trial-input" placeholder="Email Id">
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <label class="text-white">Password</label>
                                            <input type="password" id="password1" class="form-control trial-input" placeholder="Password">
                                        </div>
                                        <div class="col-lg-12 mt-3">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label text-white" for="customCheck1">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <button class="btn btn-custom w-100 mt-3">Sign In</button>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-center mt-3"><a href="forgot.html" class="text-white font-weight-bold">Forgot your password ?</a></p>
                                        </div>
                                    </form>
                                </div>
                                <div class="text-center mt-4">
                                    <p><small class="text-white mr-2">Don't have an account ?</small> <a href="#" class="text-white font-weight-bold">Create an account</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </body>
    </html>
