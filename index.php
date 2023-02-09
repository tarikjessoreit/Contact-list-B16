<?php require('config.php') ?>
<?php require('functions.php') ?>
<?php
if (isset($_COOKIE['loginstatus']) && $_COOKIE['loginstatus'] == true) {
    header('location:dashboard');
}


// login code
if (isset($_POST['loginbtn'])) {
    $username = $_POST['username'];
    $password = md5($_POST['userpass']);
    $sql = "SELECT * FROM $TBL_USER WHERE user_username = '$username' AND user_password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $msg = "Login Successfull";
        $row = $result->fetch_assoc();

        $uid = $row['ID'];
        $un = $row['user_username'];
        
        setcookie('userID', $uid, time() + 86400 * 7, '/');
        setcookie('username', $un, time() + 86400 * 7, '/');
        setcookie('loginstatus', true, time() + 86400 * 7, '/');
        header('location:dashboard');

    } else {
        $err = "Login Faild. Please try again";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | ContactB16</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body id="login">
    <div class="container  h-100">
        <div class="row">
            <div class="col-6" style="margin: 100px auto;">
                <div class="logo">
                    <img src="assets/imgs/logo.png" alt="">
                </div>
                <?php if (isset($msg)) { ?>
                    <div class="alert alert-success">
                        <?php echo $msg; ?>
                    </div>
                <?php } ?>

                <?php if (isset($err)) { ?>
                    <div class="alert alert-danger">
                        <?php echo $err; ?>
                    </div>
                <?php } ?>

                <form action="" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="username" id="username" class="form-control" />
                        <label class="form-label" for="username">Username</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="userpass" id="userpass" class="form-control" />
                        <label class="form-label" for="userpass">Password</label>
                    </div>

                    <!-- 2 column grid layout for inline styling -->
                    <div class="row mb-4">
                        <div class="col">
                            <!-- Checkbox -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                                <label class="form-check-label" for="form2Example31"> Remember me </label>
                            </div>
                        </div>

                        <div class="col">
                            <!-- Simple link -->
                        </div>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="loginbtn" class="btn btn-primary btn-block mb-4">Sign in</button>

                    <!-- Register buttons -->
                    <div class="text-center">
                        <p>Not a member? <a href="registration.php">Register</a></p>
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





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>