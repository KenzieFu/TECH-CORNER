    
<?php 

include('layout/header.php');
session_start()

?>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-password-image"></div>
                            <div class="col-lg-6">
                                <div class="p-3">
                                    <div class="text-center">
                                        <a href="../forum/index.php"><img src="assets/img/logo.png" width="150px"></a>
                                        <hr>
                                        <h1 class="h4 text-gray-900 mb-2">Forgot Your Password?</h1>
                                    <?php if(isset($_SESSION["reset"])) { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <h4 class="alert-heading">Failed</h4>
                                        <p>Email does not exist. Please register your email.!</p>
                                        <hr>
                                        <div class="text-center">
                                            <a class="small" href="register.php">Create an account!</a>
                                        </div>
                                    </div>
                                    <?php
                                        unset($_SESSION["reset"]); 
                                        } else { 
                                    ?>
                                        <p class="mb-4">We get it, stuff happens. Just enter your email address below and we'll send you a link to reset your password!</p>
                                    <?php } ?>
                                    </div>
                                    <form class="user" action="user.php?aksi=reset-password" method="POST">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"  id="email" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                        </div>
                                        <button class="btn btn-success btn-user btn-block" name="reset-password">Reset Password</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="login.php">Already have an account? Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include('layout/header.php'); ?>