<?php session_start(); ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/sign up.css">

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Sign Up form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <!-- ✅ FORM START -->
                        <form id="login-form" class="form" action="signUpdb.php" method="POST">
                            <h3 class="text-center text-info">Sign Up</h3>
                            
                            <!-- Username -->
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>

                            <!-- Password -->
                            <div class="form-group">
                                <label for="pass" class="text-info">Password:</label><br>
                                <input type="password" name="pass" id="pass" class="form-control" required>
                            </div>

                            <!-- Remember Me (optional) -->
                            <div class="form-group">
                                <label for="remember-me" class="text-info">
                                    <span>Remember me</span>
                                    <span><input id="remember-me" name="remember-me" type="checkbox"></span>
                                </label><br>

                                <!-- Submit Button -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                            </div>

                            <!-- ✅ Login Link -->
                            <div id="register-link" class="text-right">
                                <a href="login.php" class="text-info">Login here</a>
                            </div>
                        </form>
                        <!-- ✅ FORM END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
