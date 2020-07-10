<html>
<head>
  <title>Chat App</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/sign-in.css" type="text/css">
</head>
<body>
    <div class="signin-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign in</h2>
                <p>Log in to my Chat</p>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="xyz@abc.com" 
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="pass" placeholder="Password" 
                autocomplete="off" required>
            </div>
            <div class="small">
                Forgot password?
                <a href="forgot-pass.php">
                    Click Here
                </a>
            </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">
                    Sign In
                </button>
            </div>
            <?php include("signin_user.php");
             ?> 
        </form>
        <div class="text-center small" style="color: #674288;">
            Don't have account?
            <a href="signup.php">Create One</a>
        </div>
    </div>
</body>
</html>