<?php session_start();?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="css/login.css">
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <!-- ✅ FORM TAG START -->
                        <form id="login-form" class="form" action="logIndb.php" method="POST">
                            <h3 class="text-center text-info">Login</h3>

                            <!-- Username Field -->
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="username" id="username" class="form-control" required>
                            </div>

                            <!-- Password Field -->
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control" required>
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="form-group">
                                <label for="remember-me" class="text-info">
                                    <span>Remember me</span>
                                    <span><input id="remember-me" name="remember-me" type="checkbox"></span>
                                </label><br>

                                <!-- Submit Button -->
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Submit">
                            </div>

                            <!-- Register Link -->
                            <div id="register-link" class="text-right">
                                <a href="signUp.php" class="text-info">Register here</a>
                            </div>
                        </form>
