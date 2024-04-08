<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php


    if (isset($_POST['register'])) {
        // receive all input values from the form
        $username = mysqli_real_escape_string($db, $_POST['username']);

        $password = mysqli_real_escape_string($db, $_POST['password']);
        echo $username, $password;

        if (empty($username)) {
            array_push($errors, "Username is required");
        }

        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        // first check the database to make sure
        // a user does not already exist with the same username and/or email
        $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) { // if user exists
            if ($user['username'] === $username) {
                array_push($errors, "Username already exists");
            }
        }

        // Finally, register user if there are no errors in the form
        if (count($errors) == 0) {

            echo $password;
            $query = "INSERT INTO users(username, password)
    VALUES('$username', '$password')";
            mysqli_query($db, $query);
            $_SESSION['username'] = $username;

            header('location: sign-in.php');
        }
    } ?>
    <div class="container mt-3">
        <h2>Register an Account</h2>
        <form action="register.php" method="POST">
            <?php include('error.php'); ?>
            <div class="mb-3 mt-3">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
            </div>

            <button type="submit" name="register" class="btn btn-primary">Register</button>

        </form>
        <div class="mb-3 mt-3">
            <a class="d-block small mt-3" href="sign-in.php">Sign In</a>
            <!-- <a class="d-block small" href="forgot-password.php">Forgot Password?</a>-->
        </div>

    </div>

</body>

</html>