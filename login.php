<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
      <div id="login">
        <h1 class="text-center pt-5"><b> User Login Page</b></h1></b>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" method="post" action="validation.php" >
                            <?php include('errors.php'); ?> 	
                            <h3 class="text-center text-danger">LOGIN/SIGNUP</h3>
                            <div class="form-group">
                                <label for="username" class="text-danger">Username:</label><br>
                                <input type="username" name="username" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Password" class="text-danger">Password:</label><br>
                                <input type="Password" name="Password" id="Password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-danger"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="login_user" class="btn btn-danger btn-md" value="submit">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="register.php" class="text-danger">Register here</a>
                            </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
</body>
</html>



