<?php require('config.php') ?>
<?php require('functions.php') ?>
<?php

    if(isset($_POST['regbtn'])){
        $entry_datetime = date('Y-m-d H:i:s');
        $username = $_POST['username'];
        $email = $_POST['uemail'];
        $password = $_POST['userpass'];
        $confPass = $_POST['userconfpass'];
        $status = "active";
    if ($password===$confPass) {
        $sql = "INSERT INTO cl_users(user_reg_datetime, user_username, user_email, user_password, user_status) VALUES ('$entry_datetime','$username','$email','$password','$status')";
        if($conn->query($sql)===true){
            $msg = "Registration Successfull";
        }else{
            $err = "Registration Faild: " . $conn->error;
        }
    }else{
        $err = "Password Not Match. Please Try Again";
    }


    
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration | ContactB16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
</head>
  <body id="login">
    <div class="container  h-100">
        <div class="row">
            <div class="col-6" style="margin: 30px auto;">
            <div class="logo">
                <img src="assets/imgs/logo.png" alt="">
            </div>
            <?php if(isset($msg)){ ?>
            <div class="alert alert-success"><?php echo $msg; ?></div>
            <?php } ?>

            <?php if(isset($err)){ ?>
            <div class="alert alert-danger"><?php echo $err; ?></div>
            <?php } ?>

            <form method="post" action="">
                <!-- username input -->
                <div class="form-outline mb-4">
                    <input type="text" name="username" id="username" class="form-control" />
                    <label class="form-label" for="username">Username</label>
                </div>
                
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="uemail" id="uemail" class="form-control" />
                    <label class="form-label" for="uemail">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="userpass" id="userpass" class="form-control" />
                    <label class="form-label" for="userpass">Password</label>
                </div>

                <!-- confirm Password input -->
                <div class="form-outline mb-4">
                    <input type="password" name="userconfpass" id="userconfpass" class="form-control" />
                    <label class="form-label" for="userconfpass">Confirm Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                    <div class="col">
                   
                    </div>

                    <div class="col">
                    <!-- Simple link -->
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" name="regbtn" class="btn btn-primary btn-block mb-4">Sign Up</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>I am a member? <a href="index.php">Login</a></p>
                    <p>or sign up with:</p>
                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fab fa-github"></i>
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>