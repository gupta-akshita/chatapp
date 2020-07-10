<html>
<head>
  <title>Create new account</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/signup.css" type="text/css">
</head>
<body>
    <div class="signup-form">
        <form action="" method="post">
            <div class="form-header">
                <h2>Sign up</h2>
                <p>Fill out this form and start chatting</p>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="user_name" placeholder="Jhon Doe"
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="user_pass" placeholder="Password" 
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="user_email" placeholder="xyz@abc.com" 
                autocomplete="off" required>
            </div>
            <div class="form-group">
                <label>Country</label>
                <select class="form-control" name="user_country" required>
                    <option disabled="">Select an option</option>
                    <option>India</option>
                    <option>Nepal</option>
                    <option>America</option>
                    <option>Russia</option>
                </select>
            </div>
            <div class="form-group">
                <label>Gender</label>
                <select class="form-control" name="user_gender" required>
                    <option disabled="">Select your gender</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label class="checkbox-inline">
                    <input type="checkbox" required>  I accept the <a href="#">Terms and Conditions</a>
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_up">
                    Sign up
                </button>
            </div>
            <?php 
            include("signup_user.php"); 
            ?>
        </form>
        <div class="text-center small" style="color: #674288;">
            Already have account?
            <a href="signin.php">Signin here</a>
        </div>
    </div>
</body>
</html>